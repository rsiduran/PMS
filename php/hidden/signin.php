<?php
  include_once 'conn.php';
  session_start();

  if (isset($_POST["submit"])) { 
    $username = htmlentities($_POST["username"]);
    $password = htmlentities($_POST["password"]);

    $query = "SELECT * FROM reg WHERE reg_username='$username'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['reg_password'];

        if (password_verify($password, $hashed_password)) {
            $_SESSION["akonapinakamalakas"] = $username;
            header("location: ../home.php");
            exit();
        } else {
            header("location: ../../index.php?error=wrong password");
            exit();
        }
    } else {
        header("location: ../../index.php?error=no user found");
        exit();
    }
  }
?>