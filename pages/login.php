<?php
//databankconnectie maken
//server, username, wachtwoord, databanknaam
$dbConnect = new mysqli('auth-db779.hstgr.io', 'u893409859_GroepA', 'ZeMeAw123', 'u893409859_GroepA');

//fouten opvangen
if($dbConnect->connect_error){
    die("Connection failed");
    exit();
}
//sql-statement
$sql = $dbConnect->prepare ("SELECT email, wachtwoord FROM gebruikers WHERE email = ? AND wachtwoord = ?;");
//parameters verbinden met een variabele
$sql->bind_param("ss", $email, $password);

if (isset($_POST['login'])){
	//waarden in de variabelen invullen
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
	//query uitvoeren => in de variabele resultaat gestoken
  if($sql->execute()){
	$resultaat = $sql->get_result();
  
	//controleren of er rijen zijn in ons resultaat
	if($resultaat->num_rows>0){
    $row = $resultaat->fetch_assoc();
    $_SESSION['voornaam'] = $row['voornaam'];
     

    header("Location: ./navbar.php");
    
    die();
    
	} else {
    echo '<script type="text/javascript">
           alert("Foute email/password combinatie"); 
    </script>'; 
	}
}

}
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
    <link rel="stylesheet" href="../styles/login.css">
    <title>Brawnies Escape Rooms</title>
  </head>
  <body>
        <?php
        include "./navbar.php"; 
        ?>
        <main class="wrapper_login">
            <h1 class="pt-4">Login</h1>
            <form method="post" action="">
                <div class="row mb-3 pt-4">
                  <label for="email" class="col-12 col-form-label">Email</label>  
                  <div class="col-12">
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter your email" required>
                  </div>
                </div>
                <div class="row mb-3 pt-4">
                  <label for="password" class="col-12 col-form-label">Password</label>
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
    <?php
        include "./footer.php"; 
        ?>
  </body>
</html>
