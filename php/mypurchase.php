<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- css -->
  

  <!-- icons -->
  <link rel="shortcut icon" type="image" href="/STKRHub-XAMPP/img/logo.png" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/regular.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/svg-with-js.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet" />

  <!-- fonts -->
  <link href="https://fonts.cdnfonts.com/css/akira-expanded" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/sf-compact-display" rel="stylesheet" />

  <!-- for text-spinner -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <title>Profile</title>

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

    main {

      background: #191c37;

      padding-top: 40px;
      padding-bottom: 40px;
    }

    span {
      padding-left: 40px;
    }

    .sidemenu {
      display: flex;

      width: 350px;
      height: 650px;
    }

    .side-left {
      position: relative;

      width: 400px;


    }

    .side-right {}

    .side-right a {
      color: #fff;
      font-family: "Lato";
    }

    .side-right nav {
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    .side-right ul {
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-top: 20px;
    }

    .side-right ul li {
      display: flex;
      align-items: center;
      gap: 8px;

      color: #fff;
      list-style-type: none;

      padding-left: 30px;

      width: calc(290px - 60px);
      height: 40px;

      color: #fff;
      font-family: "Lato";
      font-size: 14px;
    }

    a {
      text-decoration: none;
    }

    .container-active {
      background-color: #0e0f1e;
    }

    /* body --------------------------------------*/
    .container-body {
      width: 100%;
      height: 650px;
      overflow-y: scroll;
      padding: 30px;


    }

    p.description {
      font-family: "Lato";
      font-size: 10px;
      font-weight: 100;
      color: #c8c8c8;
    }

    /* body */
    .body {
      height: 650px;
      width: 100%;

      overflow: hidden;
    }

    .container-body::-webkit-scrollbar {
      display: none;
    }

    /* content */
    .content {
      display: flex;
      flex-direction: column;

      gap: 50px;

      width: 1100px;
      height: auto;
    }

    /* title */
    .title-of-section {
      display: flex;
      align-items: center;
      gap: 40px;

      font-family: "SF Compact Display", sans-serif;
      font-size: 40px;
      font-weight: 400;

      color: #cdabff;
      border-bottom: 1px solid #c8c8c8;

      padding-bottom: 10px;

      margin-bottom: 20px;
    }

    .container-a {
      display: flex;
      width: 210px;
      gap: 7px;

      padding: 10px;
      margin: -20px;

      align-items: center;

      border-radius: 7px;
    }

    .container-a i {
      padding-left: 10px;
    }

    .side-left img {
      width: 90%;

      position: absolute;
      right: 0;
    }




    /* form */
    form {
      font-family: 'SF Compact Displays', sans-serif;
      color: #fff;
    }

    h4 {
      font-family: 'SF Compact Displays', sans-serif;
      color: #fff;
      font-size: 14px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'SF Compact Displays', sans-serif;
      color: #fff;
    }

    /* input */
    input {
      width: 680px;
      height: 30px;
      border-radius: 7px;

      font-family: 'Lato';
      font-size: 14px;
    }

    /* btn */
    .btn {
      padding: 7px 14px 7px 14px;
      border-radius: 7px;
      cursor: pointer;

      border: #171932;
      background-color: #171932;
      color: #fff;
      font-family: 'SF Compact Display', sans-serif;
    }

    .section {
      background-color: #272A4E;
      padding: 50px;
      margin-left: 70px;
      margin-right: 70px;
      height: auto;
    }

    .lower-section {
      display: flex;
      justify-content: center;
      gap: 20px;

      margin-top: 20px;
    }

    /* PROFILE */
    .upper-section {
      display: flex;
      align-items: center;
      gap: 20px;

      padding-left: 120px;
    }

    .upper-section img {
      width: 3%;
    }


    /* btn */
    .btn {
      padding: 7px 14px 7px 14px;
      border-radius: 7px;
      cursor: pointer;

      border: #171932;
      background-color: #171932;
      color: #fff;
      font-family: 'SF Compact Display', sans-serif;
    }

    /* submit ----------------------------*/
    .submit {
      text-decoration: none;
      position: relative;
      border: none;
      font-size: 14px;
      font-family: 'SF Pro Display', sans-serif;
      font-weight: 500;

      color: #fff;

      padding: 4px;
      padding-left: 20px;
      padding-right: 20px;
      width: auto;
      height: 100%;

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

    /* end of add to cart ----------------------------*/

    /* btn */
    .btn {
      padding: 7px 14px 7px 14px;
      border-radius: 7px;
      cursor: pointer;

      border: #171932;
      background-color: #171932;
      color: #fff;
      font-family: 'SF Compact Display', sans-serif;
    }

    /* submit ----------------------------*/
    .submit {
      text-decoration: none;
      position: relative;
      border: none;
      font-size: 14px;
      font-family: 'SF Pro Display', sans-serif;
      font-weight: 500;

      color: #fff;

      padding: 4px;
      padding-left: 20px;
      padding-right: 20px;
      width: auto;
      height: 100%;

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

    /* end of add to cart ----------------------------*/






    /* cancel */
    .cancel {
      padding: 7px 14px 7px 14px;
      border-radius: 7px;
      cursor: pointer;

      border: #171932;
      background-color: #171932;
      color: #fff;
      font-family: 'SF Compact Display', sans-serif;
    }

    /* cancel ----------------------------*/
    .cancel {
      text-decoration: none;
      position: relative;
      border: none;
      font-size: 14px;
      font-family: 'SF Pro Display', sans-serif;
      font-weight: 500;

      color: #fff;

      padding: 4px;
      padding-left: 20px;
      padding-right: 20px;
      width: auto;
      height: 100%;

      line-height: 2em;
      text-align: center;
      background: linear-gradient(90deg, #b85fe8, #28dbe5, #3a88e6, #b85fe8);
      background-size: 300%;
      border-radius: 7px;
      z-index: 1;
    }

    .cancel:hover {
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

    .cancel:before {
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

    .cancel:hover::before {
      filter: blur(10px);
    }

    .cancel:active {
      background: linear-gradient(32deg, #ffffff, #ffffff, #ffffff, #ffffff);
      /* background: linear-gradient(32deg,#b85fe8,#28dbe5,#3a88e6, #b85fe8); */
    }

    /* end of cancel ----------------------------*/
    section {
      padding-bottom: 100px;
    }

    .preview {
      display: block;
      width: 150px;
      height: 150px;
      border: 1px solid rgb(255, 255, 255);
      margin-top: 10px;
      text-align: center;
      /* Added to center the text */
      line-height: 150px;
      /* Added to vertically center the text */
    }

    .preview1920 {
      display: flex;
      justify-content: center;
      align-items: center;
      border: 1px solid rgb(255, 255, 255);

      width: 500px;
      height: 281px;
    }
  </style>
</head>

<body>
  <div class="container">
    <!-- HEADER -->
    <my-header></my-header>

    <!-- MAIN -->
    <main>
      <div class="upper-section">
        <img src="/STKRHub-XAMPP/img/image-profile.png" alt="" id="profilepic">
        <h1><span id="username">username</span></h1>
      </div>

      <div class="lower-section">
        <div class="sidemenu">
          <div class="side-left">

          </div>
          <div class="side-right">
            <div class="ul-container">
              <ul>
                <nav>

                  <li>
                    <a href="profile.php">
                      <div class="container-a ">
                        <span id="nav"> Profile </span>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="email.php">
                      <div class="container-a">
                        <span id="nav"> Email </span>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="password.php">
                      <div class="container-a">
                        <span id="nav"> Password </span>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="addresses.php">
                      <div class="container-a">
                        <span id="nav"> Addresses </span>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="mypurchase.php">
                      <div class="container-a container-active">
                        <span id="nav"> My Purchase </span>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="/STKRHub-XAMPP/php/logout.php">
                      <div class="container-a">
                        <span id="nav"> Signout </span>
                      </div>
                    </a>
                  </li>

                </nav>
              </ul>
            </div>
          </div>
        </div>

        <div class="body">
          <div class="container-body">
            <section id="profile" class="section">
                <div class="upper-nav">
                    <div class="nav"></div>
                    <div class="nav"></div>
                    <div class="nav"></div>
                </div>
            </section>
          </div>
        </div>
      </div>

    </main>

    <!-- FOOTER -->
    <my-footera></my-footera>

    <script src="/STKRHub-XAMPP/js/header.js"></script>
    <script src="/STKRHub-XAMPP/js/subnav.js"></script>
    <script src="/STKRHub-XAMPP/js/footer.js"></script>
    <script src="/STKRHub-XAMPP/js/footera.js"></script>

    <script>
      // Preview
      fileImg.onchange = evt => {
        const [file] = fileImg.files;
        if (file) {
          $('#previewDiv').text(''); // Clear the dimensions text
          var reader = new FileReader();
          reader.onload = function(e) {
            $('#previewDiv').html('<img src="' + e.target.result + '" style="width: 100%; height: 100%;" />');
          }
          reader.readAsDataURL(file);
        } else {
          $('#previewDiv').html('upload your avatar'); // Display dimensions text
        }
      }

      // Submit
      function submitData() {
        $(document).ready(function() {
          var formData = new FormData();
          var files = $('#fileImg')[0].files;
          formData.append('fileImg', files[0]);

          $.ajax({
            url: 'function.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
              if (response == "Success") {
                alert("Successfully Added");
              } else if (response == "Invalid Extension") {
                alert("Invalid Extension");
              } else {
                alert("Please Fill Out The Form");
              }
            }
          });
        });
      }

      // Clear image
      function clearImage() {
        $('#img').attr('src', ''); // Clears the source of the image
        $('#fileImg').val(''); // Clears the file input value
        $('#previewDiv').html('upload your avatar'); // Display dimensions text
      }
    </script>

  </div>
</body>

</html>