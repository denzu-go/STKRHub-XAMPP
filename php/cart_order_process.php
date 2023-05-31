<?php 
session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user 
            WHERE user_id = {$_SESSION["user_id"]}";
    
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['selectedIds']) && isset($_POST['address'])) {
        $selectedIds = $_POST['selectedIds'];
        $addressId = $_POST['address'];
        $status = "to deliver";
        
        // Display the selected IDs
        echo "Selected IDs: ";
        foreach ($selectedIds as $id) {
            $mysqli = require __DIR__ . "/database.php";

            $sql1 = "SELECT * FROM cart JOIN products ON cart.product_id = products.product_id WHERE cart_id = $id AND user_id = {$user['user_id']}";
            $result = $mysqli->query($sql1);
            $cart = $result->fetch_assoc();

            $sql2 = "INSERT INTO orders(user_id, product_id, address_id, order_price, order_status, order_quantity)
                     VALUES (?, ?, ?, ?, ?, ?)";

            $stmt = $mysqli->stmt_init();

            if (!$stmt->prepare($sql2)) {
                die("SQL error: " . $mysqli->error);
            }

            $stmt->bind_param(
                "iiiisi",
                $user["user_id"],
                $cart["product_id"],
                $addressId,
                $cart["cart_price"],
                $status,
                $cart["cart_quantity"]
            );

            if ($stmt->execute()) {
                // Insert successful
            } else {
                // Insert failed
                echo "Error inserting into the database.";
            }
        }

        // Redirect to order successful page
        header("Location: order_successful.php");
        exit;
    } else {
        echo "No ID selected.";
    }
}
?>

