<?php
//databankconnectie maken
//server, username, wachtwoord, databanknaam
$dbConnect = new mysqli('auth-db779.hstgr.io', 'u893409859_GroepA', 'ZeMeAw123', 'u893409859_GroepA');

//fouten opvangen
if($dbConnect->connect_error){
    die("Connection failed");
    exit();
}

$sql = $dbConnect->prepare("INSERT INTO gebruikers(voornaam, naam, email, wachtwoord)
VALUES (?, ?, ?, ?)");
//binden parameters
$sql->bind_param("ssss", $voornaam, $naam, $email, $wachtwoord);

if (isset($_POST['register'])){

  $wachtwoord = trim($_POST['password']);
  $wachtwoord_conf = trim($_POST['confirm_password']);

  if ($wachtwoord == $wachtwoord_conf){
    $email = trim($_POST['email']);
    $voornaam = trim($_POST['voornaam']);
    $naam = trim($_POST['naam']);

    $sql->execute();

    echo '<script type="text/javascript">
           alert("Jouw gegvens zijn geregistreerd! Ga naar login om in te loggen"); 
    </script>'; 
    header("Location: ./games.php");

} 
}

//uitvoeren sql


//afsluiten connectie
mysqli_close($dbConnect);
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
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/register.css">
    <title>Brawnies Escape Rooms</title>
  </head>
  <body>
  <header class="navbar d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
          <div class="col-md-3 mb-2 mb-md-0">
            <a href="../index.html" class="d-inline-flex link-body-emphasis text-decoration-none">
              <img class="bi" width="100" height="60" role="img" aria-label="Bootstrap" src="../images/logo.webp"/>
            </a>
          </div>
   
          <ul class="nav nav-links col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="../index.html" class="nav-link px-2"><i class="uil uil-estate"></i>Home</a></li>
            <li><a href="./games.html" class="nav-link px-2"><i class="uil uil-club"></i>Games</a></li>
            <li><a href="./leaderboard.php" class="nav-link px-2"><i class="uil uil-game-structure"></i>Leaderboard</a></li>
            <li><a href="./reservation.php" class="nav-link px-2"><i class="uil uil-schedule"></i>Reservation</a></li>
            <li><a href="./aboutUs.php" class="nav-link px-2"><i class="uil uil-info-circle"></i>About Us</a></li>
          </ul>
          <div class="col-md-3 text-end">
            
            
            <button type="button" class="btn loginBtnDesktop btn-dark me-2"><a href="./login.php" class="link-login-button text-decoration-none"><i class="uil uil-user"></i>Login</a></button>
            
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
                <li><a href="../index.html" class="nav-link px-2"><i class="uil uil-estate"></i>Home</a></li>
            <li><a href="../games.html" class="nav-link px-2"><i class="uil uil-club"></i>Games</a></li>
            <li><a href="./leaderboard.php" class="nav-link px-2"><i class="uil uil-game-structure"></i>Leaderboard</a></li>
            <li><a href="./reservation.php" class="nav-link px-2"><i class="uil uil-schedule"></i>Reservation</a></li>
            <li><a href="./aboutUs.php" class="nav-link px-2"><i class="uil uil-info-circle"></i>About Us</a></li>
                </ul>
                
                <button type="button" class="btn btnLogin-mobile btn-dark me-2"><a href="./login.php" class="loginBtn-mobile text-decoration-none"><i class="uil uil-user"></i>Login</a></button>
                
              </div>
            </div>
        </header>
        <main class="wrapper_register">
            <h1 class="pt-4">Register</h1>
            <form method="post" action="">
                <div class="row mb-3 pt-4">
                    <label for="voornaam" class="col-12 col-form-label">First Name</label>  
                    <div class="col-12">
                      <input type="text" class="form-control" id="inputFirstName" name="voornaam" maxlength="69" placeholder="Enter your First Name">
                    </div>
                  </div>
                  <div class="row mb-3 pt-4">
                    <label for="naam" class="col-12 col-form-label">Last Name</label>  
                    <div class="col-12">
                      <input type="text" class="form-control" id="inputLastName" name="naam" maxlength="69" placeholder="Enter your Last Name">
                    </div>
                  </div>
                  
                <div class="row mb-3 pt-4">
                  <label for="email" class="col-12 col-form-label">Email</label>  
                  <div class="col-12">
                    <input type="email" class="form-control" id="inputEmail" name="email" maxlength="69" placeholder="Enter your email">
                  </div>
                </div>

                <div class="row mb-3 pt-4">
                  <label for="password" class="col-12 col-form-label">Password</label>
                  <div class="col-12">
                    <input type="password" class="form-control" id="inputPassword" maxlength="69" name="password" placeholder="Enter your password">
                  </div>
                </div>
                <div class="row mb-3 pt-4">
                    <label for="confirm_password" class="col-12 col-form-label">Confirm Password</label>
                    <div class="col-12">
                      <input type="password" class="form-control" id="inputConfirmPassword" maxlength="69" name="confirm_password"placeholder="Enter your password again">
                    </div>
                  </div>
                
                <button type="submit" class="btn btn-lg btn-dark col-8" name="register">Register</button>
                
                <p>Already have an account? <a href="./login.php"> Login here</a></p>
              </form>
        </main>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <?php
        include "./footer.php"; 
        ?>
  </body>
</html>
