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
  <?php
        include "./navbar.php"; 
        ?>
        <main class="wrapper_register">
            <h1 class="pt-4">Register</h1>
            <form>
                <div class="row mb-3 pt-4">
                    <label for="inputFirstName" class="col-12 col-form-label">First Name</label>  
                    <div class="col-12">
                      <input type="text" class="form-control" id="inputFirstName" placeholder="Enter your First Name">
                    </div>
                  </div>
                  <div class="row mb-3 pt-4">
                    <label for="inputLastName" class="col-12 col-form-label">Last Name</label>  
                    <div class="col-12">
                      <input type="text" class="form-control" id="inputLastName" placeholder="Enter your Last Name">
                    </div>
                  </div>
                  
                <div class="row mb-3 pt-4">
                  <label for="inputEmail" class="col-12 col-form-label">Email</label>  
                  <div class="col-12">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email">
                  </div>
                </div>

                <div class="row mb-3 pt-4">
                  <label for="inputPassword" class="col-12 col-form-label">Password</label>
                  <div class="col-12">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Enter your password">
                  </div>
                </div>
                <div class="row mb-3 pt-4">
                    <label for="inputConfirmPassword" class="col-12 col-form-label">Confirm Password</label>
                    <div class="col-12">
                      <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Enter your password again">
                    </div>
                  </div>
                
                <button type="submit" class="btn btn-lg btn-dark col-8">Register</button>
                
                <p>Already have an account? <a href="#"> Login here</a></p>
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
