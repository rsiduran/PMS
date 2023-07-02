<?php
  include_once 'conn.php';
  
  //Validation
  function validateText($text) {
      if(preg_match('/^[a-zA-Z0-9]*$/', $text)) {
        return true;
      } else {
        return false;
      }
  }
  
  if (isset($_POST["submit"])) {
    
   
    if (validateText($_POST['username'])) {
      $username = htmlentities($_POST['username']);
    } else {
      header("Location: ../../index.php?error=wrong credentials");
      exit();
    }
    

    if (validateText($_POST['password'])) {
      $password = htmlentities($_POST['password']);
    } else {
      header("Location: ../../index.php?error=wrong credentials");
      exit();
    }
    
  
    if($_POST['password'] == $_POST['repeat-password']) { 
      $email = htmlentities($_POST['email']);

      $check = "SELECT * FROM reg WHERE reg_email='$email'";
      $check_result = mysqli_query($con, $check);
      if (mysqli_num_rows($check_result) > 0) {
        header("Location: ../../index.php?error=user is on the system");
        exit();
      }

      $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
      $query = "INSERT INTO reg (reg_username, reg_email, reg_password) VALUES ('$username','$email','$hashedPwd')";
      $result = mysqli_query($con, $query);
      if ($result == true) {
        header("Location: ../../index.php?error=none");
        exit();
      } else {
        header("Location: ../../index.php?error=database error");
        exit();
      }
    } else  {
      header("Location: ../../index.php?error=password not match");
      exit();
    }
  }
?>
