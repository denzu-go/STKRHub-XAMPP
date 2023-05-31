<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user WHERE user_id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $_SESSION["user_id"]);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();
}

$cartItems = [];
if (isset($user)) {
    $sql = "SELECT * FROM cart JOIN products ON cart.product_id = products.product_id WHERE user_id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $user['user_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $cartItems[] = $row;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title id="title">Cart</title>

    <!-- css -->
    <link rel="stylesheet" href="/STKRHub-XAMPP/css/cart.css" />

    <!-- icon -->
    <link rel="shortcut icon" type="image" href="../../img/logo.png">

    <!-- fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet" />
    <link href="https://fonts.cdnfonts.com/css/akira-expanded" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
    <link href="https://fonts.cdnfonts.com/css/sf-compact-display" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <my-header></my-header>
            
        <main>
            <div class="container-main">
                <div class="title-of-section">
                    <div class="title">
                        <p>My Cart</p>
                    </div>
                    <div class="description">
                        <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint sunt tempora earum quaerat officiis fuga assumasdasdenda ipsa suscipit libero unde!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint sunt tempora earum quaerat officiis fuga assumasdasdenda ipsa suscipit libero unde!</p>
                    </div>
                </div>
            </div>

            <h1>Cart</h1>

            <form method="POST" action="cart_preview.php">
                <table>
                    <tr>
                        <td>Select</td>
                        <td>Product</td>
                        <td>Description</td>
                        <td>Quantity</td>
                        <td>Price</td>

                    </tr>

                    <?php foreach ($cartItems as $row) { ?>
                        <tr>
                            <td>
                                <input type="checkbox" name="selectedIds[]" value="<?= $row['cart_id'] ?>" />
                            </td>
                            <td><?= $row['product_name'] ?></td>
                            <td><?= $row['product_description'] ?></td>
                            <td>
                                <input id="cart-quantity-<?= $row['cart_id'] ?>" type="number" class="form-control text-center cart-quantity" value="<?= $row['cart_quantity'] ?>" min="1" max="99" onchange="updateCartPrice(<?= $row['cart_id'] ?>, <?= $row['product_price'] ?>)" />
                            </td>
                            <td id="cart-price-<?= $row['cart_id'] ?>"><?= $row['cart_price'] ?></td>

                        </tr>
                    <?php } ?>

                </table>

                <button type="submit">Submit</button>
            </form>
        </main>

        <my-footer></my-footer>
    </div>

    <script src="/STKRHub-XAMPP/js/header.js"></script>
    <script src="/STKRHub-XAMPP/js/subnav.js"></script>
    <script src="/STKRHub-XAMPP/js/footer.js"></script>

    <script>
        function updateCartPrice(cartId, productPrice) {
            var cartQuantity = parseInt($('#cart-quantity-' + cartId).val());
            var cartPrice = cartQuantity * productPrice;

            // Apply discount every 10th value
            if (cartQuantity % 10 === 0) {
                var discount = productPrice * 0.75;
                cartPrice -= discount;
            }

            $('#cart-price-' + cartId).html(cartPrice.toFixed(2)); // Format the price with 2 decimal places

            // Send an AJAX request to update the cart_price in the database
            $.ajax({
                url: 'update_cart_price.php',
                method: 'POST',
                data: {
                    cartId: cartId,
                    cartPrice: cartPrice,
                    cartQuantity: cartQuantity,
                },
                success: function(response) {
                    console.log(response); // Optional: Log the response from the server
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText); // Optional: Log the error message
                }
            });
        }
    </script>
</body>

</html>