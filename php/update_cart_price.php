<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";

    // Retrieve the cart ID, cart price, and cart quantity from the AJAX request
    $cartId = $_POST['cartId'];
    $cartPrice = $_POST['cartPrice'];
    $cartQuantity = $_POST['cartQuantity']; // Add a semicolon at the end of this line

    // Update the cart price and cart quantity in the database
    $sql = "UPDATE cart SET cart_price = ?, cart_quantity = ? WHERE cart_id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("dii", $cartPrice, $cartQuantity, $cartId);

    if ($stmt->execute()) {
        header("Location: cart.php");
        exit;
    }
}
?>