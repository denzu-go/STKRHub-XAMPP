<?php
if ( isset($_GET["product_id"])) {
    $user = $_GET["product_id"];

    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "stkrhub";  


    //Para maka conenct DB

    $connection = new mysqli($servername, $username, $password, $database);
    $sql = "DELETE FROM products WHERE product_id=$products";
    $connection->query($sql);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}



}
header("location: /STKRHUB-XAMPP/php/admin/product_management.php");
exit;
?>