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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title id="title">All Components</title>

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
    @import url(/STKRHub-XAMPP/css/header.css);
    @import url(/STKRHub-XAMPP/css/footer.css);
    @import url(/STKRHub-XAMPP/css/subnav.css);

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        width: 100%;
    }

    .body {
        display: flex;
        flex-direction: column;
        gap: 40px;

        margin-top: 40px;
    }

    label {
        color: #fff;
    }

    /* main CSS -----------------------------------------------------------------------------*/
    main {
        display: flex;
        justify-content: center;

        min-height: 100vh;

        background: rgb(15, 16, 32);
        background: linear-gradient(180deg,
                rgba(15, 16, 32, 1) 0%,
                rgba(22, 24, 48, 1) 37%);
    }

    .container-main {
        display: flex;
        flex-direction: column;

        height: auto;
        width: 1200px;

        margin: 40px auto;

    }

    .content {
        display: flex;
        gap: 40px;
    }

    .section-box1 {
        display: flex;
        flex-direction: column;

        position: relative;
        /* justify-content: center;
    align-items: center; */

        -webkit-border-radius: 20px;

        width: 270px;
        height: 223px;
        -webkit-border-radius: 20px;

        background-image: url(/STKRHub-XAMPP/img/gamebox.png);
        background-size: 270px 223px;

        box-shadow: 1px 14px 50px -1px rgba(0, 0, 0, 0.77);
    }

    .section-box2 {
        display: flex;
        flex-direction: column;

        position: relative;
        /* justify-content: center;
      align-items: center; */

        -webkit-border-radius: 20px;

        width: 270px;
        height: 223px;
        -webkit-border-radius: 20px;

        background-image: url(/STKRHub-XAMPP/img/gamecardboxes.png);
        background-size: 270px 223px;

        box-shadow: 1px 14px 50px -1px rgba(0, 0, 0, 0.77);
    }

    .section-box3 {
        display: flex;
        flex-direction: column;

        position: relative;
        /* justify-content: center;
      align-items: center; */

        -webkit-border-radius: 20px;

        width: 270px;
        height: 223px;
        -webkit-border-radius: 20px;

        background-image: url(/STKRHub-XAMPP/img/gameboards.png);
        background-size: 270px 223px;

        box-shadow: 1px 14px 50px -1px rgba(0, 0, 0, 0.77);
    }

    .section-box4 {
        display: flex;
        flex-direction: column;

        position: relative;
        /* justify-content: center;
      align-items: center; */

        -webkit-border-radius: 20px;

        width: 270px;
        height: 223px;
        -webkit-border-radius: 20px;

        background-image: url(/STKRHub-XAMPP/img/gamecards.png);
        background-size: 270px 223px;

        box-shadow: 1px 14px 50px -1px rgba(0, 0, 0, 0.77);
    }

    .section-box5 {
        display: flex;
        flex-direction: column;

        position: relative;
        /* justify-content: center;
      align-items: center; */

        -webkit-border-radius: 20px;

        width: 270px;
        height: 223px;
        -webkit-border-radius: 20px;

        background-image: url(/STKRHub-XAMPP/img/dice.png);
        background-size: 270px 223px;

        box-shadow: 1px 14px 50px -1px rgba(0, 0, 0, 0.77);
    }

    .section-box6 {
        display: flex;
        flex-direction: column;

        position: relative;
        /* justify-content: center;
      align-items: center; */

        -webkit-border-radius: 20px;

        width: 270px;
        height: 223px;
        -webkit-border-radius: 20px;

        background-image: url(/STKRHub-XAMPP/img/rulebook.png);
        background-size: 270px 223px;

        box-shadow: 1px 14px 50px -1px rgba(0, 0, 0, 0.77);
    }

    .section-box7 {
        display: flex;
        flex-direction: column;

        position: relative;
        /* justify-content: center;
      align-items: center; */

        -webkit-border-radius: 20px;

        width: 270px;
        height: 223px;
        -webkit-border-radius: 20px;

        background-image: url(/STKRHub-XAMPP/img/gamepawn.png);
        background-size: 270px 223px;

        box-shadow: 1px 14px 50px -1px rgba(0, 0, 0, 0.77);
    }

    .section-box8 {
        display: flex;
        flex-direction: column;

        position: relative;
        /* justify-content: center;
      align-items: center; */

        -webkit-border-radius: 20px;

        width: 270px;
        height: 223px;
        -webkit-border-radius: 20px;

        background-image: url(/STKRHub-XAMPP/img/timer.png);
        background-size: 270px 223px;

        box-shadow: 1px 14px 50px -1px rgba(0, 0, 0, 0.77);
    }



    .section-box-text {
        position: absolute;
        bottom: 0;

        display: flex;
        flex-direction: column;
        gap: 0px;

        padding: 10px;
        padding-bottom: 20px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: #fff;
        font-family: "SF Pro Display", sans-serif;
    }

    p {
        color: #fff;
        font-family: "Lato";
        font-size: 13px;
        opacity: 0.5;
    }
    </style>
