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

    <!-- css -->
    <!-- <link rel="stylesheet" href="/STKRHub-XAMPP/css/creation.css" /> -->

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- title -->
    <title>Shop</title>

    <!-- icon -->
    <link rel="shortcut icon" type="image" href="/STKRHub-XAMPP/img/logo.png" />

    <!-- fonts -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet" />

    <link href="https://fonts.cdnfonts.com/css/akira-expanded" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />

    <style>
        @import url(/STKRHub-XAMPP/css/header.css);
        @import url(/STKRHub-XAMPP/css/footer.css);
        @import url(/STKRHub-XAMPP/css/subnav.css);

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            width: 100%;
        }

        /* main CSS */
        .title {
            color: #fff;
            font-size: 20px;
            font-weight: 700;
            font-family: 'SF Pro Display', sans-serif;
            background-color: rgb(65, 70, 119);
            padding: 20px 200px 10px;
        }

        main{
            display: flex;
            justify-content: center;
            height: 100%;
            background: rgb(15,16,32);
            background: linear-gradient(180deg, rgba(15,16,32,1) 0%, rgba(22,24,48,1) 37%);
        }



    </style>
</head>

<body>
    <div class="container">
        <my-header></my-header>

        <!-- main -->
        <main>

            <div class="container-main">
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
            </div>

        </main>

        <my-footer></my-footer>
    </div>


    <script src="/STKRHub-XAMPP/js/header.js"></script>
    <script src="/STKRHub-XAMPP/js/subnav.js"></script>
    <script src="/STKRHub-XAMPP/js/footer.js"></script>
</body>


</html>