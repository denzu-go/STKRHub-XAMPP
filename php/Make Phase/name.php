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

    <title>Make Phase - All Components</title>

    <style>

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
            <img src="/STKRHub-XAMPP/img/make-bg.png" alt="">
          </div>
          <div class="side-right">
            <div class="ul-container">
            <ul>
              <nav>
                <li>
                  <a href="">
                    <div class="container-a ">
                      <i class="fas fa-bars"></i>
                      <a href="/STKRHub-XAMPP/php/Make Phase/allcomponents.php"><span id="span-allcomponents"> All Components </span></a>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="">
                    <div class="container-a ">
                      <i class="fa-solid fa-book"></i>
                      <a href="/STKRHub-XAMPP/php/Make Phase/addrulebook.php"><span id="span-addrulebook"> Add Rulebook </span></a>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="">
                    <div class="container-a">
                      <i class="fa-sharp fa-solid fa-box"></i>
                      <a href="/STKRHub-XAMPP/php/Make Phase/addbox.php"><span id="span-addbox"> Add box </span></a>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="">
                    <div class="container-a container-active">
                      <i class="fa-solid fa-pen-to-square"></i>
                      <a href="/STKRHub-XAMPP/php/Make Phase/name.php"><span id="span-name"> Name </span></a>
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
            <section id="name" class="section">
              <div class="title-of-section">
                <p>Make Phase</p>
                <p class="description">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint
                  sunt tempora earum quaerat officiis fuga assumenda ipsa
                  suscipit libero unde!
                </p>
              </div>

              <div class="content">
                <form action="" method="post">
                  <input
                    class="input-text"
                    type="text"
                    name=""
                    placeholder="project name"
                  />
                  <a href="#">
                    <input
                      type=""
                      class="submit"
                      value="Update Changes"
                    />
                  </a>
                </form>
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
