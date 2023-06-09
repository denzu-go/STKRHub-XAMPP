<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- css -->
    <link rel="stylesheet" href="/STKRHub-XAMPP/css/make phase.css" />

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

    <!-- for text-spinner -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>Publish - Overview</title>

    <style>
      @import url(/STKRHub-XAMPP/css/header.css);
      @import url(/STKRHub-XAMPP/css/footer.css);
      @import url(/STKRHub-XAMPP/css/footera.css);
      @import url(/STKRHub-XAMPP/css/subnav.css);
      @import url(/STKRHub-XAMPP/css/make-table.css);
      @import url(/STKRHub-XAMPP/css/publish.css);
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
                      <div class="container-a container-active">
                        <i class="fas fa-bars"></i>
                        <a href="/STKRHub-XAMPP/php/publish/overview.php"><span id="span-overview"> Overview </span></a>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="">
                      <div class="container-a">
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
            <section id="addbox" class="section">
              <div class="title-of-section">
                <p>Make Phase</p>
                <p class="description">
                  
                </p>
              </div>

              <div class="content">
                <!-- <div class="choice">
                  <div class="yes">
                      <button class="btn">
                          Publish this
                          <i class="fa-solid fa-check"></i>
                      </button>
                      <p class="description">
                          If you publish this... Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum perferendis pariatur itaque, repudiandae inventore ratione in! Accusantium quidem laboriosam voluptatem mollitia reiciendis architecto quibusdam dolorem quae, modi cum fuga ullam.
                      </p>
                  </div>
                  
                  <div class="no">
                      <button class="btn">
                          Do not publish this
                          <i class="fa-solid fa-check"></i>
                      </button>
                      <p class="description">
                          If you did not publish this... Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum perferendis pariatur itaque, repudiandae inventore ratione in! Accusantium quidem laboriosam voluptatem mollitia reiciendis architecto quibusdam dolorem quae, modi cum fuga ullam.
                      </p>                              
                  </div>
                </div> -->

                <div class="components-table">
                  <div class="table-header">


                    <div class="table-components">Components</div>

                    <div class="table-quantity">Quantity</div>

                    <div class="table-cost">Cost</div>
                  </div>

                  <!-- eto ung nagmumultiply pag nadadagdagan -->
                  <div class="table-content">



                      <div class="content-components">
                        <div class="file-name">aasdasd.jpg</div>
                        <div class="component-name">
                          <span>Plain Game Board</span>
                        </div>
                      </div>


                    <div class="content-quantity">
                      <span id="rulebook-quantity">1</span>
                    </div>

                    <div class="content-cost">P200</div>
                  </div>
                  <!-- end -->
                </div>

                <div class="components-table">
                  <div class="table-header">


                    <div class="table-components">Rulebook</div>

                    <div class="table-quantity">Quantity</div>

                    <div class="table-cost">Cost</div>
                  </div>

                  <!-- eto ung nagmumultiply pag nadadagdagan -->
                  <div class="table-content">


                      <div class="content-components">
                        <div class="file-name">aasdasd.jpg</div>
                        <div class="component-name">
                          <span>Plain Game Board</span>
                        </div>
                      </div>


                    <div class="content-quantity">
                      <span id="rulebook-quantity">1</span>
                    </div>

                    <div class="content-cost">P200</div>
                  </div>
                  <!-- end -->
                </div>

                <div class="components-table">
                  <div class="table-header">


                    <div class="table-components">Box</div>

                    <div class="table-quantity">Quantity</div>

                    <div class="table-cost">Cost</div>
                  </div>

                  <!-- eto ung nagmumultiply pag nadadagdagan -->
                  <div class="table-content">



                      <div class="content-components">
                        <div class="file-name">aasdasd.jpg</div>
                        <div class="component-name">
                          <span>Plain Game Board</span>
                        </div>
                      </div>


                    <div class="content-quantity">
                      <span id="rulebook-quantity">1</span>
                    </div>

                    <div class="content-cost">P200</div>
                  </div>
                  <!-- end -->
                </div>
              </div>
            </section>
            <!-- TODO:TODO:TODO:TODO: -->

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
  </body>
</html>
