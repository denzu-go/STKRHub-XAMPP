<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STKRHUB-ORDER_MANAGEMENT </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
      @import url(/STKRHUB-XAMPP/css/header.css);
      @import url(/STKRHUB-XAMPP/css/footer.css);
    </style>
</head>
<body>

<my-header></my-header>

<div class="container my-5">
    <h2>Customer Order Management</h2>
    <br>
    <table class="table">
        <thead>
            <th>Order ID</th>
            <th>Product ID</th>
            <th>Address ID</th>
            <th>Order Price</th>
            <th>Order Quanitity</th>
            <th>Order Status</th>
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

            $sql = "SELECT * FROM orders";
            $result = $connection -> query($sql);

            if(!$result) {
                die("Invalid query: " .$connect -> error);
            }

            while($row = $result->fetch_assoc()){
                echo "
                <tr>
                <td>$row[order_id]</td>
                <td>$row[product_id]</td>
                <td>$row[address_id]</td>
                <td>$row[order_price]</td>
                <td>$row[order_quantity]</td>
                <td>$row[order_status]</td>
                <td>
                <a class='btn btn-primary btn-sm'href='/STKRHUB-XAMPP/php/admin/edit-order.php?order_id=$row[order_id]'>Edit</a>
                    <a class='btn btn-danger btn-sm'href='/STKRHUB-XAMPP/php/admin/delete-order.php?order_id=$row[order_id]'>Delete</a>
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