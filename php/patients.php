<?php
  session_start();
  if (!isset($_SESSION['akonapinakamalakas'])) {
    header("Location: ../index.php");
    exit();
  } 
?>
<?php 
  include_once './hidden/conn.php'; // I include the connection to my php so we didnt repeat the same code
  if(isset($_POST['submit'])) { //in this code we collected the value of form that has been submitted and assign it to a variable
    $first_name = htmlspecialchars($_POST['first_name']);
    $age = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $email_address = htmlspecialchars($_POST['email_address']);
    $home_address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $zip = htmlspecialchars($_POST['zip_code']);
    $med_history =  htmlspecialchars($_POST['med_history']);
    $allergies = htmlspecialchars($_POST['allergies']);
    $medications = htmlspecialchars($_POST['medications']);
    $cmc = htmlspecialchars($_POST['cmc']);
    $procedures_undergone = htmlspecialchars($_POST['procedures_undergone']);
    $lab_results = htmlspecialchars($_POST['lab_results']);
    $fmh = htmlspecialchars($_POST['fmh']);
    $social_history = htmlspecialchars($_POST['social_history']);
    $med_provider = htmlspecialchars($_POST['med_provider']);

    //before we insert another data to database we need to check what is inputted in the database
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']); 

    //Then were checking if there is already patient with the same name and last name
    $check_query = "SELECT * FROM `patient` WHERE `full_name`='$first_name'";
    $check_result = mysqli_query($con, $check_query);

    if (mysqli_num_rows($check_result) > 0) { //so if the result is greater than 0 which means it has same name and last name its alerting that its already added
      echo "<script>alert('This patient is already added.')</script>";
    } 
    else { // otherwise its going to insert another data using this sql method of insert
    $sql = "INSERT INTO `patient` (`full_name`, `age`, `gender`, `phone_number`, `email_address`, `home_address`, `city`, `zip`, `med_history`, `allergies`, `medications`, `cmc`, `procedures_undergone`, `lab_results`, `fmh`, `social_history`, `med_provider`) VALUES ('$first_name', '$age', '$gender', '$phone_number', '$email_address', '$home_address', '$city', '$zip', '$med_history', '$allergies', '$medications', '$cmc', '$procedures_undergone', '$lab_results', '$fmh', '$social_history', '$med_provider')";

      $result=mysqli_query($con, $sql); //Then were getting its result if the result is gets its alerting that its succesfull
      if($result) {
        echo "<script>alert('Patient added successfully.')</script>";
      }
      else { //otherwise display the error why its error
        die(mysqli_error($con));
      }
    }
  }

