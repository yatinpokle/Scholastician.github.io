<!doctype html>
<html lang="en">

<head>

    <script type="text/javascript">
    function checkPasswordSame(form) {
              password1 = form.password.value;
              password2 = form.cpassword.value;

              // If password not entered

              // If Not same return False.
              if (password1 != password2) {
                  alert ("\nPassword did not match: Please try again...")
                  return false;
              }
              return true;


          }

    </script>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>Student Registration</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.jpg" type="image/jpg">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    <style media="screen">
    .select-css {
      width: 100%;
  height: 55px;
  border-radius: 5px;
  border: 1px solid #ddd;
  padding: 0 25px;
  font-size: 16px;
  color: #8a8fa3;
    }
    .select-css::-ms-expand {
      display: none;
    }
    .select-css:hover {
      border-color: #888;
    }
    .select-css:focus {
      border-color: #aaa;
      box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
      box-shadow: 0 0 0 3px -moz-mac-focusring;
      color: #222;
      outline: none;
    }
    .select-css option {
    font-weight:normal;
}
    </style>
</head>
<body>
    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== PRELOADER ENDS START ======-->
    <!--====== HEADER PART START ======-->
    <header id="home" class="header-area">
        <div class="navigation fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.php">
                                <img src="assets/images/logo1.png" alt="Logo">
                            </a> <!-- Logo -->
                            <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation -->
    </header>
    <section id="contact" class="contact-area pt-125 pb-130 white-bg">
        <div class="container">
            <div class="row justify-content-center mt-50">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">Class Selection</h2>
                        <p>If you would like to begin tutoring in multple classes, please fill this form out again.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form pt-30">
                      <?php if (isset($name_error)) {

                        echo "<script type='text/javascript'>alert('username taken');</script>";
                      } ?>
                        <form id="contact-form" action="insertMatching.php" onsubmit="">

                            <h5 class="about-title">Which Class/Subject Would You Like Tutoring In?</h5>
                            <p> Unless otherwise specified, each class is suited for AP, PAP/Honors, or On-Level</p>
                            <select  class = "select-css" name="class-select" required>
                              <option value="satclass">SAT Tutoring</option>
                              <option value="actclass">ACT Tutoring</option>
                              <option value="compsci">Computer Science</option>
                              <option disabled>---Math---</option>
                              <option value="Algebra1">Algebra 1</option>
                              <option value="Algebra2">Algebra 2</option>
                              <option value="Pre-Calc">Pre-Calculus</option>
                              <option value="APCalcAB">AP Calculus AB</option>
                              <option value="APCalcBC">AP Calculus BC</option>
                              <option disabled>---Science---</option>
                              <option value="bio">Biology</option>
                              <option value="chem">Chemistry</option>
                              <option value="Physics1">Physics 1</option>
                              <option value="Physics2">Physics 2</option>
                              <option value="PhysicsC">Physics C</option>
                              <option value="apes">AP Environmental Science</option>
                              <option disabled>---History---</option>
                              <option value="aphug">AP Human Geography</option>
                              <option value="whap">World History</option>
                              <option value="apush">US History</option>
                              <option value="apgov">Government</option>
                              <option value="apecon">Economy</option>
                              <option disabled>---English---</option>
                              <option value="english1">English 1</option>
                              <option value="english2">English 2</option>
                              <option value="english3">English 3</option>
                              <option value="english4">English 4</option>
                              <option value="aplang">AP English Language</option>
                              <option value="aplit">AP English Literature</option>
                            </select>

                          <div class="single-form">
                            <h5 class="about-title">What topic(s) do you need help with?</h5>
                            <p>Maximum 200 Characters</p>
                              <textarea name="topics" maxlength="200"></textarea>
                          </div>
                          <div class="single-form">
                            <h5 class="about-title">What times best suit you?</h5>
                            <p>We cannot guarantee that you will recieve a tutor available at exactly these times.</p>
                              <textarea name="times" maxlength="200"></textarea>
                          </div>

                            <br>

                                <button class="main-btn" type="submit">Submit</button>
                            </div> <!-- single form -->
                        </form>
                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== FOOTER PART START ======-->
    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-130 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="footer-content text-center">
                          <a href="index.php" style = "color: white; font-size: 30px; ">
                              SCHOLASTICIAN
                          </a>
                            <p class="mt-">Empowering Students for a Better Tomorrow</p>
                            <ul>
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-pinterest"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        <div class="footer-copyright pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text text-center pt-20">
                            <p>Copyright © Scholastician 2020.</p>
                        </div> <!-- copyright text -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
    </footer>
    <!--====== FOOTER PART ENDS ======-->
    <!--====== BACK TOP TOP PART START ======-->
    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
    <!--====== BACK TOP TOP PART ENDS ======-->
    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--====== Parallax js ======-->
    <script src="assets/js/parallax.min.js"></script>
    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--====== Appear js ======-->
    <script src="assets/js/jquery.appear.min.js"></script>
    <!--====== Scrolling js ======-->
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src"assets/js/passwordValidation.js"></script>
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
</body>
</html>
