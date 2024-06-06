<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="../images/favicon.webp" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../styles/index.css">
    <title>Brawnies Escape Rooms</title>
  </head>
  <body>
        <header class="navbar d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
          <div class="col-md-3 mb-2 mb-md-0">
            <a href="../index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
              <img class="bi" width="100" height="60" role="img" aria-label="Bootstrap" src="../images/logo.webp"/>
            </a>
          </div>
   
          <ul class="nav nav-links col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="../index.php" class="nav-link px-2"><i class="uil uil-estate"></i>Home</a></li>
            <li><a href="./games.php" class="nav-link px-2"><i class="uil uil-club"></i>Games</a></li>
            <li><a href="./leaderboard.php" class="nav-link px-2"><i class="uil uil-game-structure"></i>Leaderboard</a></li>
            <li><a href="./reserve.php" class="nav-link px-2"><i class="uil uil-schedule"></i>Reservation</a></li>
            <li><a href="./aboutUs.php" class="nav-link px-2"><i class="uil uil-info-circle"></i>About Us</a></li>
          </ul>
          <div class="col-md-3 text-end">
            <?php if (isset($_SESSION['voornaam'])){?>
              <button type="button" class="btn loginBtnDesktop btn-dark me-2"><a href="./logout.php" class="link-login-button text-decoration-none"><i class="uil uil-signout"></i>Logout</a></button>
              
              <?php } else { ?>
            <button type="button" class="btn loginBtnDesktop btn-dark me-2"><a href="./login.php" class="link-login-button text-decoration-none"><i class="uil uil-user"></i>Login</a></button>
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
            <li><a href="./games.php" class="nav-link px-2"><i class="uil uil-club"></i>Games</a></li>
            <li><a href="./leaderboard.php" class="nav-link px-2"><i class="uil uil-game-structure"></i>Leaderboard</a></li>
            <li><a href="./reserve.php" class="nav-link px-2"><i class="uil uil-schedule"></i>Reservation</a></li>
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
      
  </body>
</html>
