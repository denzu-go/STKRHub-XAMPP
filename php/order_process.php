<?php 
session_start();

if(isset($_SESSION["user_id"])){

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user 
            WHERE user_id = {$_SESSION["user_id"]} ";
    
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}


if (isset($_POST['id']) && !empty($_POST['id'])) {

    $address_id = $_POST['id'];
    $product_id = isset($_SESSION['product_id']) ? $_SESSION['product_id'] : '';
    $price = isset($_SESSION['price']) ? $_SESSION['price'] : 0;
    $size = isset($_SESSION['size']) ? $_SESSION['size'] : 0;
    $qty = isset($_SESSION['qty']) ? $_SESSION['qty'] : 0;
    $status = "to deliver";


    $mysqli = require __DIR__ . "/database.php";

    $sql = " INSERT INTO orders(user_id, product_id, address_id, order_price, order_status, order_quantity)
    VALUES (?,?,?,?,?,?)";

                $stmt = $mysqli->stmt_init();

                if (! $stmt->prepare($sql)){
                die("SQL error:" . $mysqli-> error);
                }

                $stmt-> bind_param("iiiisi",
                                $user["user_id"],
                                $product_id,
                                $address_id,
                                $price,
                                $status,
                                $qty,);

                if ($stmt->execute()){

                header("Location:order_successful.php");
                exit;
                } 


    
} else {
    echo "No ID selected.";
}


?>