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
    <title>Brawnies Escape Rooms</title>
  </head>
  <body>
  
  <?php
        include "./navbar.php"; 
        ?>
   
    <form action="" method="post">
        <label> Reservation </label>
        <label for="surname">Surname: </label>
        <input type="text" name="surname" id="surname"/>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name"/>
        <label for="email">Email: </label>
        <input type="text" name="email" id="email"/>
        <label for="game">Game: </label>
        <select name="game" id="game">
          <option value="Selectgame">Select a game </option>
          <option value="Game1">Het verloren tijdmachine</option>
          <option value="Game2">Game2 </option>
          <option value="Game3">Game3 </option>
</select>
<label for="date">Date: </label>
<input type="date" name="date" id="date"/>
<label for="time">Time: </label>
<input type="time" id="time" name="time" min="10:00" max="18:00" />
<label for="players">Number of players: </label>
<input type="number" id="players" name="players" min="1" max ="10" placeholder="Enter the number of players"/>
<input type="submit" value="Book now!"/>
</form>
<?php
$dbConnect = new mysqli('auth-db779.hstgr.io', 'u893409859_GroepA', 'ZeMeAw123', 'u893409859_GroepA');
if($dbConnect->connect_error){
  die("Connection failed");
  exit();
}
$sql = $dbConnect->prepare("INSERT INTO reservatie(datum, time, numberOfPlayers, type, naam, voornaam)
VALUES (?, ?, ?, ?, ?, ?)");
$sql->bind_param($datum, $tijd, $numberOfPlayers, $type, $naam, $voornaam);
$datum = $_POST["date"];
$tijd = $_POST["time"];
$numberOfPlayers = $_POST["players"];
$type = $_POST["game"];
$naam = $_POST["surname"];
$voornaam = $_POST["name"];
$sql->execute();
echo "Thank you for reserving!";
mysqli_close($dbConnect);

?>


<?php
        include "./footer.php"; 
        ?>
    
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
