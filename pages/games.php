<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="..images/favicon.webp" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../styles/games.css">
    <title>Brawnies Escape Rooms</title>
  </head>
  <body>
  <?php
        include "./navbar.php"; 
        ?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <main id="wrapper">
        <h1 class="mb-5 mt-3">Online Games</h1>
    <div class="card mb-3 p-3" style="border:none;  background-color: #F9F9F9;
    color: #a5a5a5; border-radius: 15px;">
        <img src="../images/key.webp" class="card-img-top" alt="The Lost Key game">
        <div class="card-body">
          <h5 class="card-title">The Lost Key</h5>
          <p class="card-text">You find yourself in a mysterious office belonging to a renowned puzzle enthusiast, Mr. Enigma. Known for his love of brainteasers.</p>
          <a href="README.md" download><button type="button" class="btn btn-dark btn-lg">Download</button></a>


        </div>
      </div>

      <div class="card mb-3 p-3" style="border:none; background-color: #F9F9F9;
    color: #a5a5a5; border-radius: 15px;">
        <img src="../images/tijdmachine.webp" class="card-img-top" alt="Het Verloren Tijdmachine game">
        <div class="card-body">
          <h5 class="card-title">Het Verloren Tijdmachine</h5>
          <p class="card-text">Je bevindt je in het laboratorium van een briljante wetenschapper die een tijdmachine heeft uitgevonden. De wetenschapper is verdwenen. Het is aan jouw om de wetenschapper te vinden.</p>
          <a href="README.md" download><button type="button" class="btn btn-dark btn-lg">Download</button></a>

        </div>
      </div>

      <div class="card mb-3 p-3" style="border:none; background-color: #F9F9F9;
    color: #a5a5a5; border-radius: 15px;">
        <img src="../images/wally.webp" class="card-img-top" alt="Wally's Burger game">
        <div class="card-body">
          <h5 class="card-title">Wally's Hamburger</h5>
          <p class="card-text">Wally's Hamburger, Als kok wordt je ondervraagt door de inspectie. Hoe ga je daar uit geraken?</p>
          <a href="README.md" download><button type="button" class="btn btn-dark btn-lg">Download</button></a>


        </div>
      </div>

      <h1 class="mb-5">Live Games</h1>

      <div class="card mb-3 p-3 "style="border:none; background-color: #F9F9F9;
    color: #a5a5a5; border-radius: 15px;">
        <img src="../images/onlineGames.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Game 1</h5>
          <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. “</p>
          <a href="./reserve.php" ><button type="button" class="btn btn-dark btn-lg">Reserve</button></a>

        </div>
      </div>

      <div class="card mb-3 p-3"style="border:none; background-color: #F9F9F9;
    color: #a5a5a5; border-radius: 15px;">
        <img src="../images/onlineGames.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Game 2</h5>
          <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. “</p>
          <a href="./reserve.php" ><button type="button" class="btn btn-dark btn-lg">Reserve</button></a>

        </div>
      </div>

      <div class="card mb-3 p-3"style="border:none; background-color: #F9F9F9;
    color: #a5a5a5; border-radius: 15px;">
        <img src="../images/onlineGames.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Game 3</h5>
          <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. “</p>
          <a href="./reserve.php" ><button type="button" class="btn btn-dark btn-lg">Reserve</button></a>

        </div>
      </div>
    </main>
    <?php
        include "./footer.php"; 
        ?>
  </body>
  </body>
</html>
