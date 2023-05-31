<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STKRHUB-PRODUCT_MANAGEMENT </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
      @import url(/STKRHUB-XAMPP/css/header.css);
      @import url(/STKRHUB-XAMPP/css/subnav.css);
    </style>
</head>
<body>

<my-header></my-header>

<div class="container my-5">
    <h2>List of PRODUCTS</h2>
    <a class='btn btn-primary btn-sm'href='/STKRHUB-XAMPP/php/admin/create-product.php?product_id=$row[product_id]'>add new Product</a><br>

    <br>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Category</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Description</th>
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

            $sql = "SELECT * FROM products";
            $result = $connection -> query($sql);

            if(!$result) {
                die("Invalid query: " .$connect -> error);
            }

            while($row = $result->fetch_assoc()){
                echo "
                <tr>
                <td>$row[product_id]</td>
                <td>$row[category]</td>
                <td>$row[product_name]</td>
                <td>$row[product_price]</td>
                <td>$row[product_description]</td>
                <td>
                    <a class='btn btn-danger btn-sm'href='/STKRHUB-XAMPP/php/admin/delete-product.php?product_id=$row[product_id]'>Delete</a>
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