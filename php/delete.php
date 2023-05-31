<?php
if ( isset($_GET["user_id"])) {
    $user = $_GET["user_id"];

    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "stkrhub";  


    //Para maka conenct DB
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM user WHERE user_id=$user";
    $connection->query($sql);

}
header("location: /STKRHUB-XAMPP/php/admin.php");
exit;
?>