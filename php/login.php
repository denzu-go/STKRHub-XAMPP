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

            header("Location: ../index.php");
            exit;
        }
    }

    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/login.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <link rel="shortcut icon" type="image" href="../img/logo.png">

    <!-- title -->
    <title>Login and Signup</title>

    <!-- fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
</head>

<body>
    <div class="container" id="container">
        <!-- Sign Up -->
        <div class="form-container register-container">
            <form action="process_signup.php" method="post" novalidate>
                <h1>Sign Up here</h1>

                <input type="text" name="first_name" placeholder="First Name">

                <input type="text" name="last_name" placeholder="Last Name">

                <input type="email" name="email" placeholder="Email">

                <input type="text" name="username" placeholder="Username">

                <input type="password" name="password" placeholder="Password">

                <input type="password" name="confirm_password" placeholder="Confirm Password">

                <button type="submit" value="signup">Signup</button><br>

            </form>
        </div>

        <!-- Login -->
        <div class="form-container login-container">
            <form method="post">
                <h1>Login here</h1>

                <?php if ($is_invalid): ?>
                <em?> Username or Password does not exist </em>
                    <?php endif; ?>

                <input type="text" name="username" value="<?= htmlspecialchars($_POST["username"] ?? "") ?>" placeholder="Username">

                <input type="password" name="password" placeholder="Password">

                <button type="submit" value="login">Login</button>

            </form>
        </div>

        <!-- Overlay (ghost) -->
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="title">Hello <br> friends</h1>
                    <p>if Yout have an account, login here and have fun</p>
                    <button class="ghost" id="login">Login
                        <i class="lni lni-arrow-left login"></i>
                    </button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1 class="title">Start your <br> journy now</h1>
                    <p>if you don't have an account yet, join us and start
                        your journey.</p>
                    <button class="ghost" id="register">Register
                        <i class="lni lni-arrow-right register"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>



    <!--Login/signup js script -->
    <script src="../js/login.js"></script>
</body>

</html>