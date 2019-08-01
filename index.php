<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CATguru</title>
  <link rel="icon shortcut" href="img/logo-cut.png  ">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
<?php include 'dbconfig.php'; ?>

  <!-- Start your project here-->
  <html lang="en" class="full-height">

  <!--Main Navigation-->
  <header>

    <nav class="navbar fixed-top navbar-expand-lg white">
      <!-- <a class="navbar-brand" href="#"><strong>Navbar</strong></a> -->
      <img src="img/logo.png" class="img-fluid p--lg-1 ml-lg-4" style="width: 180px" alt="">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="" style="display: contents" id="navbarSupportedContent">

        <ul class="navbar-nav nav-flex-icons ml-auto mr-lg-5">
          <li class="nav-item">
            <a class="nav-link text-dark" href="tel:1234567890">Contact:&nbsp;987654321</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="mailto:someone@example.com?Subject=Hello%20again"
              target="_blank">Email&nbsp;abc@abc.com</i></a>
          </li>

        </ul>
      </div>
    </nav>

    <div class=""
      style="background-image: url('img/bg2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-black-light">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 white-text text-center text-md-left mt-xl-5 pt-5 pt-lg-3 mb-5 animated fadeIn"
              data-wow-delay="0.3s">
              <h1 class="h1-responsive  mt-sm-5 text-white  pt-sm-5 mt-sm-50" style="font-weight:400">Let Your Dreams
                Take Flight </h1>
              <hr class="hr-light">
              <!-- <video class="video-fluid z-depth-1" autoplay loop controls muted>
                  <source src="https://www.youtube.com/embed/BZCkioGZKh0" type="video/mp4" />
                </video> -->
              <div class="embed-responsive embed-responsive-16by9 mt-5">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PAQcUA3-684"
                  allowfullscreen></iframe>
              </div>
              <!-- <a class="btn btn-white">Download</a>
                    <a class="btn btn-outline-white">Learn more</a> -->
            </div>
            <!--Grid column-->
            <div class="col-lg-2 d-none d-lg-block"></div>
            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mt-xl-5 pt-5 animated fadeIn" data-wow-delay="0.3s">
              <div class=" text-center pt-3 mt-lg-3 " style="    border-radius: 2px;background-color: #060501b5;">
                <h2 class=" text-white h3-responsive " style="">Register Now to Get Free Counseling</h2>
                <hr class="hr-cus">
                <?php

                if (isset($_POST['submit'])) {
                  $mysqltime = date_create()->format('Y-m-d H:i:s');
                  $sql = "INSERT INTO aviation_forms (username, number, email, qualification, city, date)
                  VALUES ('" . $_POST["username"] . "','" . $_POST["number"] . "','" . $_POST["email"] . "','" . $_POST["qualification"] . "','" . $_POST["city"] . "','" . $mysqltime . "')";

                  $result = mysqli_query($conn, $sql);
                  echo "<script type='text/javascript'>window.top.location='index.php';</script>";
                  exit;
                }

                ?>

                <form action="" method="post" data-wow-delay="0.3s"
                  class="text-center  pr-lg-3 pl-lg-3 pt-lg-1 pb-lg-3 p-3   ">

                  <!-- <p class="h4 mb-4 text-white">Sign in</p> -->

                  <!-- Email -->
                  <input type="text" id="" class="form-control mb-4 " name="username" placeholder="Your Name" required>

                  <!-- Password -->
                  <input type="text" id="" class="form-control mb-4" name="number" placeholder="Mobile Number" required>
                  <!-- Password -->
                  <input type="email" id="email" class="form-control mb-4" name="email" placeholder="E-Mail" required>
                  <!-- Password -->
                  <input type="text" id="" class="form-control mb-4" name="qualification" placeholder="Qualification"
                    required>
                  <!-- Password -->
                  <input type="text" id="" class="form-control mb-4" name="city" placeholder="City" required>
                  <!-- select -->
                  <!-- <select name="course" class="browser-default custom-select">
                          <option selected>Course Interested</option>
                          <option value="Airport Management">Airport Management
                            Course</option>
                          <option value="Hospitality & Retail">Hospitality & Retail
                            Course</option>
                          <option value="Business Professional">Business Professional
                            Course</option>
      
                        </select> -->
                  <!-- Sign in button -->
                  <button class="btn logo-bg-color btn-block my-4" value="send" name="submit"
                    type="submit">Register</button>

                </form>

                <!-- Default form login -->
                <!-- </div> -->
                <!-- <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/admin-new.png" alt="" class="img-fluid"> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>
  <!--Main Navigation-->

  <!--Main Layout-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">
            <div class="section-title mb-5 mt-lg-5 text-center">
                <!-- <p>what i can do</p> -->
                <h4>Features</h4>
              </div>
        </div>
      </div>
      <div class="row mb-2 animated fadeIn">
        <div class="col-10 offset-1">
              <div class="row text-center">
                 
                  <div class="col-md-4 col-12 m-md-0 my-3 p-md-4">
                    <div class="p-md-3 px-1 py-2  card card-hov card2">
                      <!-- <i class="fas fa-handshake fa-3x "></i> -->
                      <!-- <i class="fas fa-chart-area fa-3x red-text"></i> -->
                      <span><img src="img/icons/hours.png" class="img-fluid  " style="width:50px" alt=""></span>
                      
                      <h6 class=" my-4">120+ Hours of Training
                      </h6>
                    </div>
                  </div>
                  <div class="col-md-4 col-12 m-md-0 my-3  p-md-4 ">
                      <div class="p-md-3 px-1 py-2 card card-hov card2">
                      <span><img src="img/icons/training.png" class="img-fluid  " style="width:50px" alt=""></span>

                        <h6 class=" my-4">Expert Trainers with 15+ Years Experience
                        </h6>
                      </div>
                    </div>
                  <div class="col-md-4 col-12 m-md-0 my-3 p-md-4 ">
                    <div class="p-md-3 px-1 py-2 card card-hov card2">
                    <span><img src="img/icons/icon2.png" class="img-fluid  " style="width:50px" alt=""></span>

                      <h6 class=" my-4">100+ Practice Tests
                      </h6>
                    </div>
                  </div>
                </div>
        </div>
      </div>
      
      <div class="row mb-2">
        <div class="col-12 text-center d-flex  justify-content-center">
            <div class="p-3 fixed-card  card2">
              <!-- <i class="fas fa-handshake fa-3x "></i> -->
              <!-- <i class="fas fa-chart-area fa-3x red-text"></i> -->
              <h6 class="h5-responsive my-3">Features
              </h6>
          </div>
        </div>
      </div>
      <div class="row mb-2">
          <div class="col-10 offset-1">
                <div class="row text-center">
                    <div class="col-md-4 col-12 m-md-0 my-3  p-md-4 ">
                      <div class="p-md-3 py-2 px-1 card card-hov card2">
                      <span><img src="img/icons/video.png" class="img-fluid  " style="width:50px" alt=""></span>

                        <h6 class=" my-4">Video Archives
                        </h6>
                      </div>
                    </div>
                    <div class="col-md-4 col-12 m-md-0 my-3 p-md-4">
                      <div class="p-md-3 px-1 py-2  card card-hov card2">
                      <span><img src="img/icons/onthego.png" class="img-fluid  " style="width:50px" alt=""></span>

                        <h6 class=" my-4">Prep on the Go 24/7 App Access
                        </h6>
                      </div>
                    </div>
                    <div class="col-md-4 col-12 m-md-0 my-3 p-md-4 ">
                      <div class="p-md-3 px-1 py-2 card card-hov card2">
                      <span><img src="img/icons/interview.png" class="img-fluid  " style="width:50px" alt=""></span>

                        <h6 class=" my-4">Interview & Gd Guidence
                        </h6>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
    </div>
  </section>
  <!-- footer -->
  <!-- Footer -->
  <footer class="page-footer font-small bg-dark ">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="#!"> Catguru</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  <!--Main Layout-->
  <!-- Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>