?>
<?php 
  
  $query = "SELECT * FROM patient ORDER BY patient_id DESC";
  $result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!--========== REMIX ICONS ==========-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--========== FOR DATATABLE ==========-->
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/buttons.dataTables.min.css">
    <!--========== BOOTSTRAP CSS ==========-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel = "icon" href = "../assets/images/title-logo.png" type = "image/x-icon" class="rounded-circle">
    <title>Clinic Patient MGTSYS</title>
  </head>


    <body style="background-color: #E4E9F7;">

      <div class="sidebar close">
        <div class="logo-details">
          <i class="bx bx-shield-plus"></i>
          <span class="logo_name" style="white-space: nowrap;">Clinic PMS</span>
        </div>
        <ul class="nav-links">
          <li>
            <a href="home.php">
              <i class="bx bxs-home"></i>
              <span class="link_name">Home</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="home.php">Home</a></li>
            </ul>
          </li>
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class="bx bx-collection"></i>
                <span class="link_name">Patients</span>
              </a>
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#patient">Patients</a></li>
              <li><a href="#">View Patients</a></li>
            </ul>
          </li>
          <li>
            <div class="profile-details">
              <div class="profile-content">
                <!--<img src="image/profile.jpg" alt="profileImg">-->
              </div>
              <div class="name-job">
                <div class="profile_name" style="white-space: nowrap;">Username</div>
                <div class="job">Admin</div>
              </div>
              <a href="./hidden/logout.php"><i class="bx bx-log-out"></i></a>
            </div>
          </li>
        </ul>
      </div>

      <section class="home-section">
        <div class="home-content">
          <i class="bx bx-menu"></i>
          <span class="text">Patient Section</span>
        </div>
        <div class="container-fluid">
          <section id="patient" class="">
            <div class="container my-5">  
              <a class="btn btn-outline-secondary rounded" data-bs-toggle="modal" data-bs-target="#form">Add Record</a>
              <form action="#" method="post" autocomplete="off">
                <div class="modal modal-lg fade" id="form">
                  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2>Patient Form</h2>
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body">
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
                                <td class="col-8"><input type="text" name="first_name" class="form-control" required></td>
                              </tr>
                              <tr>
                                <td>age</td>
                                <td><input type="number" name="dob" class="form-control"></td>
                              </tr>
                              <tr>
                                <td>Gender</td>
                                <td>
                                  <select name="gender" class="form-select">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <td>Phone Number (+63)</td>
                                <td><input type="number" name="phone_number" class="form-control" required></td>
                              </tr>
                              <tr>
                                <td>Email Address</td>
                                <td><input type="email" name="email_address" class="form-control required"></td>
                              </tr>
                              <tr>
                                <td>Address</td>
                                <td><input type="text" name="address" class="form-control"></td>
                              </tr>
                              <tr>
                                <td>City</td>
                                <td><input type="text" name="city" class="form-control"></td>
                              </tr>
                              <tr>
                                <td>Zip Code</td>
                                <td><input type="text" name="zip_code" class="form-control"></td>
                              </tr>
                              <thead>
                                <tr>
                                  <th colspan="2" style="padding: 20px;">Patient Medical Records</th>
                                </tr>
                              </thead>
                              <tr>
                                <td>Medical History/Symptoms or Illness</td>
                                <td><input type="text" name="med_history" class="form-control"></td>
                              </tr>
                              <tr>
                                <td>Allergies</td>
                                <td><input type="text" name="allergies" class="form-control"></td>
                              </tr>
                              <tr>
                                <td>Medications</td>
                                <td><input type="text" name="medications" class="form-control"></td>
                              </tr>
                              <tr>
                                <td>Current Medical Condition</td>
                                <td><input type="text" name="cmc" class="form-control"></td>
                              </tr>
                              <tr>
                                <td>Procedures Undergone</td>
                                <td><input type="text" name="procedures_undergone" class="form-control"></td>
                              </tr>
                              <tr>
                                <td>Laboratory Results</td>
                                <td><input type="text" name="lab_results" class="form-control"></td>
                              </tr>
                              <tr>
                                <td>Family Medical History</td>
                                <td><input type="text" name="fmh" class="form-control"></td>
                              </tr>
                              <tr>
                                <td>Social History (e.g., smoking, drinking, drug use)</td>
                                <td><input type="text" name="social_history" class="form-control"></td>
                              </tr>
                              <tr>
                                <td>Medical Provider</td>
                                <td><input type="text" name="med_provider" class="form-control"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary rounded" type="submit" name="submit">CLICK TO ADD</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <br>
              <h3 class="text-center">Patient List Record</h3>  
              <br />  
              <div class="table-responsive">  
                <table id="maintable" class="display compact cell-border mb-2" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th class="fw-bold">Name</th>
                      <th class="fw-bold">Address</th>
                      <th class="fw-bold">Gender</th>
                      <th class="fw-bold">Contact No.</th>
                      <th class="fw-bold">Age</th>
                      <th class="fw-bold">Status</th>
                      <th class="fw-bold">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      while ($row = mysqli_fetch_array($result)) {
                      echo '
                          <tr>
                            <td>'. $row["full_name"] .'</td>
                            <td>'. $row["home_address"] .'</td>
                            <td>'. $row["gender"] .'</td>
                            <td>'. $row["phone_number"] .'</td>
                            <td>'. $row["age"] .'</td>
                            <td>
                              <a href="#" class="btn btn-danger" id="OnOff'.$row["patient_id"].'" onclick="toggleButton('.$row["patient_id"].')">Off</a>
                            </td>
                            <td>
                              <a href="record.php?recordid='.$row["patient_id"].'" class="ms-2 btn btn-secondary">Record</a>
                              <a href="update.php?updateid='.$row["patient_id"].'" class="btn btn-secondary">Edit</a>
                            </td>
                          </tr>
                      ';
                      }
                    ?>
                  </tbody>
                  <tfoot style="background-color: #c0c0c0; color: black; font-size: 0.9em; ">
                    <tr>
                      <td class="fw-bold">Name</td>
                      <td class="fw-bold">Address</td>
                      <td class="fw-bold">Gender</td>
                      <td class="fw-bold">Contact No.</td>
                      <td class="fw-bold">Age</td>
                      <td class="fw-bold">Status</td>
                      <td class="fw-bold">Action</td>
                    </tr>
                  </tfoot>
                </table>
              </div>  
            </div>  
          </section>
          <!-- FOOTER --><br><br><br><br>
          <footer class="bg-dark mt-5">
            <div class="footer-top">
              <div class="container">
                <div class="row gy-5">
                  <div class="col-lg-3 col-sm-6">
                    <h5 class="mb-0 text-white">Clinic - PMS</h5>
                    <div class="line"></div>
                    <p>Contact us to our socials account</p>
                    <div class="social-icons">
                      <a href="#"><i class="ri-facebook-fill"></i></a>
                      <a href="#"><i class="ri-instagram-fill"></i></a>
                      <a href="#"><i class="ri-twitter-fill"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <h5 class="mb-0 text-white">SERVICES</h5>
                    <div class="line"></div>
                    <ul>
                      <li><a href="patients.php">Patients list</a></li>
                      <li><a href="patients.php">Medical Records</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <h5 class="mb-0 text-white">ABOUT</h5>
                    <div class="line"></div>
                    <ul>
                      <li><a href="#home">System PMS</a></li>
                      <li><a href="#team">Team Members</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <h5 class="mb-0 text-white">CONTACT</h5>
                    <div class="line"></div>
                    <ul>
                      <li>Caloocan, UCC</li>
                      <li>09152987350</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-bottom">
              <div class="container">
                <div class="row g-4 justify-content-between">
                  <div class="col">
                    <p class="mb-0">©Copyright Clinic - PMS. All Rights Reserved</p>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </section>

      <script>
        function toggleButton(id) {
          var button = document.getElementById("OnOff"+id);
          if (button.classList.contains("btn-danger")) {
            button.classList.remove("btn-danger");
            button.classList.add("btn-success");
            button.innerHTML = "On";
            localStorage.setItem("buttonState"+id, "on");
          } else {
            button.classList.remove("btn-success");
            button.classList.add("btn-danger");
            button.innerHTML = "Off";
            localStorage.setItem("buttonState"+id, "off");
          }
        }

        // Check local storage to see if the button was on or off for each button
        <?php
          $query = "SELECT * FROM patient ORDER BY patient_id DESC";
          $result = mysqli_query($con, $query);
          while ($row = mysqli_fetch_array($result)) {
            $id = $row["patient_id"];
            echo 'var button'.$id.' = document.getElementById("OnOff'.$id.'");';
            echo 'var buttonState'.$id.' = localStorage.getItem("buttonState'.$id.'");';
            echo 'if (buttonState'.$id.' === "on") {';
            echo '    button'.$id.'.classList.remove("btn-danger");';
            echo '    button'.$id.'.classList.add("btn-success");';
            echo '    button'.$id.'.innerHTML = "On";';
            echo '}';
          }
        ?>
      </script>
      <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
          arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
          });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
          sidebar.classList.toggle("close");
        });
      </script>
      <!--========== BOOTSTRAP JS ==========-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script src="../assets/js/main.js"></script>
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> 
      <!--========== FOR DATATABLE ==========-->
      <script type="text/javascript" src="../assets/js/jquery-2.2.4.min.js"></script>
      <script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="../assets/js/dataTables.buttons.min.js"></script>
      <script type="text/javascript" src="../assets/js/jszip.min.js"></script>
      <script type="text/javascript" src="../assets/js/pdfmake.min.js"></script>
      <script type="text/javascript" src="../assets/js/vfs_fonts.js"></script>
      <script type="text/javascript" src="../assets/js/buttons.html5.min.js"></script>
      <script type="text/javascript" src="../assets/js/buttons.print.min.js"></script>
      <script type="text/javascript" src="../assets/js/app.js"></script>
      <script type="text/javascript" src="../assets/js/jquery.mark.min.js"></script>
      <script type="text/javascript" src="../assets/js/datatables.mark.js"></script>
      <script type="text/javascript" src="../assets/js/buttons.colVis.min.js"></script> 
    </body>
  

</html>