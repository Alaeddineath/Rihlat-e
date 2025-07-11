<?php 
include 'include/dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">


<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
/* Star icons */
.fa {
  display: inline-block;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* Full star icon */
.fa-star:before {
  content: '\f005';
}

/* Empty star icon */
.fa-star-o:before {
  content: '\f006';
}

/* Half star icon */
.fa-star-half-o:before {
  content: '\f123';
}

/* Rating container */
.content {
  margin-bottom: 10px;
}

/* Rating stars */
.content h3 {
  color: #FFD700; /* Change this to the desired color for the stars */
}

/* Comment content */
.content p {
  margin: 0;
}

/* Comment date */
.content h6 {
  color: #888;
  font-size: 12px;
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>trip details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v4.11.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between position-relative">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>RIHLAT-e</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <a href="signup.html" class="singup-btn">Sing Up <i class="bx bx-chevron-right"></i></a>
          <a href="login.html" class="singup-btn">Log in <i class="bx bx-chevron-right"></i></a>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



  <?php 
  
$travel_id=$_GET['id'];
$query= "select * from travel_plan where travel_id = $travel_id";
$result= mysqli_query($conn,$query);
$row= mysqli_fetch_assoc($result);
?>
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>trip details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="portfolio.html">trips</a></li>
            <li>trip details</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="<?php echo $row['image1_url'] ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo $row['image2_url'] ?>" alt="" >
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo $row['image3_url'] ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>trip information</h3>
              <ul>
                <li><strong>destination</strong>: <?php echo $row['destination'] ?></li>
                <li><strong>date</strong>: <?php echo $row['date'] ?></li>
                <li><strong>salary</strong>: <?php echo $row['price'] ?></li>
                <li><strong>guide phone number</strong>: <a href="">0561111112</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>more details about this trip</h2>
              <p>
              <?php echo $row['description'] ?> 
              </p>
            </div>
            <div class="portfolio-description">
              <button onclick="showAlert()">join us on this trip!</button>
              
              
              </p>
            </div>
          </div>

        </div>

      </div>
    </section ><!-- End Portfolio Details Section -->
    <h3>comments section</h3>
    <section id="portfolio-details" class="portfolio-details">
      <div class="portfolio-info">
    <form id="comment-form" method="POST">
  <div class="form-group">
    <label for="comment">Comment:</label> <br> <br>
    <textarea class="form-control" id="comment" name="comment"></textarea>
  </div> <br> 
  <div class="form-group">
    <label for="rating">Rating:</label> <br> <br> 
    <input type="number" class="form-control" id="rating" name="rating" min="1" max="5">
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="comment">Submit</button>
</form> </div></section>
  <div id="response"></div>

  <script>
$(function() {
              $('#comment-form').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                  url: 'process_comment.php?id=<?php echo $_GET['id'] ?>',
                  method: 'POST',
                  data: formData,
                  success: function(response) {
                    alert(response);
                  }
                });
              });
            });
  </script>
 <section>
    <h3>Check all the comments!!</h3>
    <div class="comments-section">
        <?php
        $query = "SELECT * FROM comment WHERE travel_plan_id=$travel_id";
        if ($result = mysqli_query($conn, $query)) {
            // Fetch one and one row
            while ($row = mysqli_fetch_row($result)) {
                $date = $row[1];
                $content = $row[3];
                $rating = $row[6];
                ?>
                <div class="content">
                    <h3><?php echo getRatingStars($rating); ?></h3>
                    <p><?php echo htmlspecialchars($content); ?> </p>
                    <h6><?php echo htmlspecialchars($date); ?></h6>
                </div>
                <?php
            }//end while
            // Free result set
            mysqli_free_result($result);
        }// end if

        function getRatingStars($rating) {
            $starRating = "";
            $fullStar = "<i class='fa fa-star'></i>";
            $emptyStar = "<i class='fa fa-star-o'></i>";

            // Determine the number of full stars
            $fullStars = floor($rating);

            // Add full stars
            for ($i = 0; $i < $fullStars; $i++) {
                $starRating .= $fullStar;
            }

            // Add half star if rating has decimal value of 0.5
            if ($rating - $fullStars == 0.5) {
                $starRating .= "<i class='fa fa-star-half-o'></i>";
            }

            // Add empty stars for remaining
            $emptyStars = 5 - ceil($rating);
            for ($i = 0; $i < $emptyStars; $i++) {
                $starRating .= $emptyStar;
            }

            return $starRating;
        }
        ?>
    </div>
</section>


  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>RIHALAT-e</h3>
              <p class="pb-3"><em>Your favourite touristic agency</em>
              </p>
              <p>
                Sidi Abdellah <br>
                NY 535022, Algiers<br><br>
                <strong>Phone: </strong>  +213 540444444<br>
                <strong>Email: </strong> RIHALAT-E@ensia.edu.dz<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Don't hesitate subscribing to our newsletter to never miss new trips opportunites. Stay tuned!</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>RIHLAT-e</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        Designed by <a href="https://github.com/ENSIA-AI/E-Tourism_Team_5.6.git">Team 5-6</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
function openPopup() {
  var popupWindow = window.open('', 'popupWindow', 'width=400,height=300');
  var content = `
    <html>
    <head>
    <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }
    
    label {
      display: block;
      margin-bottom: 10px;
    }
    
    input[type="radio"] {
      margin-right: 5px;
    }
    
    button {
      padding: 10px 20px;
      background-color: rgba(53, 114, 160, 0.8);
      color: white;
      border: none;
      cursor: pointer;
    }
    
    button:hover {
      background-color: blue;
    }
    </style>
    </head>
    <body>
      <form method="post">
        <label>Is the transport included?</label>
        <label><input type="radio" name="transport" value="yes" checked> Yes</label>
        <label><input type="radio" name="transport" value="no"> No</label>
        <br>
        <button type="submit" name="submit">Reserve Now</button>
      </form>
    </body>
    </html>
  `;
  popupWindow.document.open();
  popupWindow.document.write(content);
  popupWindow.document.close();
}

</script>
<script>
    function showAlert() {
      var content = `
        <form method="post">
          <label>Is the transport included?</label>
          <br>
          <label><input type="radio" name="transport" value="yes" checked> Yes</label>
          <br>
          <label><input type="radio" name="transport" value="no"> No</label>
          <br>
          <button type="submit" name="submit">Reserve Now</button>
        </form>
      `;
      window.alert(content);
    }
  </script>

</body>
</html>