<?php 
if (empty($_POST["first_name"])){
    die("first name is required");
}

if(! filter_var ($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("invalid email");
}

if(strlen($_POST["password"] < 8)){
    die("Password must be at least 8 characters");
}

if($_POST["password"] !== $_POST["confirm_password"]){
    die("password does not match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);


$mysqli = require __DIR__ . "/database.php";

$sql = " INSERT INTO user(first_name, Last_name, email, username, password)
            VALUES (?,?,?,?,?)";

$stmt = $mysqli->stmt_init();

if (! $stmt->prepare($sql)){
    die("SQL error:" . $mysqli-> error);
}

$stmt-> bind_param("sssss",
                        $_POST["first_name"],
                        $_POST["last_name"],
                        $_POST["email"],
                        $_POST["username"],
                        $password_hash);

if ($stmt->execute()){

    header("Location: signup_successful.html");
    exit;
} else {
    if($mysqli->errno === 1062){
        die("email already taken");
    } else {
        die($mysqli->error . "" . $mysqli->errno);
    }
}


?>