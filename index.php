<?php 
session_start();

if(isset($_SESSION["user_id"])){

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user 
            WHERE user_id = {$_SESSION["user_id"]} ";
    
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
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
    <h1> Home</h1>
    <?php if (isset($user)): ?>

        <p> Hello <?= htmlspecialchars($user["first_name"]) ?> </p>
        <p><a href="shop.php"> shop </a></p>
        <p><a href="creation.php"> creation </a></p>
        <p><a href="cart.php"> cart </a></p>
        <p><a href="logout.php"> Log out</a></p>


    <?php else: ?>

        <p> <a href="login.php"> Log in</a> or 
            <a href="signup.php">Sign up</a> </p>

    <?php endif; ?>
    
</body>
</html>