<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STKRHUB-ADMIN </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
      @import url(/STKRHUB-XAMPP/css/header.css);
      @import url(/STKRHUB-XAMPP/css/subnav.css);
    </style>
</head>
<body>

<my-header></my-header>

<div class="container my-5">
    <h2>List of Clients</h2>
    <br>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Username</th>
        </thead>
        <tbody>
            <?php
            $servername = "localhost:3307       ";
            $username = "root";
            $password = "";
            $database = "stkrhub";

            $connection = new mysqli($servername, $username, $password, $database);


            if($connection -> connect_error) {
                die("Connection Failed: " . $connection -> connect_error);
            }

            $sql = "SELECT * FROM user";
            $result = $connection -> query($sql);

            if(!$result) {
                die("Invalid query: " .$connect -> error);
            }

            while($row = $result->fetch_assoc()){
                echo "
                <tr>
                <td>$row[user_id]</td>
                <td>$row[first_name]</td>
                <td>$row[last_name]</td>
                <td>$row[email]</td>
                <td>$row[username]</td>
                <td>
                    <a class='btn btn-danger btn-sm'href='/STKRHUB-XAMPP/php/admin/delete.php?user_id=$row[user_id]'>Delete</a>
                </td>
            </tr>
                ";
            }
            ?>


        </tbody>

    </table>
</div>

<script src="/STKRHUB-XAMPP/js/header.js"></script>
    
</body>
</html>