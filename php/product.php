<?php
session_start();

if (isset($_SESSION["user_id"])) {

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

if (!$result) {
    die("invalid query");
}

$product = $result->fetch_assoc();





$price = $product["product_price"];

$product_category = $product["category"];

$size = 0;
$qty2 = 1;
$qty = 0;
$discount = 0;

if (isset($_GET['qty'])) {
    $qty2 = $_GET['qty'];
    $qty = $qty2;

    $price *= $qty;

    if ($qty >= 10) {

        while ($qty >= 10) {

            $discount++;
            $qty -= 10;
        }

        $d_amount = $discount * (0.75 * $product["product_price"]);
        $price -= $d_amount;
    }
}



if (isset($_GET['size'])) {

    $size = $_GET['size'];

    if ($size == 1) {
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

if (isset($_POST['addtocart'])) {

    $_SESSION['product_id'] = $product_id;
    $_SESSION['price'] = $price;
    $_SESSION['size'] = $size;
    $_SESSION['qty'] = $qty2;
    header('Location: cart_process.php');
    exit;
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title id="title">STKRHub</title>

    <!-- css -->
    <link rel="stylesheet" href="/STKRHub-XAMPP/css/component-page.css" />

    <!-- icon -->
    <link rel="shortcut icon" type="image" href="/STKRHub-XAMPP/img/logo.png">

    <!-- fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet" />
    <link href="https://fonts.cdnfonts.com/css/akira-expanded" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
    <link href="https://fonts.cdnfonts.com/css/sf-compact-display" rel="stylesheet" />

    <style>
        .add-check{
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <my-header></my-header>

        <!-- <my-subnav></my-subnav> -->

        <main>
            <div class="container-main">

                <h2 class="component-name" id="component-name"> <?= htmlspecialchars($product["product_name"]) ?> </h2>

                <section class="upper">
                    <div class="box1">
                        <div class="big-pic">
                            <img class="mainPic" id="mainPic" src="\STKRHub-XAMPP\php\uploads\<?= $product["product_image"]?>" alt="" />
                        </div>

                        <div class="pics">
                            <img class="smallPic" onclick="changePicture()" src="\STKRHub-XAMPP\php\uploads\<?= $product["product_image"]?>" alt="" />
                            <img class="smallPic" onclick="changePicture()" src="\STKRHub-XAMPP\php\uploads\<?= $product["product_image"]?>" alt="" />
                            <img class="smallPic" onclick="changePicture()" src="\STKRHub-XAMPP\php\uploads\<?= $product["product_image"]?>" alt="" />
                        </div>
                    </div>

                    <div class="box2" id="box2">
                        <table class="GeneratedTable">
                            <thead>
                                <tr>
                                    <th class="quality">Quality</th>
                                    <th class="price">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="quality">1-5</td>
                                    <td class="price">P12.15</td>
                                </tr>
                                <tr>
                                    <td class="quality">6-29</td>
                                    <td class="price">P9.30</td>
                                </tr>
                                <tr>
                                    <td class="quality">30-49</td>
                                    <td class="price">P7.45</td>
                                </tr>
                                <tr>
                                    <td class="quality">50-99</td>
                                    <td class="price">P6.40</td>
                                </tr>
                                <tr>
                                    <td class="quality">100-249</td>
                                    <td class="price">P5.10</td>
                                </tr>
                                <tr>
                                    <td class="quality">250-499</td>
                                    <td class="price">P3.95</td>
                                </tr>
                                <tr>
                                    <td class="quality">500-999</td>
                                    <td class="price">P2.90</td>
                                </tr>
                                <tr>
                                    <td class="quality">1000+</td>
                                    <td class="price">P2.20</td>
                                </tr>
                                <tr>
                                    <td class="quality">
                                        See full game set production price and discounts
                                    </td>
                                    <td class="price">
                                        <a href="#pricelistpdf">Download price list PDF</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="box3">
                        <div id="box3-up">

                            <!-- START ===================== -->
                            <div class="line-a">
                                <p>Category</p>
                            </div>
                            <div class="line-b" id="category">
                                <?= htmlspecialchars($product["category"]) ?>
                            </div>
                            <!-- END ===================== -->

                            <!-- START ===================== -->
                            <!-- <div class="line-a">
                                <p>Dimensions</p>
                            </div>
                            <div class="line-b" id="plain-game-card-box">
                            <?= htmlspecialchars($product["dimensions"]) ?>
                            </div> -->
                            <!-- END ===================== -->

                        </div>


                        <?php if ($product_category === "cards") : ?>
                            <div class="selections">
                                <div class="total-cost">
                                    <h3>Total Cost:
                                        <span id="total-cost"><?= htmlspecialchars($price) ?></span>
                                    </h3>
                                </div>

                                <div class="quantity">
                                    <div class="quantity-text">Quantity:</div>
                                    <div class="row">
                                        <div class="col-xs-3 col-xs-offset-3">
                                            <div class="input-group number-spinner">
                                                <div class="quantity-container">
                                                    <div class="q1">
                                                        <input id="quantity-input" type="number" class="form-control text-center" value="<?php echo htmlspecialchars($qty2); ?>" min="1" max="99" onchange="updateLink()" />
                                                    </div>
                                                    <span id="result"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#" id="quantity-link">Save</a><br>

                                <form action method="post" class="add-check">

                                    <button type="submit" name="addtocart" 
                                    class="add-to-cart"
                                    value="Add to Cart">Add to Cart</button>

                                    <button type="submit" name="checkout" 
                                    class="add-to-cart"
                                    value="Check Out">Check Out</button>

                                </form>

                                <script>
                                    function updateLink() {
                                        var quantity = document.getElementById('quantity-input').value;
                                        var productID = '<?php echo $product['product_id']; ?>';
                                        var link = document.getElementById('quantity-link');
                                        link.href = 'product.php?product=' + productID + '&qty=' + quantity;
                                    }
                                </script>


                                <!-- <div class="add-to-cart" id="button-add_to_cart-or-add_design">
                                <button type="button" class="add-to-cart" id="">
                                    Design Card
                                </button>
                            </div> -->
                            </div>

                        <?php elseif ($product_id == 2) : ?>

                            <a href="product.php?product=<?php echo $product['product_id']; ?>&size=1"> small </a> <br>
                            <a href="product.php?product=<?php echo $product['product_id']; ?>&size=2"> medium </a> <br>
                            <a href="product.php?product=<?php echo $product['product_id']; ?>&size=3"> large </a> <br>
                            <a href="product.php?product=<?php echo $product['product_id']; ?>&size=4"> extra large </a> <br>

                        <?php endif; ?>

                    </div>
                </section>

                <section class="mid">
                    <div class="specs">
                        <div class="spec-text">
                            <p>Specifications:</p>
                            <ul>
                                <li><?= htmlspecialchars($product["product_description"]) ?></li>

                            </ul>
                        </div>
                    </div>
                    <div class="help">
                        <div class="help-text">
                            <ul>
                                <li>Need Help?</li>
                                <li>
                                    If you have any inquiry, please contact us on our Support
                                    Center.
                                </li>
                                <br />
                                <li>About STKR Hub</li>
                                <li>
                                    We are a locally renowned tabletop games manufacturing
                                    company with good facilities to cater for your board game or
                                    card game needs. Our 5 years plus of game making experience
                                    ensures our quality and services is second to none. That's
                                    why tabletop designer in retail games choose to manufacture
                                    with us.
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="low">
                    <div class="follow">
                        <h3 class="follow">Follow Us</h3>

                        <div class="low-text">
                            <ul>
                                <li>
                                    <a href="#facebook-link">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#instagram-link">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#twitter-link">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#youtube-link">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="null">
                        <div class="null"></div>
                    </div>
                </section>
            </div>
        </main>


        <my-footer></my-footer>

    </div>


    <script src="/STKRHub-XAMPP/js/header.js"></script>
    <script src="/STKRHub-XAMPP/js/subnav.js"></script>
    <script src="/STKRHub-XAMPP/js/footer.js"></script>

</body>



</html>