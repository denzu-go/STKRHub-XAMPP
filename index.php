<?php
session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/php/database.php";

    $sql = "SELECT * FROM user 
            WHERE user_id = {$_SESSION["user_id"]} ";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html>

<head>

    <!-- css -->
    <link rel="stylesheet" href="./css/index.css" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- title -->
    <title>Home</title>

    <!-- icon -->
    <link rel="shortcut icon" type="image" href="./img/logo.png" />

    <!-- fonts -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet" />

    <link href="https://fonts.cdnfonts.com/css/akira-expanded" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
</head>

<body>

    <div class="container">
        <my-header></my-header>

        <!-- main -->
        <main>
            <?php if (isset($user)) : ?>

            <div class="container-main">
                <div class="box1">
                    <h1>Unleash your imagination: Create and Print your Game</h1>
                </div>

                <section class="section-main">
                    <a href="/STKRHub-XAMPP/php/creation.php">
                        <div class="section-box1">
                            <h2>Create your Game</h2>
                            <p>
                                Make your own tabletop game, art, playing cards, and
                                components.
                            </p>
                        </div>
                    </a>

                    <a href="/STKRHub-XAMPP/php/shop.php">
                        <div class="section-box2">
                            <h2>Shop Now</h2>
                            <p>
                                Purchase tarot cards, art supplies, game pieces, and other
                                necessary raw materials for your game.
                            </p>
                        </div>
                    </a>

                    <a href="/STKRHub-XAMPP/php/marketgames.php">
                        <div class="section-box3">
                            <h2>Buy Published Games</h2>
                            <p>
                                Purchase Published Games, tarot cards, art supplies, game
                                pieces, and more.
                            </p>
                        </div>
                    </a>
                </section>

                <article class="article1">
                    <div>
                        <img src="/STKRHub-XAMPP/img/video1.png" alt="" />
                    </div>
                    <div class="text">
                        <p class="main-title">Your One-Stop Shop for Tabletop Printing</p>
                        <p class="main-title-description">
                            The STKR Hub provides game designers with a user-friendly system
                            to create their own board game, card game, or customized playing
                            cards.
                        </p>
                    </div>
                </article>

                <article class="article2">
                    <div>
                        <img src="/STKRHub-XAMPP/img/video1.png" alt="" />
                    </div>
                    <div class="text">
                        <p class="main-title">Your One-Stop Shop for Tabletop Printing</p>
                        <p class="main-title-description">
                            The STKR Hub provides game designers with a user-friendly system
                            to create their own board game, card game, or customized playing
                            cards.
                        </p>
                    </div>
                </article>
            </div>

            <?php endif; ?>
        </main>

        <my-footer></my-footer>
    </div>

    <!-- ================================================================================ -->
    <!-- <h1> Home</h1>
    <?php if (isset($user)) : ?>

        <p> Hello <?= htmlspecialchars($user["first_name"]) ?> </p>
        <p><a href="shop.php"> shop </a></p>
        <p><a href="creation.php"> creation </a></p>
        <p><a href="cart.php"> cart </a></p>
        <p><a href="logout.php"> Log out</a></p>

    <?php endif; ?> -->


    <script src="/STKRHub-XAMPP/js/header.js"></script>
    <script src="/STKRHub-XAMPP/js/subnav.js"></script>
    <script src="/STKRHub-XAMPP/js/footer.js"></script>
</body>

</html>