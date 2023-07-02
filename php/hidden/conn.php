<?php
  $con = mysqli_connect('localhost', 'root', '', 'patientMS');

  if (!$con) {
    die(mysqli_error($con));
  }
?>