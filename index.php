<?php
  session_start();
  if (isset($_SESSION['akonapinakamalakas'])) {
    header("Location: ./php/home.php");
    exit();
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Clinic Patient MGTSYS</title>
  <link rel = "icon" href = "./assets/images/title-logo.png" type = "image/x-icon" class="rounded-circle">
</head>
<body>
  
  <div class="container">

    <div class="img-container">
      <img src="./assets/images/Sys-Logo.png" alt="System-Logo">
    </div>

    <div class="error-container">
      <?php // in this code its checking whether an error occured after getting it 
        if(isset($_GET['error'])) { // it has two purpose 1 for sign in and 1 for sign up
          $error = $_GET['error']; 
          if($error === 'none') {  // if the error statement is equal to none it would create account
            echo "<script>alert('Account Created');</script>";
          }
          else { // otherwise its having its error with its value error that we get using $_GET to collect the data
            echo '<h2 style="width: 500px; font-weight: 500; font-family: sans-serif; padding: 10px 0; margin-bottom: 0; text-align: center; background-color: #e5e5e5; color: red;">Error: ' . $error . '</h2>';
          }
        }
      ?>
    </div>

    <div class="text-container" style="margin-top: -8px;">
      <h2>Welcome to <br>Clinic Patient MGTSYS<br>
        Log in with your account or Sign Up</h2>
    </div>

    <div class="btn-container">
      <button class="btn">Sign In</button>
      <button class="btn-sign-up">Sign Up</button>
    </div>

  </div>  
        <!-- sign in -->
  <form action="./php/hidden/signin.php" method="post">

    <div class="popup-container active">

      <h4>Log In</h4>
      <label for="username">Your Username</label>
      <input autocomplete="off" type="text" class="input" name="username" placeholder="Enter Your Username">
      <label for="password">Your Password</label>
      <div class="password-container">
        <input autocomplete="off" type="password" class="input" name="password" placeholder="Enter Your Password">
        <i class="icon-eye fa-solid fa-eye password-toggle"></i>
        <i class="icon-eye fa-solid fa-eye-slash password-toggle" style="display:none;"></i>
      </div>
      <button class="popup-btn" type="submit" name="submit">Sign In</button>
      <div class="close-icon">
        <i class="fas fa-times fa-2x"></i>
      </div>
  
    </div>

  </form>
        <!-- sign up -->
  <form action="./php/hidden/reg.php" method="post">

    <div class="popup-container-for-sign-up active">

      <h4>Sign Up</h4>
      <label for="email">Your Email</label>
      <input autocomplete="off" type="email" class="input" name="email" placeholder="Enter Your Email" >
      <label for="username">Your Username</label>
      <input autocomplete="off" type="text" class="input" name="username" placeholder="Enter Your Username" >
      <label for="password">Your Password</label>
      <input autocomplete="off" type="password" class="input" name="password" placeholder="Enter Your Password" >
      <label for="repeat-password">Repeat Password</label>
      <input autocomplete="off" type="password" class="input" name="repeat-password" placeholder="Repeat Your Password" >
      <button type="submit" class="popup-btn" name="submit">Sign Up</button>
      <div class="close-icon-sign-up">
        <i class="fas fa-times fa-2x"></i>
      </div>
  
    </div>

  </form>


  <script src="./assets/js/script.js"></script>

</body>
</html>