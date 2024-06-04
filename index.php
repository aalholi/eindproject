<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- x-icon -->

    <link rel="icon" type="image/x-icon" href="images/favicon.webp" />

    <!-- icons CDN link -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
   
    <!-- Bootstrap CDN link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- Fonts CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">

    <!-- Style sheet -->
    <link rel="stylesheet" href="styles/index.css">
    <title>Brawnies Escape Rooms</title>
  </head>
  <body>
  <header class="navbar d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
          <div class="col-md-3 mb-2 mb-md-0">
            <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
              <img class="bi" width="100" height="60" role="img" aria-label="Bootstrap" src="images/logo.webp"/>
            </a>
          </div>
   
          <ul class="nav nav-links col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2"><i class="uil uil-estate"></i>Home</a></li>
            <li><a href="pages/games.php" class="nav-link px-2"><i class="uil uil-club"></i>Games</a></li>
            <li><a href="pages/leaderboard.php" class="nav-link px-2"><i class="uil uil-game-structure"></i>Leaderboard</a></li>
            <li><a href="pages/reserve.php" class="nav-link px-2"><i class="uil uil-schedule"></i>Reservation</a></li>
            <li><a href="pages/AboutUs.php" class="nav-link px-2"><i class="uil uil-info-circle"></i>About Us</a></li>
          </ul>
          <div class="col-md-3 text-end">
            <?php if (isset($_SESSION['voornaam'])){?>
              <button type="button" class="btn loginBtnDesktop btn-dark me-2"><a href="pages/logout.php" class="link-login-button text-decoration-none"><i class="uil uil-signout"></i>Logout</a></button>
              
              <?php } else { ?>
            <button type="button" class="btn loginBtnDesktop btn-dark me-2"><a href="pages/login.php" class="link-login-button text-decoration-none"><i class="uil uil-user"></i>Login</a></button>
            <?php } ?>
            <nav class="navbar navbar-menu-mobile navbar-dark">
              <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
            </nav>
            <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
              <div class="navbar-mobile-container bg-dark p-4">
                <ul class="nav navbar-mobile justify-content-center">
                <li><a href="../index.php" class="nav-link px-2"><i class="uil uil-estate"></i>Home</a></li>
            <li><a href="../games.html" class="nav-link px-2"><i class="uil uil-club"></i>Games</a></li>
            <li><a href="./leaderboard.php" class="nav-link px-2"><i class="uil uil-game-structure"></i>Leaderboard</a></li>
            <li><a href="./reservation.php" class="nav-link px-2"><i class="uil uil-schedule"></i>Reservation</a></li>
            <li><a href="./aboutUs.php" class="nav-link px-2"><i class="uil uil-info-circle"></i>About Us</a></li>
                </ul>
                <div class="col-md-3 text-end btn-login-mobile-menu p-2">
                <?php if (isset($_SESSION['voornaam'])){?>
                <button type="button" class="btn btnLogin-mobile btn-dark me-2"><a href="./login.php" class="loginBtn-mobile text-decoration-none"><i class="uil uil-signout"></i>Logout</a></button>
                <?php } else { ?>
                <button type="button" class="btn btnLogin-mobile btn-dark me-2"><a href="./login.php" class="loginBtn-mobile text-decoration-none"><i class="uil uil-user"></i>Login</a></button>
                <?php } ?>
              </div>
            </div>
        </header>
        <main>
          <section id="hero-img">
            <img src="images/home.webp" alt="photo">
          </section>
          <section id="header">
            <h1>Welcome To Brawnies Escape Room</h1>
            <p>Experience the thrill of solving puzzles and escaping room challenging rooms. </p>
          </section>
          
          <section id="online-games">
            <h2>Online Games</h2>
            <div class="row">
            <div class="card" style="width: 22rem;">
              <img src="./images/home/jaredd-craig-HH4WBGNyltc-unsplash 1.webp" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Game 1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Learn more</a>
              </div>
            </div>

            <div class="card" style="width: 22rem;">
              <img src="./images/home/jaredd-craig-HH4WBGNyltc-unsplash 1.webp" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Game 2</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Learn more</a>
              </div>
            </div>

            <div class="card" style="width: 22rem;">
              <img src="./images/home/jaredd-craig-HH4WBGNyltc-unsplash 1.webp" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Game 3</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Learn more</a>
              </div>
            </div>

            <div class="card" style="width: 22rem;">
              <img src="./images/home/jaredd-craig-HH4WBGNyltc-unsplash 1.webp" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Game 4</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <span class="non-clikable-buttons" style="background-color: #6c757d;">Coming Soon!!</span>
              </div>
            </div>

          </div>
          </section>
          <section id="offline-games">
            <h2>Live Rooms</h2>
            <div class="row">
            <div class="card" style="width: 22rem;">
              <img src="./images/home/jaredd-craig-HH4WBGNyltc-unsplash 1.webp" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Room 1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Learn more</a>
              </div>
            </div>

            <div class="card" style="width: 22rem;">
              <img src="./images/home/jaredd-craig-HH4WBGNyltc-unsplash 1.webp" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Room 2</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Learn more</a>
              </div>
            </div>

            <div class="card" style="width: 22rem;">
              <img src="./images/home/jaredd-craig-HH4WBGNyltc-unsplash 1.webp" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Room 3</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Learn more</a>
              </div>
            </div>

            <div class="card" style="width: 22rem;">
              <img src="./images/home/jaredd-craig-HH4WBGNyltc-unsplash 1.webp" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Room 4</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <span class="non-clikable-buttons" style="background-color: #6c757d;">Coming Soon!!</span>
              </div>
            </div>

            <div class="card" style="width: 22rem;">
              <img src="./images/home/jaredd-craig-HH4WBGNyltc-unsplash 1.webp" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Room 5</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <span class="non-clikable-buttons" style="background-color: #6c757d;">Coming Soon!!</span>
              </div>
            </div>

          </div>
          </section>

        </main>
        <footer>
        <div class="row">
          <div class="logo-footer col-6 col-md-2 mb-3">
          <img src="images/logo.webp">
          </div>
              <div class="locations col-6 col-md-2 mb-3">  
                <ul class="nav flex-column">
                  <h5>Locations:</h5>
                  <li><i class="uil uil-map-marker"></i>Korenmarkt 20, 9000 Ghent</li>
                  <li><i class="uil uil-map-marker"></i>Rue Van Artevelde 13, 1000 Brussel</li>
                </ul>
              </div>
      
        <div class="openingsHours col-6 col-md-2 mb-3">
          <h5>Opening Hours:</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><i class="uil uil-calender"></i>Mon-Fri: 10h - 18h</li>
            <li class="nav-item mb-2"><i class="uil uil-calender"></i>Sat & Sun: Closed</li>
          </ul>
        </div>
        <div class="socials nav  col-6 col-md-2 mb-3">
          <i class="uil uil-facebook"></i>
          <i class="uil uil-instagram-alt"></i>
        </div>
    </div>
      <div class="copyright d-flex flex-wrap ">
        <div class="col-md-4 d-flex align-items-center justify-content-center">
          <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2024 Brawnies Escape Rooms. All rights reserved</span>
        </div>
      </div>
      </footer>
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
