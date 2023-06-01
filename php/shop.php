<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user 
            WHERE user_id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

$category;

$mysqli = require __DIR__ . "/database.php";

if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $sql = "SELECT * FROM products
            WHERE category = '$category'";
    $result = $mysqli->query($sql);

    if (!$result) {
        die("invalid query");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title id="title">Game Cards</title>

    <!-- css -->
    <link rel="stylesheet" href="/STKRHub-XAMPP/css/allcomponents.css" />

    <!-- icon -->
    <link rel="shortcut icon" type="image" href="/STKRHub-XAMPP/img/logo.png" />

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
        .body1 {
            display: flex;

            gap: 120px;

            margin-top: 40px;
            margin-bottom: 120px;
        }

        a {
            text-decoration: none;
        }

        label {
            color: #fff;
        }

        /* main CSS -----------------------------------------------------------------------------*/
        .main1 {
            display: flex;
            justify-content: center;

            min-height: 100vh;

            background: rgb(65, 70, 119);
            background: linear-gradient(180deg, rgba(65, 70, 119, 1) 0%, rgba(29, 32, 62, 1) 100%);
        }

        .container-main {
            display: flex;
            flex-direction: column;

            height: auto;
            width: 1200px;

            margin: 40px auto;

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


        .content1 {
            display: flex;
            gap: 40px;
        }

        .section-box1a {
            display: flex;
            flex-direction: column;
            width: 270px;
            height: 250px;

            gap: 10px;
        }

        .section-box-pic1 {
            width: 270px;
            height: 250px;
        }

        .section-box-pic1 img {
            width: 270px;
            height: 250px;
            border-radius: 7px;

            box-shadow: 1px 14px 50px -1px rgba(0, 0, 0, 0.77);
        }

        .section-box-text1 {
            display: flex;
            justify-content: center;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <my-header></my-header>

        <main>
            <div class="container-main">
                <h2 class="component-name" id="component-name">
                    All Components
                </h2>


                <div class="body1">
                    <div class="content1">
                        <?php while ($product = $result->fetch_assoc()) : ?>
                            <a href="product.php?product=<?php echo $product['product_id']; ?>">
                                <div class="section-box1a">
                                    <div class="section-box-pic1">
                                        <img src="/STKRHub-XAMPP/img/STKRHUB/CUSTOM-GAME-CARDS/Micro Game Deck Custom Blank Cards/Micro Game Deck Custom Blank Cards.jpg" alt="">
                                    </div>
                                    <div class="section-box-text1">
                                        <h3>
                                            <?php echo $product['product_name']; ?>
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    </div>

                </div>




                <!-- ALL COMPONENTS -->
                <!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>">all</a> <br><br> -->

                <?php if (!isset($_GET['category'])) : ?>

                    <div class="body">
                        <div class="content">

                            <a href="<?php echo $_SERVER['PHP_SELF'] . '?category=cards'; ?>">
                                <div class="section-box1">
                                    <div class="section-box-text">
                                        <h3>Cards</h3>
                                        <p>
                                            Create your own game cards with your own artwork.
                                        </p>
                                    </div>
                                </div>

                            </a>

                            <!-- <a href="<?php echo $_SERVER['PHP_SELF'] . '?category=board'; ?>"> -->
                            <a href="/STKRHub-XAMPP/php/gameboards/gameboards.html">
                                <div class="section-box2">
                                    <div class="section-box-text">
                                        <h3>Game Boards</h3>
                                        <p>
                                            Custom Game Boards in different size for your board game production.
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <!-- <a href="<?php echo $_SERVER['PHP_SELF'] . '?category=box'; ?>"> -->
                            <a href="/STKRHub-XAMPP/php/gameboxes/gameboxes.html">
                                <div class="section-box3">
                                    <div class="section-box-text">
                                        <h3>Game Boxes</h3>
                                        <p>
                                            Build game box to store all game parts and game accessories.
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <!-- <a href="<?php echo $_SERVER['PHP_SELF'] . '?category=token'; ?>"> -->
                            <a href="/STKRHub-XAMPP/php/cardboxes/cardboxes.html">
                                <div class="section-box4">
                                    <div class="section-box-text">
                                        <h3>Card Boxes</h3>
                                        <p>
                                            Build card box to store all cards.
                                        </p>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="content">
                            <a href="/STKRHub-XAMPP/php/gameboards/dice.html">
                                <div class="section-box5">
                                    <div class="section-box-text">
                                        <h3>Dice</h3>
                                        <p>
                                            Dice
                                        </p>
                                    </div>
                                </div>
                            </a>

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

                            <a href="/STKRHub-XAMPP/php/gamepawns/gamepawns.html">
                                <div class="section-box7">
                                    <div class="section-box-text">
                                        <h3>Wooden Pawns</h3>
                                        <p>
                                            Choose game pieces that matches the style of your game.
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <a href="/STKRHub-XAMPP/php/gametimer/page-gametimer.html">
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
                <?php endif; ?>


            </div>
        </main>

        <my-footera></my-footera>
    </div>


    <script src="/STKRHub-XAMPP/js/header.js"></script>
    <script src="/STKRHub-XAMPP/js/subnav.js"></script>
    <script src="/STKRHub-XAMPP/js/footer.js"></script>
    <script src="/STKRHub-XAMPP/js/footera.js"></script>
</body>

</html>