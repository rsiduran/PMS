<?php
  session_start();
  if (!isset($_SESSION['akonapinakamalakas'])) {
    header("Location: ../index.php");
    exit();
  } 
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

  <body>

    <body style="background-color: #E4E9F7;">

      <div class="sidebar close">
        <div class="logo-details">
          <i class="bx bx-shield-plus"></i>
          <span class="logo_name" style="white-space: nowrap;">Clinic PMS</span>
        </div>
        <ul class="nav-links">
          <li>
            <a href="#">
              <i class="bx bxs-home"></i>
              <span class="link_name">Home</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Home</a></li>
            </ul>
          </li>
          <li>
            <div class="iocn-link">
              <a href="#patient">
                <i class="bx bx-collection"></i>
                <span class="link_name">Patients</span>
              </a>
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#patient">Patients</a></li>
              <li><a href="patients.php">View Patients</a></li>
            </ul>
          </li>
          <li>
            <a href="#team">
              <i class="bx bxs-group"></i>
              <span class="link_name" style="white-space: nowrap;">Team Members</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#team">Team Members</a></li>
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
        </div>
        <div class="container-fluid">
          <!-- HOME -->
          <section id="home" class="section-padding">
            <div class="container">
              <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                  <div class="section-title">
                    <h1 class="display-4 fw-semibold">Patient Management System</h1>
                    <div class="line"></div>
                    <p>Our system is designed to help healthcare providers manage patient data and medical records.</p>
                  </div>
                </div>
              </div>
              <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 mb-5" data-aos="fade-down" data-aos-delay="50">
                  <img src="../assets/images/about.png" alt="">
                </div>
                <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
                  <h1>About the System</h1>
                  <p class="mt-3 mb-4">Our goal is to improve patient outcomes by creating user-friendly interfaces
                    that simplify the management of patient information and communication between healthcare
                    providers.</p>
                  <div class="d-flex pt-4 mb-3">
                    <div class="iconbox me-4">
                      <i class="ri-mail-send-fill"></i>
                    </div>
                    <div>
                      <h5>Improved Communication</h5>
                      <p>Our system promotes effective communication between healthcare providers, leading to
                        better collaboration and coordinated care!</p>
                    </div>
                  </div>
                  <div class="d-flex mb-3">
                    <div class="iconbox me-4">
                      <i class="ri-user-5-fill"></i>
                    </div>
                    <div>
                      <h5>Enhanced Patient Experience</h5>
                      <p>By using our patient management system, patients can enjoy a more seamless and
                        personalized healthcare experience!</p>
                    </div>
                  </div>
                  <div class="d-flex">
                    <div class="iconbox me-4">
                      <i class="ri-rocket-2-fill"></i>
                    </div>
                    <div>
                      <h5>Faster patient registration</h5>
                      <p>Our patient management system simplifies and accelerates the patient registration
                        process, allowing healthcare providers to collect and verify patient information quickly
                        and accurately!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- PATIENT -->
          <section id="patient" class="section-padding pt-3">
            <div class="container pt-5">
              <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                  <div class="section-title">
                    <h1 class="display-4 fw-semibold pt-5">Patient</h1>
                    <div class="line"></div>
                    <p>We record our patient in most easiest way</p>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <a class="btn btn-outline-success rounded" href="patients.php">View Patients</a>
                </div>
                <div class="col d-flex justify-content-center" data-aos="fade-down" data-aos-delay="50">
                  <img class="mt-5 mx-auto" src="../assets/images/patient-1.png" width="320px" alt="Staff Picture Cartoon">
                </div>
                
                <!-- 
                  <table class="table table-striped mt-5">
                    <thead>
                      <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>Email Address</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Zip Code</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                      </tr>
                    </tbody>
                  </table> 
                -->
                
                <div class="col d-flex justify-content-center" data-aos="fade-down" data-aos-delay="50">
                  <img class="mt-5 mx-auto" src="../assets/images/patient-2.png" width="320px" alt="Staff Picture Cartoon">
                </div>
              </div>
            </div>
        
          </section>

          <!-- TEAM -->
          <section id="team" class="section-padding pt-5">
            <div class="container pt-5">
              <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                  <div class="section-title">
                    <h1 class="display-4 fw-semibold">Team Members</h1>
                    <div class="line"></div>
                    <p>The team's goal is to develop and implement a patient management system that streamlines healthcare
                      processes, enhances patient care, and improves overall efficiency in the healthcare industry. </p>
                  </div>
                </div>
              </div>
              <div class="row g-4 text-center ">
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                  <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                      <img src="../assets/images/PRANADA.png" alt="">
                    </div>
                    <div class="team-member-content">
                      <h4 class="text-white">John Edison Pranada</h4>
                      <p class="mb-0 text-white">System Designer</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                  <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                      <img src="../assets/images/jacob.jpg" alt="">
                    </div>
                    <div class="team-member-content">
                      <h4 class="text-white">Jericho Jacob</h4>
                      <p class="mb-0 text-white">Software Developer</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                  <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                      <img src="../assets/images/madelo.png" alt="">
                    </div>
                    <div class="team-member-content">
                      <h4 class="text-white">Romeo Madelo</h4>
                      <p class="mb-0 text-white">Data Analyst</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                  <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                      <img src="../assets/images/Refil.png" alt="">
                    </div>
                    <div class="team-member-content">
                      <h4 class="text-white">Cristian Refil</h4>
                      <p class="mb-0 text-white">Software Engineer</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                  <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                      <img src="../assets/images/Baguio.png" alt="">
                    </div>
                    <div class="team-member-content">
                      <h4 class="text-white">Czarina Mae Baguio</h4>
                      <p class="mb-0 text-white">Web Designer</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                  <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                      <img src="../assets/images/duran.jpg" alt="">
                    </div>
                    <div class="team-member-content">
                      <h4 class="text-white">Rsidy Duran</h4>
                      <p class="mb-0 text-white">Web Developer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

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
        </div>
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
  </body>

</html>