</head>

<body>
    <!-- start -->
    <div class="container">
        <my-header></my-header>

        <main>
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

            <div class="container-main">
                <h2 class="component-name" id="component-name">
                    All Components
                </h2>

                <div class="body">

                    <!-- <a href="<?php echo $_SERVER['PHP_SELF']?>">all</a> <br><br> -->
                    <?php if(!isset($_GET['category'])): ?>

                    <div class="content">
                        <!-- hinde ko muna toh: -->
                        <!-- <a href="<?php echo $_SERVER['PHP_SELF'] . '?category=gameboxes'; ?>"> -->

                        <a href="/STKRHub-XAMPP/php/gameboxes/gameboxes.html">
                            <div class="section-box1">
                                <div class="section-box-text">
                                    <h3>Game Boxes</h3>
                                    <p>
                                        Build game box to store all game parts and game accessories.
                                    </p>
                                </div>
                            </div>
                        </a>

                        <!-- hinde ko muna toh: -->
                        <!-- <a href="<?php echo $_SERVER['PHP_SELF'] . '?category=cardboxes'; ?>"> -->

                        <a href="/STKRHub-XAMPP/php/cardboxes/cardboxes.html">
                            <div class="section-box2">
                                <div class="section-box-text">
                                    <h3>Card Boxes</h3>
                                    <p>
                                        Build card box to store all cards.
                                    </p>
                                </div>
                            </div>
                        </a>

                        <!-- hinde ko muna toh: -->
                        <!-- <a href="<?php echo $_SERVER['PHP_SELF'] . '?category=gameboards'; ?>"> -->

                        <a href="/STKRHub-XAMPP/php/gameboards/gameboards.html">
                            <div class="section-box3">
                                <div class="section-box-text">
                                    <h3>Game Boards</h3>
                                    <p>
                                        Custom Game Boards in different size for your board game production.
                                    </p>
                                </div>
                            </div>
                        </a>

                        <!-- hinde ko muna toh: -->
                        <!-- <a href="<?php echo $_SERVER['PHP_SELF'] . '?category=gamecards'; ?>"> -->

                        <a href="/STKRHub-XAMPP/php/gamecards/gamecards.html">
                            <div class="section-box4">
                                <div class="section-box-text">
                                    <h3>Game Cards</h3>
                                    <p>
                                        Create your own game cards with your own artwork.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="content">
                        <!-- hinde ko muna toh: -->
                        <!-- <a href="<?php echo $_SERVER['PHP_SELF'] . '?category=dice'; ?>"> -->

                        <a href="/STKRHub-XAMPP/php/dice/page-dice.html">
                            <div class="section-box5">
                                <div class="section-box-text">
                                    <h3>Dice</h3>
                                    <p>
                                        Dice
                                    </p>
                                </div>
                            </div>                    
                        </a>

                        <!-- hinde ko muna toh: -->
                        <!-- <a href="<?php echo $_SERVER['PHP_SELF'] . '?category=rulebook'; ?>"> -->

                        <a href="/STKRHub-XAMPP/php/rulebook/rulebook.html">
                            <div class="section-box6">
                                <div class="section-box-text">
                                    <h3>Rulebook</h3>
                                    <p>
                                        Make your own guidebook for your game.
                                    </p>
                                </div>
                            </div>
                        </a>

                        <!-- hinde ko muna toh: -->
                        <!-- <a href="<?php echo $_SERVER['PHP_SELF'] . '?category=gamepawns'; ?>"> -->

                        <a href="/STKRHub-XAMPP/php/gamepawns/gamepawns.html">
                            <div class="section-box7">
                                <div class="section-box-text">
                                    <h3>Game Pawns</h3>
                                    <p>
                                        Choose game pieces that matches the style of your game.
                                    </p>
                                </div>
                            </div>
                        </a>

                        <!-- hinde ko muna toh: -->
                        <!-- <a href="<?php echo $_SERVER['PHP_SELF'] . '?category=gametimer'; ?>"> -->

                        <a href="/STKRHub-XAMPP/php/gametimer/gametimer.html">
                            <div class="section-box8">
                                <div class="section-box-text">
                                    <h3>Game Timer</h3>
                                    <p>
                                        Choose timer that matches to your game needs
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <?php endif; ?>
        </main>

        <my-footer></my-footer>
    </div>
    <!-- end -->



    <script src="/STKRHub-XAMPP/js/header.js"></script>
    <script src="/STKRHub-XAMPP/js/subnav.js"></script>
    <script src="/STKRHub-XAMPP/js/footer.js"></script>
</body>


</html>