<?php
//databankconnectie maken
//server, username, wachtwoord, databanknaam
$dbConnect = new mysqli('auth-db779.hstgr.io', 'u893409859_GroepA', 'ZeMeAw123', 'u893409859_GroepA');

//fouten opvangen
if($dbConnect->connect_error){
    die("Connection failed");
    exit();
}

if (isset($_GET['submit'])){
    $password = $_GET['inputPassword'];
    $email = $_GET['inputEmail'];


}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="images/favicon.webp" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/login.css">
    <title>Brawnies Escape Rooms</title>
  </head>
  <body>
        <header class="navbar d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
          <div class="col-md-3 mb-2 mb-md-0">
            <a href="index.html" class="d-inline-flex link-body-emphasis text-decoration-none">
              <img class="bi" width="100" height="60" role="img" aria-label="Bootstrap" src="images/logo.webp"/>
            </a>
          </div>
   
          <ul class="nav nav-links col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.html" class="nav-link px-2"><i class="uil uil-estate"></i>Home</a></li>
            <li><a href="games.html" class="nav-link px-2"><i class="uil uil-club"></i>Games</a></li>
            <li><a href="#" class="nav-link px-2"><i class="uil uil-game-structure"></i>Leaderboard</a></li>
            <li><a href="#" class="nav-link px-2"><i class="uil uil-schedule"></i>Reservation</a></li>
            <li><a href="#" class="nav-link px-2"><i class="uil uil-info-circle"></i>About Us</a></li>
          </ul>
          <div class="col-md-3 text-end">
            <button type="button" class="btn loginBtnDesktop btn-dark me-2"><a href="" class="link-login-button text-decoration-none"><i class="uil uil-user"></i>Login</a></button>
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
                  <li><a href="index.html" class="nav-link px-2"><i class="uil uil-estate"></i>Home</a></li>
                  <li><a href="games.html" class="nav-link px-2"><i class="uil uil-club"></i>Games</a></li>
                  <li><a href="login.html" class="nav-link px-2"><i class="uil uil-game-structure"></i>Leaderboard</a></li>
                  <li><a href="#" class="nav-link px-2"><i class="uil uil-schedule"></i>Reservation</a></li>
                  <li><a href="#" class="nav-link px-2"><i class="uil uil-info-circle"></i>About Us</a></li>
                </ul>
                <div class="col-md-3 text-end btn-login-mobile-menu p-2">
                  <button type="button" class="btn btnLogin-mobile btn-dark me-2"><a href="" class="loginBtn-mobile text-decoration-none"><i class="uil uil-user"></i>Login</a></button>
              </div>
            </div>
        </header>
        <main class="wrapper_login">
            <h1 class="pt-4">Login</h1>
            <form>
                <div class="row mb-3 pt-4">
                  <label for="inputEmail" class="col-12 col-form-label">Email</label>  
                  <div class="col-12">
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter your email" required>
                  </div>
                </div>
                <div class="row mb-3 pt-4">
                  <label for="inputPassword3" class="col-12 col-form-label">Password</label>
                  <div class="col-12">
                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter your password" required>
                  </div>
                </div>
               
                
                <button type="submit" class="btn btn-lg btn-dark col-8" name="login">Sign in</button>
                
                <p>Don't have an account? <a href="#"> Register here</a></p>
              </form>
        </main>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
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
  </body>
</html>
