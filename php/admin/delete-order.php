<?php
if ( isset($_GET["order_id"])) {
    $user = $_GET["order_id"];

    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "stkrhub";  


    //Para maka conenct DB
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM orders WHERE order_id=$user";
    $connection->query($sql);

}
header("location: /STKRHUB-XAMPP/php/admin/order_management.php");
exit;
?>