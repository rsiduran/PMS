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
  $id = $_GET['recordid'];
    $sql = "SELECT * FROM `patient` WHERE patient_id = $id";
      $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result); 
          $first_name = htmlentities($row['full_name']);
          $med_history = htmlspecialchars($row['med_history']);
          $allergies = htmlspecialchars($row['allergies']);
          $medications = htmlspecialchars($row['medications']);
          $cmc = htmlspecialchars($row['cmc']);
          $procedures_undergone = htmlspecialchars($row['procedures_undergone']);
          $lab_results = htmlspecialchars($row['lab_results']);
          $fmh = htmlspecialchars($row['fmh']);
          $social_history = htmlspecialchars($row['social_history']);
          $med_provider = htmlspecialchars($row['med_provider']);
          
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
            <a href="../index.php">
              <i class="bx bxs-home"></i>
              <span class="link_name">Home</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="../index.php">Home</a></li>
            </ul>
          </li>
          <li>
            <div class="iocn-link">
              <a href="patients.php">
                <i class="bx bx-collection"></i>
                <span class="link_name">Patients</span>
              </a>
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="patients.php">Patients</a></li>
              <li><a href="patients.php">View Patients</a></li>
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
          <span class="text">Management System</span>
        </div><br><br><br><br><br>
        <div class="container mt-5">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Medical Information</h5>
                  <p class="card-text"><strong>NAME:</strong> <?php echo $first_name ?></p>
                  <p class="card-text"><strong>Symptoms or Illness:</strong> <?php echo $med_history ?></p>
                  <p class="card-text"><strong>Allergies:</strong> <?php echo $allergies ?></p>
                  <p class="card-text"><strong>Medications:</strong> <?php echo $medications ?></p>
                  <p class="card-text"><strong>Current Medical Condition:</strong> <?php echo $cmc ?></p>
                  <p class="card-text"><strong>Procedures Undergone:</strong> <?php echo $procedures_undergone ?></p>
                  <p class="card-text"><strong>Laboratory Results:</strong> <?php echo $lab_results ?></p>
                  <p class="card-text"><strong>Family Medical History:</strong> <?php echo $fmh ?></p>
                  <p class="card-text"><strong>Social History (e.g., smoking, drinking, drug use):</strong> <?php echo $social_history ?></p>
                  <p class="card-text"><strong>Medical Provider:</strong> <?php echo $med_provider ?></p>
                  <button class="btn btn-primary mt-3" onclick="window.print()">Print</button>
                </div>
              </div>
            </div>
          </div>
        </div><br><br><br><br><br><br><br><br><br><br><br>
          <!-- FOOTER -->
        <footer class="bg-dark">
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
      </section>
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
    </body>

</html>