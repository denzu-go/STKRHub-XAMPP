<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user 
            WHERE user_id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

$selectedIds = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['selectedIds'])) {
        $selectedIds = $_POST['selectedIds'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css -->
    <link rel="stylesheet" href="/STKRHub-XAMPP/css/cart-preview.css">

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- title -->
    <title>Check Out Preview</title>

    <!-- icon -->
    <link rel="shortcut icon" type="image" href="/STKRHub-XAMPP/img/logo.png" />

    <!-- fonts -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet" />

    <link href="https://fonts.cdnfonts.com/css/akira-expanded" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />

    <style>

    </style>
</head>

<body>
    <div class="container">
        <my-header></my-header>


        <main>
            <div class="container-main">
                <div class="checkout-preview">
                    <h1>Checkout Preview</h1>
                    <!-- CHECKOUT PREVIEW ======================================= -->
                    <div class="table-header">
                        <!-- <div class="table-delete">
                            Select
                        </div> -->

                        <div class="table-components">
                            Product
                        </div>

                        <!--                                     
                    <td>Description</td> -->

                        <div class="table-quantity">
                            Quantity
                        </div>

                        <div class="table-cost">
                            Price
                        </div>
                    </div>
                    

                    <?php foreach ($selectedIds as $id) {
                        $mysqli = require __DIR__ . "/database.php";
                        $sql = "SELECT * FROM cart JOIN products ON cart.product_id = products.product_id WHERE cart_id = $id AND user_id = {$user['user_id']}";
                        $result = $mysqli->query($sql);

                        if ($result) {
                            $cartItem = $result->fetch_assoc();
                    ?>
                            
                            <div class="table-content">
                                <!-- product name -->
                                <div class="content-components">
                                    <?= htmlspecialchars($cartItem["product_name"]) ?>
                                </div>

                                <!-- quantity -->
                                <div class="content-quantity">
                                    quantity: <?= htmlspecialchars($cartItem["cart_quantity"]) ?>
                                </div>

                                <!-- price -->
                                <div class="content-cost">
                                    Price: <?= htmlspecialchars($cartItem["cart_price"]) ?>
                                </div>


                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="addresses">
                    <!-- ADDRESS ============================================ -->
                    <h1>Addresses</h1>

                    <form id="addressForm" method="post" action="cart_order_process.php">
                        <div class="linea">
                            <select name="address" class="input">
                                <?php
                                $mysqli = require __DIR__ . "/database.php";
                                $sql = "SELECT * FROM adresses WHERE user_id = {$_SESSION["user_id"]}";
                                $result = $mysqli->query($sql);

                                if ($result) {
                                    while ($address = $result->fetch_assoc()) {
                                        echo "<option value='" . $address["address_id"] . "'>";
                                        echo "<table>";
                                        echo "<tr>";
                                        echo "<td>" . $address["recipient"] . "</td>";
                                        echo "<td>" . $address["contact"] . "</td>";
                                        echo "<td>" . $address["house_number"] . "</td>";
                                        echo "<td>" . $address["street"] . "</td>";
                                        echo "<td>" . $address["city"] . "</td>";
                                        echo "<td>" . $address["province"] . "</td>";
                                        echo "<td>" . $address["postal_code"] . "</td>";
                                        echo "</tr>";
                                        echo "</table>";
                                        echo "</option>";
                                    }
                                }
                                ?>
                            </select>

                            <a href='add_address.php' class="cancel">Add</a>
                        </div>


                        <?php foreach ($selectedIds as $id) { ?>
                            <input type="hidden" name="selectedIds[]" value="<?= $id ?>">
                        <?php } ?>

                        <button type="submit" name="action" value="delete" class="cancel">Delete</button>
                        <br><br><br><br><br><br><br>

                        <button type="submit" name="action" value="checkout" class="submit">Check Out</button>

                    </form>



                    <!-- ========================================== -->
                </div>


            </div>
        </main>


        <my-footera></my-footera>
    </div>






    <script>
        // Get the <select> element and the form
        const selectElement = document.querySelector('select[name="address"]');
        const addressForm = document.getElementById('addressForm');

        // Add event listener for the form submission event
        addressForm.addEventListener('submit', function(event) {
            // Prevent the default form submission behavior
            event.preventDefault();

            // Get the selected option
            const selectedOption = selectElement.options[selectElement.selectedIndex];

            // Get the ID value from the selected option
            const selectedId = selectedOption.value;

            // Create a hidden input for the address ID
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'id';
            hiddenInput.value = selectedId;

            // Append the hidden input to the form
            addressForm.appendChild(hiddenInput);

            // Check the value of the action button
            const actionButton = document.activeElement;
            if (actionButton.name === 'action' && actionButton.value === 'delete') {
                // Create a temporary form to submit the address deletion
                const deleteForm = document.createElement('form');
                deleteForm.method = 'post';
                deleteForm.action = 'delete_address.php';

                // Create a hidden input for the address ID in the delete form
                const deleteHiddenInput = document.createElement('input');
                deleteHiddenInput.type = 'hidden';
                deleteHiddenInput.name = 'id';
                deleteHiddenInput.value = selectedId;

                // Append the hidden input to the delete form
                deleteForm.appendChild(deleteHiddenInput);

                // Submit the delete form
                document.body.appendChild(deleteForm);
                deleteForm.submit();
            } else {
                // Submit the address form for checkout
                addressForm.submit();
            }
        });
    </script>

    <script src="/STKRHub-XAMPP/js/header.js"></script>
    <script src="/STKRHub-XAMPP/js/subnav.js"></script>
    <script src="/STKRHub-XAMPP/js/footer.js"></script>
    <script src="/STKRHub-XAMPP/js/footera.js"></script>
</body>

</html>