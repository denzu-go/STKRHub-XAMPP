<?php 
session_start();

if(isset($_SESSION["user_id"])){

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user 
            WHERE user_id = {$_SESSION["user_id"]} ";
    
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}


$mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM orders ";
            
    
            $result = $mysqli->query($sql);
    
                if (!$result){
                    die("invalid query");
                }
    
            $order = $result->fetch_assoc();

    $status = $order["order_status"];

    if(isset($_GET['status']) && $_GET['status'] === 'To_Recieve'){
        $status = "to recieve";
    } elseif (isset($_GET['status']) && $_GET['status'] === 'Complete'){
        $status = "complete";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>

<body>
    <h1> ORDERS</h1>

    <h2> status: <?php echo htmlspecialchars($status); ?></h2>





    <a href="order.php">To Deliver</a> <br><br>
    <a href="<?php echo $_SERVER['PHP_SELF'] . '?status=To_Recieve'; ?>">To Recieve </a> <br><br>
    <a href="<?php echo $_SERVER['PHP_SELF'] . '?status=Complete'; ?>">Completed Orders</a> <br><br>


    <table>

                <tr>
                    <td>personal information</td>
                    <td>product</td>
                    <td>quantity</td>
                    <td>price</td>
                </tr>


            <?php 
                $mysqli = require __DIR__ . "/database.php";



                $sql = "SELECT * FROM orders
                JOIN adresses ON orders.address_id = adresses.address_id
                JOIN products ON orders.product_id = products.product_id
                WHERE orders.user_id = {$user['user_id']} AND orders.order_status = '$status'";
        
        // Execute the query
        $result = $mysqli->query($sql);
        
        // Check if the query was successful
        if ($result) {
            // Fetch the data
            while ($row = $result->fetch_assoc()) {
            

            echo "
                

                <tr>
                    <td>
                        " . $row['recipient'] . "   " . $row['contact'] . "    " . $row['house_number'] . " 
                        " . $row['street'] . "   " . $row['city'] . "    " . $row['province'] . " " . $row['postal_code'] . "
                    </td>
                    
                    <td>
                    " . $row['product_name'] . "   " . $row['product_description'] . " 
                    </td>
                    
                    <td>
                    " . $row['order_quantity'] . " 
                    </td>

                    <td>
                    " . $row['order_price'] . " 
                    </td>
                </tr>
            ";
            }
        } else {
            // Handle query error
            echo "Error executing the query: " . mysqli_error($conn);
        }
 ?>
    </table>

<script>
    // si sophia dahilan bakit gumana ung code na to

    // si bella ang nagturo sakin pano mag comment sa loob ng html
</script>
    
</body>
</html>

