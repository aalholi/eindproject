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
$sql = "SELECT naam, voornaam, score, spel 
FROM gebruikers g, scorebord s 
WHERE g.gebruikerid = s.gebruikerid 
ORDER BY s.score ASC;";

//query uitvoeren => in de variabele resultaat gestoken
$resultaat = $dbConnect->query($sql);
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
    <title>Brawnies Escape Rooms</title>
  </head>
  <body>
  <?php
        include "./navbar.php"; 
        ?>
        <main>
            <section id="hero-img">
                <img src="../images/leaderbord.webp" alt="photo">
            </section>
            <section id="leaderboard">
             <div class="container">
  <div class="table-responsive small">
        <table class="table table-dark table-hover">
              <thead>
                <tr>
                  <th scope="col">Rank</th>
                  <th scope="col">Naam</th>
                  <th scope="col">Voornaam</th>
                  <th scope="col">Score</th>
                  <th scope="col">Spel</th>
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
                  echo "<td>".$rij["naam"]."</td>";
                  echo "<td>".$rij["voornaam"]."</td>";
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
 </div>        
            </section>
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


<?php
//resultaatquery leegmaken en connectie sluiten
mysqli_free_result($resultaat);
mysqli_close($dbConnect);
?>