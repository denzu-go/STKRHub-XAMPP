<?php
session_start();

if(isset($_SESSION["user_id"])){

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user 
            WHERE user_id = {$_SESSION["user_id"]} ";
    
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>
    <h1> SHOP</h1>
    <table>
        
    <?php 
        $category;
        $mysqli = require __DIR__ . "/database.php";

        if (isset($_GET['category'])) {
            
                $category = $_GET['category'];
                $sql = "SELECT * FROM products
                        WHERE category = '$category'";
                $result = $mysqli->query($sql);
    
                    if (!$result){
                        die("invalid query");
                    }
    
                    while ($product = $result->fetch_assoc()) {
                        echo "
                            <tr>
                                <th><a href='product.php?product=" . $product['product_id'] . "'>" . $product['product_name'] . "</a></th>
                                <th>" . $product['product_description'] . "</th>
                                <th>" . $product['product_price'] . "</th>
                                <th>" . $product['category'] . "</th>
                            </tr>
                        ";
                    }         
        
            
        }

       
            
        
        


       
    ?>
    </table>


<br>

    <a href="<?php echo $_SERVER['PHP_SELF']?>">all</a> <br><br>

    <?php if(!isset($_GET['category'])): ?>
    <a href="<?php echo $_SERVER['PHP_SELF'] . '?category=cards'; ?>">Cards</a> <br><br>
    <a href="<?php echo $_SERVER['PHP_SELF'] . '?category=board'; ?>">Boards</a> <br><br>
    <a href="<?php echo $_SERVER['PHP_SELF'] . '?category=box'; ?>">Box</a> <br><br>
    <a href="<?php echo $_SERVER['PHP_SELF'] . '?category=token'; ?>">token</a> <br><br>

    <?php endif; ?>  
  
</body>


</html>