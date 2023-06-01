<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title id="game-title"></title>

    <!-- css -->
    <link rel="stylesheet" href="/STKRHub-XAMPP/css/game-page.css" />

    <!-- icons -->
    <link rel="shortcut icon" type="image" href="/STKRHub-XAMPP/img/logo.png" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/regular.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/svg-with-js.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link
      href="https://fonts.cdnfonts.com/css/sf-pro-display"
      rel="stylesheet"
    />

    <!-- fonts -->
    <link
      href="https://fonts.cdnfonts.com/css/akira-expanded"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lato"
      rel="stylesheet"
    />
    <link
      href="https://fonts.cdnfonts.com/css/sf-compact-display"
      rel="stylesheet"
    />

  </head>

  <body>
    <div class="container">
      <my-header></my-header>

      <main>
        <div class="container-main">
            <div class="game-title">
                <h3 id="game-title">Game Title</h3><br>
            </div>

            <div class="upper">
                <div class="upper-left">
                    <div class="game-media">
                        <div class="box1">
                            <div class="big-pic">
                              <img
                                class="mainPic"
                                id="mainPic"
                                src="/STKRHub-XAMPP/img/gamepagebanner.png"
                                alt=""
                              />
                            </div>

                            <div class="pics">
                                <img
                                    class="smallPic"
                                    onclick="changePicture()"
                                    id=""
                                    src="/STKRHub-XAMPP/img/STKRHUB/CUSTOM-GAME-BOXES/Blank Game Boxes/Plain Card Game Boxes 200 Cards/Plain Card Game Boxes 200 Cards.jpg"
                                    alt=""
                                />
                                <img
                                    class="smallPic"
                                    onclick="changePicture()"
                                    id=""
                                    src="/STKRHub-XAMPP/img/STKRHUB/CUSTOM-GAME-BOXES/Blank Game Boxes/Plain Card Game Boxes 200 Cards/closeup 1.jpg"
                                    alt=""
                                />

                                <img
                                    class="smallPic"
                                    onclick="changePicture()"
                                    id=""
                                    src="/STKRHub-XAMPP/img/STKRHUB/CUSTOM-GAME-BOXES/Blank Game Boxes/Plain Card Game Boxes 200 Cards/closeup 2.jpg"
                                    alt=""
                                />

                                <img
                                    class="smallPic"
                                    onclick="changePicture()"
                                    id=""
                                    src="/STKRHub-XAMPP/img/image-profile.png"
                                    alt=""
                                />
                            </div>
                          </div>
                    </div>
                </div>

                <div class="upper-right">
                    <div class="game-logo">
                        <img src="/STKRHub-XAMPP/img/gamepagelogo.png" alt="" class="gamelogo">
                    </div>

                    <div class="right-mid">
                        <div class="game-price">
                            <h3 id="game-price">P200</h3>
                        </div>

                        <div class="game-rating">
                            
                        </div>

                        <div class="add-to-cart">
                            <button type="button" class="add-to-cart" id="add-to-cart">
                                Add to Cart
                            </button>
                        </div>
                    </div>

                    <div class="right-low">

                        <!-- start -->
                        <div class="info">
                            <div class="a">
                                <h4 class="a">Publisher: </h4>
                            </div>
                            
                            <div class="b">
                                <h4 class="b">Denzel Go</h4>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- start -->
                        <div class="info">
                            <div class="a">
                                <h4 class="a">Release Date: </h4>
                            </div>
                            
                            <div class="b">
                                <h4 class="b">June 1, 2023</h4>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- start -->
                        <div class="info">
                            <div class="a">
                                <h4 class="a">Edition: </h4>
                            </div>
                            
                            <div class="b">
                                <h4 class="b">Second</h4>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- start -->
                        <div class="info">
                            <div class="a">
                                <h4 class="a">Players: </h4>
                            </div>
                            
                            <div class="b">
                                <h4 class="b">2-10</h4>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- start -->
                        <div class="info">
                            <div class="a">
                                <h4 class="a">Play Time: </h4>
                            </div>
                            
                            <div class="b">
                                <h4 class="b">30-40mins</h4>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- start -->
                        <div class="info">
                            <div class="a">
                                <h4 class="a">Age: </h4>
                            </div>
                            
                            <div class="b">
                                <h4 class="b">12+</h4>
                            </div>
                        </div>
                        <!-- end -->
                    </div>
                </div>
            </div>

            <div class="mid">
                <div class="specs">
                    <div class="spec-text">
                        <div class="shortdescription">
                            <p>Short Description:</p>
                            <ul>
                                <li>
                                    Winner of over 175 Game of the Year Awards and recipient of over 250 perfect scores, Red Dead Redemption 2 is an epic tale of honor and loyalty at the dawn of the modern age. Includes Red Dead Redemption 2: Story Mode and Red Dead Online.
                                </li>
                            </ul>
                        </div>
                        <br>

                        <div class="genre">
                            <p>Game Genre:</p>
                            <ul class="game-genre">
                                <li>
                                    Action
                                </li>
                                <li>
                                    Action
                                </li>
                            </ul>
                        </div>
                        <br>

                        <div class="longdescription">
                            <ul>
                                <li>
                                    Winner of over 175 Game of the Year Awards and recipient of over 250 perfect scores, Red Dead Redemption 2 is an epic tale of honor and loyalty at the dawn of the modern age. Includes Red Dead Redemption 2: Story Mode and Red Dead Online.Winner of over 175 Game of the Year Awards and recipient of over 250 perfect scores, Red Dead Redemption 2 is an epic tale of honor and loyalty at the dawn of the modern age. Includes Red Dead Redemption 2: Story Mode and Red Dead Online.Winner of over 175 Game of the Year Awards and recipient of over 250 perfect scores, Red Dead Redemption 2 is an epic tale of honor and loyalty at the dawn of the modern age. Includes Red Dead Redemption 2: Story Mode and Red Dead Online.Winner of over 175 Game of the Year Awards and recipient of over 250 perfect scores, Red Dead Redemption 2 is an epic tale of honor and loyalty at the dawn of the modern age. Includes Red Dead Redemption 2: Story Mode and Red Dead Online.
                                </li>
                            </ul>
                        </div>

                        
                    </div>

                    <div class="rating">

                    </div>

                    <div class="comments">

                    </div>

                    <section class="follow-container">
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
            </div>

            <div class="lower">

            </div>
        </div>

      </main>


      <my-footera></my-footera>

    </div>


    <script src="/STKRHub-XAMPP/js/header.js"></script>
    <script src="/STKRHub-XAMPP/js/subnav.js"></script>
    <script src="/STKRHub-XAMPP/js/footer.js"></script> 
    <script src="/STKRHub-XAMPP/js/footera.js"></script> 

    <script>
        // function to changePicture
        function changePicture(){
            document.querySelectorAll('.smallPic').forEach(function(smallPic) {
            smallPic.addEventListener('click', function(event) {
                const mainPic = document.querySelector('.mainPic');
                mainPic.src = event.target.src;
            });
            });
        }
        // end of function to changePicture
    </script>
  </body>
</html>
