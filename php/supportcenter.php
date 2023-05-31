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
    <title>Support Center</title>

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

        .content {
  display: flex;
  flex-direction: column;
  
  gap: 50px;

  width: 1100px;
  height: auto;
}



/* form */
form{
 align-self: center;
  font-family: 'SF Compact Displays', sans-serif;
  color: #fff;
}

h4{
    font-family: 'SF Compact Displays', sans-serif;
    color: #fff;
    font-size: 14px;
}

h2{
    padding-top: 30px;
}

p{
    padding-bottom: 20px;
}
.title-of-section {
    display: flex;
    align-items: center;

  
    font-family: "SF Compact Display", sans-serif;
    font-size: 40px;
    font-weight: 400;
  
    color: #cdabff;

  
    margin-bottom: 10px;
    padding-left: 200px;
    border-bottom: 1px solid #c8c8c8;
  }



/* input */
input{
  height: 30px;
  border-radius: 7px;

  font-family: 'Lato';
  font-size: 14px;
}

.textarea-short{
  width: 680px;
  height: 170px;
  border-radius: 7px;

  font-family: 'Lato';
  font-size: 14px;
}

.helptopic{
    width: 150px;
    height: 25px;
    border-radius: 7px;
  
    font-family: 'Lato';
    font-size: 14px;
}

.textarea-long{
  width: 800px;
  height: 300px;
  border-radius: 7px;

  font-family: 'Lato';
  font-size: 14px;
}

/* btn */
.btn{
  padding: 7px 14px 7px 14px;
  border-radius: 7px;
  cursor: pointer;

  border: #171932;
  background-color: #171932;
  color: #fff;
  font-family: 'SF Compact Display', sans-serif;
}

/* checkbox */
input[type='checkbox'] {
  width: 17px;
  height: 17px;
  border-radius: 7px;

  font-family: 'Lato';
  font-size: 14px;

}

.btns{
    padding-top: 50px;
padding-left: 400px;

}
.btns .custom-btn {
    width: 130px;
    height: 40px;
    color: rgba(65, 70, 119, 1) 0%;
    border-radius: 5px;
    padding: 10px 25px;
    font-family: 'Lato', sans-serif;
    font-weight: 500;
    background: transparent;
    cursor: pointer;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(255,255,255,.5),
     7px 7px 20px 0px rgba(0,0,0,.1),
     4px 4px 5px 0px rgba(0,0,0,.1);
            box-shadow: inset 2px 2px 2px 0px rgba(255,255,255,.5),
     7px 7px 20px 0px rgba(0,0,0,.1),
     4px 4px 5px 0px rgba(0,0,0,.1);
    outline: none;
    font-size: 13px;
    margin-left: auto;
  }
  
  .btns .btn-2 {
    background:     rgba(65, 70, 119, 1) 0%,;
    background: -webkit-gradient(linear, left bottom, left top, from(#cdabff), to(#cdabff));
    background: linear-gradient(0deg, #cdabff 0%, #cdabff 100%);
    border: none;
  }
  
  .btns  .btn-2:before {
    height: 0%;
    width: 2px;
  }
  
  .btns .btn-2:hover {
    -webkit-box-shadow: 4px 4px 6px 0 rgba(255,255,255,.5),
                -4px -4px 6px 0 rgba(116, 125, 136, .5), 
      inset -4px -4px 6px 0 rgba(255,255,255,.2),
      inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
            box-shadow: 4px 4px 6px 0 rgba(255,255,255,.5),
                -4px -4px 6px 0 rgba(116, 125, 136, .5), 
      inset -4px -4px 6px 0 rgba(255,255,255,.2),
      inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
  }


    </style>
</head>

<body>

    <div class="container">
        <my-header></my-header>

        <!-- main -->
        <main>
        
            <div class="body">
              <div class="container-body">
                <!-- all components section -->
                <!-- END of all components section -->
  
                <!-- addrulebook -->

                <div class="title-of-section">
                    <p>Open a New Ticket</p>
                  </div>

                <section id="section2" class="section">

                  <div class="content">
                    <form action="" method="post">
                        <h2>Contact Information</h2>
                        <br>

                        <h5>Email Address*</h5>
                        <input class="input-text" type="text" name="" placeholder=""/>
                        <br><br>

                        <h5>Full Name*</h5>
                        <input class="input-text" type="text" name="" placeholder=""/>
                        <br><br>

                        <h5>Phone Number</h5>
                        <input class="input-text" type="text" name="" placeholder=""/>
                        <input class="input-text" type="text" name="" placeholder=""/>

                        <br><br>

                        <h5>Help Topic</h5>
                        <select name="select" class="helptopic">
                            <option value="" selected>Select a Help Topic</option>
                            <option value="option-1">Custom Component</option>
                            <option value="option-2">Custom Requirements</option>
                            <option value="option-3">Fulfillment Services</option>
                            <option value="option-4">Kickstarter</option>
                            <option value="option-4">Large Production Quote</option>
                            <option value="option-4">My Orders</option>
                            <option value="option-4">Others</option>
                            <option value="option-4">Press/Media/Marketing</option>
                            <option value="option-4">Sales Entry</option>
                            <option value="option-4">Technical Inquries</option>
                          </select>
                        <br><br>

                        <h5>Age</h5>
                        <input class="input-text" type="text" name="" placeholder=""/>
                        <br><br>

                        <h2>Ticket Details</h2>
                        <p>Please be as specific as possible in order for us to answer you as quickly as possible</p>

                        <h5>Order ID(if any)</h5>
                        <input class="input-text" type="text" name="" placeholder=""/>
                        <br><br>

                        <h5>Title*</h5>
                        <input class="input-text" type="text" name="" placeholder=""/>
                        <br><br>
                      </form>
                  </div>


                </section>

                <div class="btns">
                    <button class="custom-btn btn-2">Create Ticket</button>
                  
                    <button class="custom-btn btn-2">Reset</button>
                    <button class="custom-btn btn-2">Cancel</button>
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