<?php
session_start();

if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/database.php";
    $sql = "SELECT * FROM user 
            WHERE user_id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
}


    if (isset($_POST['save'])) {

        $mysqli = require __DIR__ . "/database.php";

        $sql = " INSERT INTO adresses(user_id, contact, house_number, street, city, province, postal_code, recipient)
                    VALUES (?,?,?,?,?,?,?,?)";

        $stmt = $mysqli->stmt_init();

        if (! $stmt->prepare($sql)){
            die("SQL error:" . $mysqli-> error);
        }

        $stmt-> bind_param("isssssis",
                                $user["user_id"],
                                $_POST["contact"],
                                $_POST["house_number"],
                                $_POST["street"],
                                $_POST["city"],
                                $_POST["province"],
                                $_POST["postal_code"],
                                $_POST["recipient"]);

            if ($stmt->execute()){

            header("Location: preview.php");
            exit;
        } 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
        <body>
            <h1>Details</h1>
                <form method = "post">
                    <label for = "recipient"> Recipient </label>
                    <input type = "text" name = "recipient"> <br>
                    
                    <label for = "contact"> Contact </label>
                    <input type = "text" name = "contact"> <br>
                    
                    <label for = "house_number"> House Number </label>
                    <input type = "text" name = "house_number"> <br>

                    <label for = "street"> Street </label>
                    <input type = "text" name = "street"> <br>

                    <label for = "city"> City </label>
                    <input type = "text" name = "city"> <br>

                    <label for = "province"> Province </label>
                    <input type = "text" name = "province"> <br>

                    <label for = "postal_code"> postal_code </label>
                    <input type = "text" name = "postal_code"> <br>
                    
                    
                    
                    <input type = "submit" name = "save" value ="save"> <br>
                    
                  
        
                 </form>
    
        </body>
</html>