
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
        <body>
            <h1>Signup</h1>
                <form action = "process_signup.php" method = "post" novalidate>
                    <label for = "first_name"> First Name </label>
                    <input type = "text" name = "first_name"> <br>
                    
                    <label for = "last_name"> Last Name </label>
                    <input type = "text" name = "last_name"> <br>
                    
                    <label for = "email"> Email </label>
                    <input type = "email" name = "email"> <br>
                    
                    <label for = "username"> Username </label>
                    <input type = "text" name = "username"> <br>

                    <label for = "password"> Password </label>
                    <input type = "password" name = "password"> <br>

                    <label for = "confirm_password"> Confirm Password </label>
                    <input type = "password" name = "confirm_password"> <br>
                    
                    <input type = "submit" value ="signup"> <br>
                    
                    <a href = "login.php"> click to login </a>
        
                 </form>
    
        </body>
</html>