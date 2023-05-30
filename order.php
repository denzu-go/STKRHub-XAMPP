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
    // Retrieve the POST value
    $address_id = $_POST['id'];

    // Use the selected ID as needed
    // For example, you can query the database with the ID to fetch additional data
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM adresses WHERE address_id = $address_id";
    $result = $mysqli->query($sql);

    $address = $result->fetch_assoc();

    if (!$result) {
        die("invalid query");
    }

    
    echo "Selected ID: " . $address_id;
    echo "recipient :" . $address["recipient"];
} else {
    echo "No ID selected.";
}











?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STKR HUB</title>
</head>
<body>
    <h1> ORDERS</h1>
    
    
</body>
</html>