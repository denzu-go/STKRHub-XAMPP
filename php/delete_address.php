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
    $addressId = $_POST['id'];

    $mysqli = require __DIR__ . "/database.php";

    // Prepare the SQL statement
    $sql = "DELETE FROM adresses WHERE address_id = ?";
    $statement = $mysqli->prepare($sql);

    if ($statement) {
        // Bind the address ID parameter
        $statement->bind_param("i", $addressId);

        // Execute the statement
        $statement->execute();

        // Check if any rows were affected by the deletion
        if ($statement->affected_rows > 0) {
           header("Location: preview.php");
           exit;
        } else {
            echo "No data found with the provided address ID.";
        }

        // Close the statement
        $statement->close();
    } else {
        echo "Failed to prepare the SQL statement.";
    }
} else {
    echo "No ID selected.";
}


?>