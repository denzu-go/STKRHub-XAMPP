
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
        <body>
            <h1>Product Form</h1>
            <?php if(isset($_GET['error'])) :?>
                <p><?php echo $_GET['error']?></p>
            <?php endif;?>

                <form action = "add_product_process.php" 
                    method = "post"
                    enctype="multipart/form-data">
                    
                    <label for = "image"> upload product image </label>
                    <input type = "file" name = "image"> <br>
                    
                    <label for="category">Category:</label>
                        <select id="category" name="category">
                            <option value="cards">Cards</option>
                            <option value="boards">Boards</option>
                            <option value="box">Box</option>
                            <option value="token">Token</option>
                        </select> <br>
                    
                    <label for = "product_name"> Product name </label>
                    <input type = "text" name = "product_name"> <br>
                    
                    <label for = "product_price"> Product price </label>
                    <input type = "text" name = "product_price"> <br>

                    <label for = "product_description"> description </label>
                    <input type = "text" name = "product_description"> <br>

                   
                    
                    <input type = "submit" name= "submit" value ="Add Product"> <br>
                    
                    
        
                 </form>
    
        </body>
</html>