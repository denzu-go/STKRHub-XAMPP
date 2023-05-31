<?php 
session_start();

if(isset($_SESSION["user_id"])){

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user 
            WHERE user_id = {$_SESSION["user_id"]} ";
    
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}


$product_id = isset($_SESSION['product_id']) ? $_SESSION['product_id'] : '';
$price = isset($_SESSION['price']) ? $_SESSION['price'] : 0;
$size = isset($_SESSION['size']) ? $_SESSION['size'] : 0;
$qty = isset($_SESSION['qty']) ? $_SESSION['qty'] : 0;


$mysqli = require __DIR__ . "/database.php";

$sql = " INSERT INTO cart(user_id, product_id, cart_quantity, cart_price)
VALUES (?,?,?,?)";

            $stmt = $mysqli->stmt_init();

            if (! $stmt->prepare($sql)){
            die("SQL error:" . $mysqli-> error);
            }

            $stmt-> bind_param("iiii",
                            $user["user_id"],
                            $product_id,
                            $qty,
                            $price,);

            if ($stmt->execute()){

            header("Location:cart.php");
            exit;
            } 

?>