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
    <title>Creation</title>

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

        h1, h2, h3, h4, h5, h6{
            color: #fff;
            font-family: 'SF Compact Display', sans-serif;
        }

        /* main CSS -----------------------------------------------------------------------------*/
        main {
            display: flex;
            justify-content: center;

            min-height: 100vh;

            background: rgb(15, 16, 32);
            background: linear-gradient(180deg, rgba(15, 16, 32, 1) 0%, rgba(22, 24, 48, 1) 37%);
        }

        a {
            text-decoration: none;
        }

        .body{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container-main {
            position: relative;

            display: flex;
            align-items: center;
            flex-direction: column;
        }


        /* cost */
        .upper {


            width: 830px;
            padding-bottom: 90px;

        }

        .upper-content {
            position: absolute;

            display: flex;
            flex-direction: column;
            gap: 5px;
            right: 0;
        }

        .total-cost,
        .total-cost h3 {
            color: #c8c8c8;
            font-family: 'Lato';
            font-size: 20px;

        }

        #total-cost {
            color: #22D7FF;
        }

        /* add to cart */

        .add-to-cart {
            text-decoration: none;
            position: relative;
            border: none;
            font-size: 17px;
            font-family: 'SF Pro Display', sans-serif;
            font-weight: 500;

            color: #fff;
            width: 100%;
            line-height: 2em;
            text-align: center;
            background: linear-gradient(90deg, #b85fe8, #28dbe5, #3a88e6, #b85fe8);
            background-size: 300%;
            border-radius: 7px;
            z-index: 1;
        }

        .add-to-cart:hover {
            animation: ani 8s linear infinite;
            border: none;
        }

        @keyframes ani {
            0% {
                background-position: 0%;
            }

            100% {
                background-position: 400%;
            }
        }

        .add-to-cart:before {
            content: '';
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            z-index: -1;
            position: absolute;
            background: linear-gradient(90deg, #b85fe8, #28dbe5, #3a88e6, #b85fe8);
            background-size: 400%;
            border-radius: 10px;
            transition: 1s;
        }

        .add-to-cart:hover::before {
            filter: blur(10px);
        }

        .add-to-cart:active {
            background: linear-gradient(32deg, #ffffff, #ffffff, #ffffff, #ffffff);
            /* background: linear-gradient(32deg,#b85fe8,#28dbe5,#3a88e6, #b85fe8); */
        }

        /* end of add to cart ----------------------------*/



        /* title */
        .title-of-section {
            display: flex;
            align-items: center;

            width: 1000px;

            font-family: 'SF Compact Display', sans-serif;
            font-size: 40px;
            font-weight: 400;

            color: #CDABFF;
            border-bottom: 1px solid #c8c8c8;

            padding-bottom: 10px;
            padding-top: 10px;

            margin-bottom: 20px;
            margin-top: 20px;
        }

        .title {
            width: 300px;
        }

        .description {
            font-family: 'Lato';
            font-size: 10px;
            font-weight: 100;
            color: #c8c8c8;
        }

        #description {
            font-size: 10px;
        }

        /* change name of project name */
        .input-text {
            width: 830px;
            height: 37px;
            font: 'Lato';
            font-size: 14px;

            padding: 10px;
            border-width: 1px;
            border-color: #858585;
            background-color: #FFFFFF;
            color: #000000;
            border-style: solid;
            border-radius: 7px;

        }

        .input-text:focus {
            outline: none;
        }

        /* END of change of project name */


        /* change project name */
        .submit {
            text-decoration: none;
            position: relative;
            border: none;
            font-size: 14px;
            font-family: 'SF Pro Display', sans-serif;
            font-weight: 500;

            cursor: pointer;

            color: #fff;
            width: 178px;
            height: 37px;

            line-height: 2em;
            text-align: center;
            background: linear-gradient(90deg, #b85fe8, #28dbe5, #3a88e6, #b85fe8);
            background-size: 300%;
            border-radius: 7px;
            z-index: 1;
        }

        .submit:hover {
            animation: ani 8s linear infinite;
            border: none;
        }

        @keyframes ani {
            0% {
                background-position: 0%;
            }

            100% {
                background-position: 400%;
            }
        }

        .submit:before {
            content: '';
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            z-index: -1;
            position: absolute;
            background: linear-gradient(90deg, #b85fe8, #28dbe5, #3a88e6, #b85fe8);
            background-size: 400%;
            border-radius: 10px;
            transition: 1s;
        }

        .submit:hover::before {
            filter: blur(10px);
        }

        .submit:active {
            background: linear-gradient(32deg, #ffffff, #ffffff, #ffffff, #ffffff);
            /* background: linear-gradient(32deg,#b85fe8,#28dbe5,#3a88e6, #b85fe8); */
        }

        /* end of change project name ----------------------------*/

        .mycreations-pic{
        
            margin-left: 470px;
        }

        
    </style>
</head>

<body>

    <div class="container">
        <my-header></my-header>

        <!-- main -->
        <main>
            <div class="container-main">
                <div class="title-of-section">
                    <div class="title">
                        <p>Creation</p>
                    </div>
                    <div class="description">
                        <p class="description">Make your own tabletop games, art, playing cards, and components.</p>
                    </div>
                </div>

                <div class="body">
                    <div class="content">
                        <br>
                        <div class="create">
                            <h2>Create a Game</h2>
                            <div class="content">
                                <form action="" method="post">
                                    <input class="input-text" type="text" name="" placeholder="project name" />
                                    <a href="../php/Make Phase/allcomponents.php">
                                        <input type="" class="submit" value="Create" />
                                    </a>
                                </form>
                            </div>
                        </div>


                        <br><br>
                        <div class="my-creations">
                            <img src="/STKRHub-XAMPP/img/mycreations.png" alt="" class="mycreations-pic" width="50%">
                        </div>
                        

                        <div class="my-creations">
                            <a href="/STKRHub-XAMPP/php/publish/overview.php">
                                <img src="/STKRHub-XAMPP/img/mycreationscopy.png" alt="" class="mycreations-pic" width="50%">
                            </a>
                        </div>
                    </div>

                    <div class="content">
                        <div class="my-creations"></div>
                    </div>
                </div>

            </div>
        </main>

        <my-footer></my-footer>
    </div>



    <script src="/STKRHub-XAMPP/js/header.js"></script>
    <script src="/STKRHub-XAMPP/js/subnav.js"></script>
    <script src="/STKRHub-XAMPP/js/footer.js"></script>
</body>

</html>