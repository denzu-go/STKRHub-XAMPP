<?php
session_start();

if(isset($_SESSION["user_id"])){

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user 
            WHERE user_id = {$_SESSION["user_id"]} ";
    
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

$product_id;

$mysqli = require __DIR__ . "/database.php";

    if (isset($_GET['product'])) {
        
            $product_id = $_GET['product'];

            
    } 
    
    $sql = "SELECT * FROM products
            WHERE product_id = '$product_id'";
    
            $result = $mysqli->query($sql);
    
                if (!$result){
                    die("invalid query");
                }
    
            $product = $result->fetch_assoc();

               
  
       

        $price = $product["product_price"];
        $size = 0;
        $qty2=1;
        $qty = 0;
        $discount = 0;

            if (isset($_GET['qty'])) {
                $qty2 = $_GET['qty'];
                $qty = $qty2;
            
                $price *= $qty;

                if ($qty >= 10){

                    while ($qty >= 10){

                        $discount++;
                        $qty -=10;
                        
                    }

                    $d_amount = $discount *(0.75*$product["product_price"]);
                    $price -= $d_amount; 
                    
                }

            }

        




            if(isset($_GET['size'])) {

                $size = $_GET['size'];

                if ($size == 1){
                    $price *= $size;
                } else {
                    $size *= .45;
                    
                    $price *= $size;    
                }
            }












            if (isset($_POST['checkout'])) {

                $_SESSION['product_id'] = $product_id;
                $_SESSION['price'] = $price;
                $_SESSION['size'] = $size;
                $_SESSION['qty'] = $qty2;
                header('Location: preview.php');
                exit;
            }


            
           

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($product["product_name"]) ?></title>
</head>
<body>



    <h1> <?= htmlspecialchars($product["product_name"]) ?> </h1>

        <table>
            <tr>
            
                <th><?= htmlspecialchars($product["product_name"]) ?></th>
                <th><?= htmlspecialchars($product["product_description"]) ?> </th>
                <th><?= htmlspecialchars($product["product_price"]) ?> </th>
                <th><?= htmlspecialchars($product["category"]) ?></th>
                            
            </tr>
        </table>



        <h1>Price: <?= htmlspecialchars($price) ?></h1>

        <h1>Product id: <?= htmlspecialchars($product_id) ?></h1>

    <?php if($product_id == 1): ?>

        <a href="product.php?product=<?php echo $product['product_id']; ?>&qty=5">50 pcs</a> <br>
        <a href="product.php?product=<?php echo $product['product_id']; ?>&qty=10">100 pcs</a> <br>
        <a href="product.php?product=<?php echo $product['product_id']; ?>&qty=15">150 pcs</a> <br>
        <a href="product.php?product=<?php echo $product['product_id']; ?>&qty=20">200 pcs</a> <br>

        <br><br><br>

        <h1> <?= htmlspecialchars($qty2) ?> </h1>

        <div class="selections">
    <div class="quantity">
        <div class="quantity-text">Quantity:</div>
        <div class="row">
            <div class="col-xs-3 col-xs-offset-3">
                <div class="input-group number-spinner">
                    <div class="quantity-container">
                        <div class="q1">
                            <input
                                id="quantity-input"
                                type="number"
                                class="form-control text-center"
                                value="<?php echo htmlspecialchars($qty2); ?>"
                                min="1"
                                max="99"
                                onchange="updateLink()"
                            />
                        </div>
                        <span id="result"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="quantity-link">Save</a><br>

    <script>
        function updateLink() {
            var quantity = document.getElementById('quantity-input').value;
            var productID = '<?php echo $product['product_id']; ?>';
            var link = document.getElementById('quantity-link');
            link.href = 'product.php?product=' + productID + '&qty=' + quantity;
        }
    </script>
</div>
        

    
    <?php elseif($product_id == 2): ?>
        
        <a href="product.php?product=<?php echo $product['product_id']; ?>&size=1"> small </a> <br>
        <a href="product.php?product=<?php echo $product['product_id']; ?>&size=2"> medium </a> <br>
        <a href="product.php?product=<?php echo $product['product_id']; ?>&size=3"> large </a> <br>
        <a href="product.php?product=<?php echo $product['product_id']; ?>&size=4"> extra large </a> <br>



    <?php endif; ?>

        
    <br><br><br><br>
        <form action  method="post">

        <input type="submit" name="checkout" value="Check Out">

        <input type="submit" name="addtocart" value="Add to Cart">

        </form>


  
</body>

 

</html>