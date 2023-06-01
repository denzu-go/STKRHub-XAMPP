<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- css -->
  <link rel="stylesheet" href="/STKRHub-XAMPP/css/make phase.css" />

  <!-- icons -->
  <link rel="shortcut icon" type="image" href="../../img/logo.png" />

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

  <title>Publish - Edit Details</title>

  <style>
    @import url(/STKRHub-XAMPP/css/header.css);
    @import url(/STKRHub-XAMPP/css/footer.css);
    @import url(/STKRHub-XAMPP/css/footera.css);
    @import url(/STKRHub-XAMPP/css/subnav.css);
    @import url(/STKRHub-XAMPP/css/make-table.css);
    @import url(/STKRHub-XAMPP/css/publish.css);

    section {
      padding-bottom: 100px;
    }

    .preview {
      display: block;
      width: 350px;
      height: 150px;
      border: 1px solid rgb(255, 255, 255);
      margin-top: 10px;
      text-align: center;
      /* Added to center the text */
      line-height: 150px;
      /* Added to vertically center the text */
    }

    #previewDiv1920 {
      display: flex;
      justify-content: center;
      align-items: center;
      border: 1px solid rgb(255, 255, 255);

      width: 500px;
      height: 281px;
    }





    /* add to cart */

    .add-to-cart {


      text-decoration: none;
      border: none;
      font-size: 17px;
      font-family: 'SF Pro Display', sans-serif;
      font-weight: 500;

      color: #fff;
      width: 1100px;
      height: 50px;

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
  </style>
</head>

<body>
  <div class="container">
    <!-- HEADER -->
    <my-header></my-header>

    <!-- MAIN -->
    <main>
      <div class="sidemenu">
        <div class="side-left">
          <img src="/STKRHub-XAMPP/img/publish-bg.png" alt="">
        </div>
        <div class="side-right">
          <div class="ul-container">
              <ul>
                <nav>

                  <li>
                    <a href="">
                      <div class="container-a ">
                        <i class="fas fa-bars"></i>
                        <a href="/STKRHub-XAMPP/php/publish/overview.php"><span id="span-overview"> Overview </span></a>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="">
                      <div class="container-a container-active">
                        <i class="fa-solid fa-vials"></i>
                        <a href="/STKRHub-XAMPP/php/publish/editdetails.php"><span id="span-vitals"> Edit Details </span></a>
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

          <!-- TODO:TODO:TODO:TODO: -->
          <section id="vitals" class="section">
            <div class="title-of-section">
              <p>Vitals</p>
              <p class="description">
                
              </p>
            </div>

            <div class="content">
              <div class="content-vitals">

                <div class="left-content">
                  <form action="" method="post">
                    <h4>Name</h4>
                    <input class="input-text" type="text" name="" placeholder="" maxlength="70" />
                    <br><br>

                    <h4>Edition</h4>
                    <input class="input-text" type="text" name="" placeholder="" />
                    <br><br>

                    <h4>Players</h4>
                    <div class="players">
                      <input class="input-text" type="number" name="" placeholder="" />
                      <p class="description">minimum</p>

                      <input class="input-text" type="number" name="" placeholder="" />
                      <p class="description">maximum</p>
                    </div>
                    <br><br>

                    <h4>Play Time</h4>
                    <input class="input-text" type="number" name="" placeholder="minutes" />
                    <br><br>

                    <h4>Age</h4>
                    <input class="input-text" type="number" name="" placeholder="" />
                    <br><br>
                  </form>
                </div>

              </div>
            </div>
          </section>
          <!-- TODO:TODO:TODO:TODO: -->


          <!-- TODO:TODO:TODO:TODO: -->
          <section id="Pricing" class="section">
            <div class="title-of-section">
              <p>Pricing</p>
              <p class="description">
                
              </p>
            </div>

            <div class="content">
              <div class="content-pricing">

                <div class="left-content">
                  <form action="" method="post">
                    <h4>Desired Markup</h4>
                    <input class="input-text" type="text" name="" placeholder="500" disabled/>
                    <br><br>

                    <h4>Price</h4>
                    <div class="prices">
                      <input class="input-text" type="number" name="" placeholder="2000" disabled/>
                      <p class="description">Manufacturer’s Suggested Retail Price (MSRP)</p>

                      <input class="input-text" type="number" name="" placeholder="1500" disabled/>
                      <p class="description">Cost</p>

                      <input class="input-text" type="number" name="" placeholder="100" disabled/>
                      <p class="description">STKR Labs</p>

                      <input class="input-text" type="number" name=""placeholder="400" disabled/>
                      <p class="description">Designer</p>
                    </div>
                    <br><br>

                  </form>
                </div>

              </div>
            </div>
          </section>
          <!-- TODO:TODO:TODO:TODO: -->


          <!-- TODO:TODO:TODO:TODO: -->
          <section id="marketing" class="section">
            <div class="title-of-section">
              <p>Marketing</p>
              <p class="description">
                
              </p>
            </div>

            <div class="content">
              <div class="content-vitals">

                <div class="left-marketing">
                  <form action="" method="post">
                    <h4>Short Description</h4>
                    <textarea class="textarea-short" name="text" cols="35" rows="4" minlength="20" maxlength="400" required placeholder="Enter your short description here"></textarea>
                    <p class="description">
                      
                    </p>
                    <br><br>

                    <h4>Long Description</h4>
                    <textarea class="textarea-long" name="text" cols="35" rows="4" minlength="20" maxlength="400" required placeholder="Enter your long description here"></textarea>
                    <p class="description">
                      
                    </p>
                    <br><br>

                  </form>
                </div>

              </div>
            </div>
          </section>
          <!-- TODO:TODO:TODO:TODO: -->


          <!-- TODO:TODO:TODO:TODO: -->
          <section id="gamelogo" class="section">
            <div class="title-of-section">
              <p>Game Logo</p>
              <p class="description">
                
              </p>
            </div>

            <div class="content">
              <div class="content-gamelogo">

                <form method="post" action="" enctype="multipart/form-data">

                  <div class="preview" id="previewDiv">
                    exactly 350 x 150 pixels <!-- Initial dimensions text -->
                  </div>
                  <br>

                  <input class="imgupload" type="file" name="fileImg" id="fileImg"><br>
                  <button class="btn" type="button" onclick="clearImage();">Clear Picture</button> <!-- Added clear button -->
                  <!-- <button type="button" onclick="submitData();">Submit</button> -->
                </form>

              </div>
            </div>
          </section>
          <!-- TODO:TODO:TODO:TODO: -->


          <!-- TODO:TODO:TODO:TODO: -->
          <section id="taxonomy" class="section">
            <div class="title-of-section">
              <p>Taxonomy</p>
              <p class="description">
                
              </p>
            </div>

            <div class="content">
              <div class="content-taxonomy">
                <form class="genre">
                  <div class="checkbox">
                    <input type="checkbox" name="option1" value="Strategy Game">
                    <label for="strategygame">Strategy Game</label><br>
                  </div><br>

                  <div class="checkbox">
                    <input type="checkbox" name="option2" value="Role-Playing Game">
                    <label for="rpg">Role-Playing Game</label><br>
                  </div><br>

                  <div class="checkbox">
                    <input type="checkbox" name="option3" value="Cooperative Game">
                    <label for="cooperativegame">Cooperative Game</label><br>
                  </div><br>

                  <div class="checkbox">
                    <input type="checkbox" name="option1" value="Deck-Building Game">
                    <label for="deckbuildinggame">Deck-Building Game</label><br>
                  </div><br>

                  <div class="checkbox">
                    <input type="checkbox" name="option2" value="Party Game">
                    <label for="partygame">Party Game</label><br>
                  </div><br>

                  <div class="checkbox">
                    <input type="checkbox" name="option3" value="Miniature Wargame">
                    <label for="miniaturewargame">Miniature Wargame</label><br>
                  </div><br>

                  <div class="checkbox">
                    <input type="checkbox" name="option1" value="Puzzle Game">
                    <label for="puzzlegame">Puzzle Game</label><br>
                  </div><br>

                  <div class="checkbox">
                    <input type="checkbox" name="option2" value="Card Game">
                    <label for="cardgame">Card Game</label><br>
                  </div><br>

                </form>
              </div>
            </div>
          </section>
          <!-- TODO:TODO:TODO:TODO: -->


          <!-- TODO:TODO:TODO:TODO: -->
          <section id="actionshots" class="section">
            <div class="title-of-section">
              <p>Action Shots</p>
              <p class="description">
                
              </p>
            </div>

            <div class="content">

              <div class="content-actionshots">
                <div class="actionshots-box">
                  <h4>Banner 1</h4>
                  <form method="post" action="" enctype="multipart/form-data">
                    <div class="preview" id="previewDiv1920">
                      Exactly 1920 x 1080 pixels <!-- Initial dimensions text -->
                    </div>
                    <br>
                    <input class="imgupload" type="file" name="fileImg1920" id="fileImg1920"><br>
                    <button class="btn" type="button" onclick="clearImage('img1920', 'fileImg1920', 'previewDiv1920', 1920, 1080);">Clear Picture</button> <!-- Added clear button -->
                    <!-- <button type="button" onclick="submitData('fileImg1920', 'function.php');">Submit</button> -->
                  </form>
                </div>

                <div class="actionshots-box">
                  <h4>Banner 1</h4>
                  <form method="post" action="" enctype="multipart/form-data">
                    <div class="preview" id="previewDiv1920">
                      Exactly 1920 x 1080 pixels <!-- Initial dimensions text -->
                    </div>
                    <br>
                    <input class="imgupload" type="file" name="fileImg1920" id="fileImg1920"><br>
                    <button class="btn" type="button" onclick="clearImage('img1920', 'fileImg1920', 'previewDiv1920', 1920, 1080);">Clear Picture</button> <!-- Added clear button -->
                    <!-- <button type="button" onclick="submitData('fileImg1920', 'function.php');">Submit</button> -->
                  </form>
                </div>

              </div>

              <div class="content-actionshots">

                <div class="actionshots-box">
                  <h4>Banner 2</h4>
                  <form method="post" action="" enctype="multipart/form-data">

                    <div class="preview1920" id="previewDiv1920">
                      exactly 1920 x 1080 pixels <!-- Initial dimensions text -->
                    </div>
                    <br>

                    <input class="imgupload1920" type="file" name="fileImg1920" id="fileImg1920">
                    <button class="btn" type="button" onclick="clearImage1920();">Clear Picture</button> <!-- Added clear button -->
                    <!-- <button type="button" onclick="submitData();">Submit</button> -->
                  </form>
                </div>

                <div class="actionshots-box">
                  <h4>Banner 3</h4>
                  <form method="post" action="" enctype="multipart/form-data">

                    <div class="preview1920" id="previewDiv1920">
                      exactly 1920 x 1080 pixels <!-- Initial dimensions text -->
                    </div>
                    <br>

                    <input class="imgupload1920" type="file" name="fileImg1920" id="fileImg1920">
                    <button class="btn" type="button" onclick="clearImage1920();">Clear Picture</button> <!-- Added clear button -->
                    <!-- <button type="button" onclick="submitData();">Submit</button> -->
                  </form>
                </div>

              </div>
            </div>
          </section>
          <!-- TODO:TODO:TODO:TODO: -->

          <section>
            <a href="/STKRHub-XAMPP/php/publish/wait.php">
              <button class="add-to-cart" type="submit">Publish</button>
            </a>
          </section>
        </div>
      </div>
    </main>


    <!-- FOOTER -->
    <my-footera></my-footera>
  </div>

  <script src="/STKRHub-XAMPP/js/header.js"></script>
  <script src="/STKRHub-XAMPP/js/subnav.js"></script>
  <script src="/STKRHub-XAMPP/js/footer.js"></script>
  <script src="/STKRHub-XAMPP/js/footera.js"></script>


  <script type="text/javascript">
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
        $('#previewDiv').html('exactly 350 x 150 pixels'); // Display dimensions text
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
      $('#previewDiv').html('exactly 350 x 150 pixels'); // Display dimensions text
    }


    // 1920 x 1080 img preview upload =========================
    // Preview
    fileImg1920.onchange = evt => {
      const [file] = fileImg1920.files;
      if (file) {
        $('#previewDiv1920').text(''); // Clear the dimensions text
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#previewDiv1920').html('<img src="' + e.target.result + '" style="width: 100%; height: 100%;" />');
        }
        reader.readAsDataURL(file);
      } else {
        $('#previewDiv1920').html('exactly 1920 x 1080 pixels'); // Display dimensions text
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
    function clearImage1920() {
      $('#img1920').attr('src', ''); // Clears the source of the image
      $('#fileImg1920').val(''); // Clears the file input value
      $('#previewDiv1920').html('exactly 1920 x 1080 pixels'); // Display dimensions text
    }



    // video 1920 x 1080 upload
    function clearVideo() {
      var videoElement = document.querySelector("video");
      if (videoElement.src) {
        videoElement.src = "";
      }
      document.getElementById("videoUpload").value = null;
    }

    document.getElementById("videoUpload").onchange = function(event) {
      let file = event.target.files[0];
      let blobURL = URL.createObjectURL(file);
      document.querySelector("video").src = blobURL;
    };
  </script>

  </div>
</body>

</html>