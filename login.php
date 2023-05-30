<?php 

$is_invalid = false;

 if($_SERVER["REQUEST_METHOD"] === "POST"){

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user
            WHERE username = '%s'",
            $mysqli->real_escape_string($_POST["username"]));
    
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if($user){
        if(password_verify($_POST["password"],$user["password"])){
            
            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["user_id"];

            header("Location: index.php");
            exit;
        }
    }

    $is_invalid = true;
 }
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

            <body>
                <h1> Login</h1>

                <?php if ($is_invalid): ?>
                    <em?> Username or Password does not exist </em>
                <?php endif; ?>

                <form method = "post">

                    <label for = "username"> Username </label>
                    <input type = "text" name = "username" 
                    value = "<?= htmlspecialchars($_POST["username"] ?? "") ?>"> <br>
                    
                    <label for = "password"> Password </label>
                    <input type = "password" name = "password"> <br>
                    
                    <input type = "submit" value ="login"> <br>
                    
                    <a href = "signup.php"> signup </a>
        
                 </form>

            </body>
    </html>