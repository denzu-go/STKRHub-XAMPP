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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
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
                        <input
                            type="checkbox"
                            name="selectedIds[]"
                            value="<?= $row['cart_id'] ?>"
                        />
                    </td>
                    <td><?= $row['product_name'] ?></td>
                    <td><?= $row['product_description'] ?></td>
                    <td>
                        <input
                            id="cart-quantity-<?= $row['cart_id'] ?>"
                            type="number"
                            class="form-control text-center cart-quantity"
                            value="<?= $row['cart_quantity'] ?>"
                            min="1"
                            max="99"
                            onchange="updateCartPrice(<?= $row['cart_id'] ?>, <?= $row['product_price'] ?>)"
                        />
                    </td>
                    <td id="cart-price-<?= $row['cart_id'] ?>"><?= $row['cart_price'] ?></td>
                    
                </tr>
            <?php } ?>

        </table>

        <button type="submit">Submit</button>
    </form>

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