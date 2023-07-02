<?php
  session_start();
  // Check if the "userid" session variable is set
  if (!isset($_SESSION['akonapinakamalakas'])) {
    // Redirect to the index.php file
    header("Location: ../index.php");
    exit();
  }
?>

<?php 
  include './hidden/conn.php';
  $id = $_GET['updateid'];
    $sql = "SELECT * FROM `patient` WHERE patient_id = $id";
      $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result); 
          $first_name = htmlentities($row['full_name']);
          $dob = htmlspecialchars($row['age']);
          $gender = htmlspecialchars($row['gender']);
          $phone_number = htmlspecialchars($row['phone_number']);
          $email_address = htmlspecialchars($row['email_address']);
          $home_address = htmlspecialchars($row['home_address']);
          $city = htmlspecialchars($row['city']);
          $zip = htmlspecialchars($row['zip']);
          $med_history = htmlspecialchars($row['med_history']);
          $allergies = htmlspecialchars($row['allergies']);
          $medications = htmlspecialchars($row['medications']);
          $cmc = htmlspecialchars($row['cmc']);
          $procedures_undergone = htmlspecialchars($row['procedures_undergone']);
          $lab_results = htmlspecialchars($row['lab_results']);
          $fmh = htmlspecialchars($row['fmh']);
          $social_history = htmlspecialchars($row['social_history']);
          $med_provider = htmlspecialchars($row['med_provider']);

  if(isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $phone_number = mysqli_real_escape_string($con, $_POST['phone_number']);
    $email_address = mysqli_real_escape_string($con, $_POST['email_address']);
    $home_address = mysqli_real_escape_string($con, $_POST['address']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $zip = mysqli_real_escape_string($con, $_POST['zip_code']);
    $med_history = mysqli_real_escape_string($con, $_POST['med_history']);
    $allergies = mysqli_real_escape_string($con, $_POST['allergies']);
    $medications = mysqli_real_escape_string($con, $_POST['medications']);
    $cmc = mysqli_real_escape_string($con, $_POST['cmc']);
    $procedures_undergone = mysqli_real_escape_string($con, $_POST['procedures_undergone']);
    $lab_results = mysqli_real_escape_string($con, $_POST['lab_results']);
    $fmh = mysqli_real_escape_string($con, $_POST['fmh']);
    $social_history = mysqli_real_escape_string($con, $_POST['social_history']);
    $med_provider = mysqli_real_escape_string($con, $_POST['med_provider']);

    $sql = "UPDATE `patient` SET patient_id = $id, full_name = '$first_name', age = '$dob', gender = '$gender', phone_number = '$phone_number', email_address = '$email_address', home_address = '$home_address', city = '$city', zip = '$zip', med_history = '$med_history',allergies = '$allergies', medications = '$medications', cmc = '$cmc', procedures_undergone = '$procedures_undergone', lab_results = '$lab_results', fmh = '$fmh', social_history = '$social_history', med_provider = '$med_provider' WHERE patient_id = $id";

    $result = mysqli_query($con, $sql);
    if($result) {
      // echo "<script>alert('Updated successfully.')</script>";
      header('location: patients.php');
    }
    else {
      die(mysqli_error($con));
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Patient Medical Records</title>
  <link rel = "icon" href = "../assets/images/title-logo.png" type = "image/x-icon" class="rounded-circle">
</head>

<body style="background-color: #E4E9F7;">
  <div class="container my-5">
    <a href="patients.php" class="btn btn-outline-secondary">Go back</a>
    <form action="#" method="post" autocomplete="off">
      <div class="col-12 text-center">
        <table class="table table-striped">
          <thead>
            <tr>
              <th colspan="2">Patient Information</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Full Name</td>
              <td class="col-8"><input value="<?php echo $first_name; ?>" type="text" name="first_name" class="form-control" require></td>
            </tr>
            <tr>
              <td>Age</td>
              <td><input value="<?php echo $dob; ?>" type="text" name="dob" class="form-control"></td>
            </tr>
            <tr>
              <td>Gender</td>
              <td>
              <select name="gender" class="form-select">
                <option value="Male" <?php if ($gender == 'Male') echo 'selected'; ?>>Male</option>
                <option value="Female" <?php if ($gender == 'Female') echo 'selected'; ?>>Female</option>
                <option value="Other" <?php if ($gender == 'Other') echo 'selected'; ?>>Other</option>
              </select>
              </td>
            </tr>
            <tr>
              <td>Phone Number (+63)</td>
              <td><input value="<?php echo $phone_number; ?>" type="number" name="phone_number" class="form-control"></td>
            </tr>
            <tr>
              <td>Email Address</td>
              <td><input value="<?php echo $email_address; ?>" type="email" name="email_address" class="form-control"></td>
            </tr>
            <tr>
              <td>Address</td>
              <td><input value="<?php echo $home_address; ?>" type="text" name="address" class="form-control"></td>
            </tr>
            <tr>
              <td>City</td>
              <td><input value="<?php echo $city; ?>" type="text" name="city" class="form-control"></td>
            </tr>
            <tr>
              <td>Zip Code</td>
              <td><input value="<?php echo $zip; ?>" type="text" name="zip_code" class="form-control"></td>
            </tr>
            <thead>
              <tr>
                <th colspan="2" style="padding: 20px;">Patient Medical Records</th>
              </tr>
            </thead>
            <tr>
              <td>Medical History/Symptoms or Illness</td>
              <td><input value="<?php echo $med_history; ?>" type="text" name="med_history" class="form-control"></td>
            </tr>
            <tr>
              <td>Allergies</td>
              <td><input value="<?php echo $allergies; ?>" type="text" name="allergies" class="form-control"></td>
            </tr>
            <tr>
              <td>Medications</td>
              <td><input value="<?php echo $medications; ?>" type="text" name="medications" class="form-control"></td>
            </tr>
            <tr>
              <td>Current Medical Condition</td>
              <td><input value="<?php echo $cmc; ?>" type="text" name="cmc" class="form-control"></td>
            </tr>
            <tr>
              <td>Procedures Undergone</td>
              <td><input value="<?php echo $procedures_undergone; ?>" type="text" name="procedures_undergone" class="form-control"></td>
            </tr>
            <tr>
              <td>Laboratory Results</td>
              <td><input value="<?php echo $lab_results; ?>" type="text" name="lab_results" class="form-control"></td>
            </tr>
            <tr>
              <td>Family Medical History</td>
              <td><input value="<?php echo $fmh; ?>" type="text" name="fmh" class="form-control"></td>
            </tr>
            <tr>
              <td>Social History (e.g., smoking, drinking, drug use)</td>
              <td><input value="<?php echo $social_history; ?>" type="text" name="social_history" class="form-control"></td>
            </tr>
            <tr>
              <td>Medical Provider</td>
              <td><input value="<?php echo $med_provider; ?>" type="text" name="med_provider" class="form-control"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="row d-flex my-4">
        <div class="col text-end">
          <button class="btn btn-outline-primary" name="submit">UPDATE</button>
        </div>
      </div>
    </form>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</body>

</html>