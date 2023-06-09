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
    <title>About</title>

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

            min-height: 100vh;

            height: 100%;
            background: rgb(15,16,32);
            background: linear-gradient(180deg, rgba(15,16,32,1) 0%, rgba(22,24,48,1) 37%);
        }

        .container-main{
      background: linear-gradient(180deg, rgba(15,16,32,1) 0%, rgba(22,24,48,1) 37%);
      color: #fff;
      height: 700px;
}

.container-main h1{
    padding: 60px 150px;
    padding-bottom: 10px;
}

.container-main p{
    padding-left: 150px;
    width: 80%;
    text-align: justify;
    padding-bottom: 30px;
}

.container-main .subp{
    padding-left: 150px;
    width: 80%;
    text-align: justify;
    padding-bottom: 30px;
    opacity: 0.5;
}

        


    </style>
</head>

<body>

    <div class="container">
        <my-header></my-header>

        <!-- main -->
        <main>
            
            <div class="container-main">
            <h1>About STKR Hub</h1>
        <p>Lorem ipsum dolor sit amet. Qui cumque nulla ex voluptas veniam non illum eaque qui laborum tenetur est aspernatur laudantium et quasi perspiciatis. Ex reprehenderit perspiciatis ea Quis dolorum ex nihil voluptas est voluptas aliquid.
            Et illum cupiditate aut iusto possimus ex nulla sunt ut magnam soluta ab voluptatem velit non itaque officiis et corrupti sint? Aut autem dolorum est saepe dolor ut autem pariatur hic nobis quas et accusantium excepturi.
            Et distinctio autem ea cupiditate omnis ea sequi labore quo totam libero et reprehenderit sapiente et eveniet reprehenderit. Aut consequatur possimus qui facere galisum hic iusto galisum eos dolor voluptate rem nisi illo cum dignissimos modi aut autem voluptatem.</p>

            <p class="subp">Lorem ipsum dolor sit amet. Qui cumque nulla ex voluptas veniam non illum eaque qui laborum tenetur est aspernatur laudantium et quasi perspiciatis. Ex reprehenderit perspiciatis ea Quis dolorum ex nihil voluptas est voluptas aliquid.
                Et illum cupiditate aut iusto possimus ex nulla sunt ut magnam soluta ab voluptatem velit non itaque officiis et corrupti sint? Aut autem dolorum est saepe dolor ut autem pariatur hic nobis quas et accusantium excepturi.
                Et distinctio autem ea cupiditate omnis ea sequi labore quo totam libero et reprehenderit sapiente et eveniet reprehenderit. Aut consequatur possimus qui facere galisum hic iusto galisum eos dolor voluptate rem nisi illo cum dignissimos modi aut autem voluptatem.</p>

                <p class="subp">Lorem ipsum dolor sit amet. Qui cumque nulla ex voluptas veniam non illum eaque qui laborum tenetur est aspernatur laudantium et quasi perspiciatis. Ex reprehenderit perspiciatis ea Quis dolorum ex nihil voluptas est voluptas aliquid.
                    Et illum cupiditate aut iusto possimus ex nulla sunt ut magnam soluta ab voluptatem velit non itaque officiis et corrupti sint? Aut autem dolorum est saepe dolor ut autem pariatur hic nobis quas et accusantium excepturi.
                    Et distinctio autem ea cupiditate omnis ea sequi labore quo totam libero et reprehenderit sapiente et eveniet reprehenderit. Aut consequatur possimus qui facere galisum hic iusto galisum eos dolor voluptate rem nisi illo cum dignissimos modi aut autem voluptatem.</p>
            </div>

            

        </main>

        <my-footer></my-footer>
    </div>



    <script src="/STKRHub-XAMPP/js/header.js"></script>
    <script src="/STKRHub-XAMPP/js/subnav.js"></script>
    <script src="/STKRHub-XAMPP/js/footer.js"></script>
</body>

</html>