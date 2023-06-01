<?php
session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

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
    <!-- <link rel="stylesheet" href="/STKRHub-XAMPP/css/creation.css" /> -->

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- title -->
    <title>Market Games</title>

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

        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        body {
        width: 100%;
        }

        .body{
            display: flex;
            flex-direction: column;
            gap: 40px;

            margin-top: 40px;
        }

        a{
            text-decoration: none;
        }

        h1, h2, h3, h4, h5, h6{
            color: #fff;
            font-family: 'SF Compact Display', sans-serif;
        }

        label {
        color: #fff;
        }

        /* main CSS -----------------------------------------------------------------------------*/
        main {
        display: flex;
        justify-content: center;

        min-height: 100vh;

        background-color: #15172E;
        }

        .container-main {
        display: flex;
        flex-direction: column;

        height: auto;
        width: 1200px;

        margin: 40px auto;

        }

        .content{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 40px;
        }

        .item{
            width: 270px;
            height: 225px;
        }

        .item-box{
            
        }

        .pic{
            width: 100%;
            height: 152px;
        }

        .pic img{
            width: 100%;
            height: 152px;
            border-radius: 7px 7px 0px 0px;
        }

        .text{
            padding: 10px;
            width: 100%;
            height: calc(225px - 152px);
            /* background: rgb(36,34,80);
            background: linear-gradient(180deg, rgba(36,34,80,1) 0%, rgba(22,24,48,1) 100%); */

            background-image: url("/STKRHub-XAMPP/img/market-games-opacity.png");
            border-radius: 0px 0px 7px 7px;

            display: flex;
            flex-direction: column;

        }

        h5{
            opacity: .4;
        }
    </style>
</head>

<body>

    <div class="container">
        <my-header></my-header>

        <!-- main -->
        <main>
        <div class="container-main">
            <h2 class="component-name" id="component-name">
            Buy Published Games
            </h2>
            
            <div class="body">
                <div class="content">

                    <div class="item">
                        <a href="/STKRHub-XAMPP/php/gamepage.php">
                            <div class="item-box">
                                <div class="pic">
                                    <img src="/STKRHub-XAMPP/img/main-banner.png" alt="">
                                </div>

                                <div class="text">
                                    <div class="game-title">
                                        <h3>Game Title</h3>
                                    </div>
                                    <div class="rating"></div>
                                    <div class="publisher">
                                        <h5>Publisher Name</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="/STKRHub-XAMPP/php/gamepage.php">
                            <div class="item-box">
                                <div class="pic">
                                    <img src="/STKRHub-XAMPP/img/main-banner.png" alt="">
                                </div>

                                <div class="text">
                                    <div class="game-title">
                                        <h3>Game Title</h3>
                                    </div>
                                    <div class="rating"></div>
                                    <div class="publisher">
                                        <h5>Publisher Name</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="/STKRHub-XAMPP/php/gamepage.php">
                            <div class="item-box">
                                <div class="pic">
                                    <img src="/STKRHub-XAMPP/img/main-banner.png" alt="">
                                </div>

                                <div class="text">
                                    <div class="game-title">
                                        <h3>Game Title</h3>
                                    </div>
                                    <div class="rating"></div>
                                    <div class="publisher">
                                        <h5>Publisher Name</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="/STKRHub-XAMPP/php/gamepage.php">
                            <div class="item-box">
                                <div class="pic">
                                    <img src="/STKRHub-XAMPP/img/main-banner.png" alt="">
                                </div>

                                <div class="text">
                                    <div class="game-title">
                                        <h3>Game Title</h3>
                                    </div>
                                    <div class="rating"></div>
                                    <div class="publisher">
                                        <h5>Publisher Name</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    

                    

                </div>
            </div>
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