<?php
//databankconnectie maken
//server, username, wachtwoord, databanknaam
$dbConnect = new mysqli('auth-db779.hstgr.io', 'u893409859_GroepA', 'ZeMeAw123', 'u893409859_GroepA');

//fouten opvangen
if($dbConnect->connect_error){
    die("Connection failed");
    exit();
}

if(isset($_POST["filter"])){
  if(isset($_POST["option"])) {
    $order = $_POST["option"];

    if($order == "Score Decending"){
      $resultaat = AsscendingOrDescengingOrder("DESC");
      
    }
    else{
      $resultaat = AsscendingOrDescengingOrder("ASC");
    }
  }
  else {
  }
  $resultaat = AsscendingOrDescengingOrder("ASC");
}
else{
  $resultaat = AsscendingOrDescengingOrder("DESC");
}
function AsscendingOrDescengingOrder($order){
  $dbConnect = new mysqli('auth-db779.hstgr.io', 'u893409859_GroepA', 'ZeMeAw123', 'u893409859_GroepA');
  //sql-statement
$sql = "SELECT naam, voornaam, score, spel 
FROM gebruikers g, scorebord s 
WHERE g.gebruikerid = s.gebruikerid 
ORDER BY s.score DESC;";

//query uitvoeren => in de variabele resultaat gestoken
return $resultaat = $dbConnect->query($sql);
  
}
function RoomOrder($room){
  $dbConnect = new mysqli('auth-db779.hstgr.io', 'u893409859_GroepA', 'ZeMeAw123', 'u893409859_GroepA');
  //sql-statement
$sql = "SELECT naam, voornaam, score, spel 
FROM gebruikers g, scorebord s 
WHERE g.gebruikerid = s.gebruikerid AND spel = '$room'
ORDER BY s.score DEC;";

//query uitvoeren => in de variabele resultaat gestoken
return $resultaat = $dbConnect->query($sql);
  
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
    <link rel="stylesheet" href="../styles/leaderboard.css">
    <title>Brawnies Escape Rooms</title>
  </head>
  <body>
  <?php
        include "./navbar.php"; 
        ?>
        <main>
          <div class="leaderboard">
            <h1>Game Ranks</h1>
            <form class="form" action="leaderboard.php" method="post">
            <div class="filters">
              <div class="rooms">
                <select name="rooms" id="rooms">
                <option name="none" id="none">All Rooms</option>
                  <option name="thebedroom" id="thebedroom">The Bedroom</option>
                  <option name="hetverlorenmachine" id="hetverlorenmachine">Het Verloren Tijdmachine</option>
                  <option name="wally'shamburger" id="wally'shamburger">Wally's Hamburger</option>
                </select>
              </div>
              <div class="filter">
                <select name="option" id="option">
                  <option name="asscending" id="asscending">Score Asscending</option>
                  <option name="descending" id="descending">Score Decending</option>
                </select>
              </div>
              <div class="refresh"><input type="submit" value="filter" name="filter"></div>
            </div>
            <table>
              <thead>
                  <tr>
                    <th>Rank</th>
                    <th>Speler</th>
                    <th>Score</th>
                    <th>Spel</th>
                  </tr>
              </thead>
              <tbody>
              <?php 
              //controleren of er rijen zijn in ons resultaat
              if($resultaat->num_rows>0){
                  $rank = 1;
                //tonen van de resultaatarray => while lus
                    while ($rij = mysqli_fetch_assoc($resultaat)){
                      
                      ?>
                <tr>
                  <?php
                  echo "<td>".$rank."</td>";
                  echo "<td>".$rij["naam"]." ".$rij["voornaam"]. "</td>";
                  echo "<td>".$rij["score"]."</td>";
                  echo "<td>".$rij["spel"]."</td>";
                  ?>
                </tr>
                <?php
                           $rank++;
                        }
                        while ($rij = mysqli_fetch_array($resultaat)){
                            echo "scoreid.:".$rij[0]." - ".$rij[1]." ".$rij[2]."<br>";
                        }
                    } else {
                        echo "Er zijn geen overeenkomstige resultaten gevonden";
                    }
                                
              
              ?>
               
              </tbody>
            </table>
          </div>
        </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


<?php
//resultaatquery leegmaken en connectie sluiten
mysqli_free_result($resultaat);
mysqli_close($dbConnect);
?>