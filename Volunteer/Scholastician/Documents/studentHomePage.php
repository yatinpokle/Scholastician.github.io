<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['student'] != '1')
{
  echo "<script type='text/javascript'>alert('Not Logged In');</script>";
  header("Location: index.php");
  die;
}
 ?>
 <!doctype html>
 <html lang="en">

 <head>

     <!--====== Required meta tags ======-->
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!--====== Title ======-->
     <title>Student Home Page</title>
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

     <style>
         #helloStudent {

             margin-bottom: 50px;


         }
         #matched {

             color: #8533ff;
         }
         #unmatched {

             color: #999999;
         }
         .boxes {

             width: 50px;
         }
         #hi {
             padding: 5em;
             margin-right: 10px;
             max-width: 100em;


         }
         .background {

         background-color: gainsboro;
             padding-bottom: 2em;
         }
         #intro {
             font-size: 2em;
             padding: 2em;
         }


         #split {

             margin-top: 5em;
         }
         #call-to-action {

             margin-bottom: 5em;
         }
         .title {

             margin-top: 2em;
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
                                 <img src="assets/images/logo.png" alt="Logo">
                             </a> <!-- Logo -->
                             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                 <span class="toggler-icon"></span>
                                 <span class="toggler-icon"></span>
                                 <span class="toggler-icon"></span>
                             </button>

                             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                 <ul class="navbar-nav ml-auto">
                                     <li class="nav-item active"><a class="page-scroll" href="#helloStudent">Status</a></li>
                                     <li class="nav-item"><a class="page-scroll" href="#helloTwo">Find Tutor</a></li>
                                     <li class="nav-item"><a class="page-scroll" href="#helloThree">Process</a></li>
                                     <li class="nav-item"><a class="" href="logout.php">Logout</a></li>
                                 </ul>
                             </div> <!-- navbar collapse -->
                         </nav> <!-- navbar -->
                     </div>
                 </div> <!-- row -->
             </div> <!-- container -->
         </div> <!-- navigation -->
     </header>
     <!--====== HEADER PART ENDS ======-->
     <!--====== ABOUT PART START ======-->
     <section id="student" class="services-area gray-bg pt-150 pb-130">
         <div class="container">
             <div class="row justify-content-center" id = "helloStudent">
                 <div class="col-lg-8">
                     <div class="section-title text-center pb-30" id = "positionOne">
                         <?php
                         $link = mysqli_connect("localhost", "nihal", "12345", "account");

                         // Check connection
                         if($link === false){
                             die("ERROR: Could not connect. " . mysqli_connect_error());
                         }
                         else
                         {
                         }
                         $uname = $_SESSION['username'];
                         $getInfo = "SELECT Name FROM userinfo WHERE Username = '$uname'";
                         $query = mysqli_query($link, $getInfo);

                         $row = mysqli_fetch_array($query);
                           $name = $row['Name'];
                         echo "<h2 class=\"title\" > Hello $name </h2>";
                          ?>


                         <!-- NIHAL&PAVAN :::::: can you do php stuff to show the person's status if they are matched or not? you can delete it if you dont want to do that work -->


                         <h3>Your Status | <span id = "unmatched">Unmatched</span><span id = "matched">Matched</span></h3>
                         <p ><br>Students should register and login here for our matching program. Once you are paired with a tutor, we will send one email to both of you, so that you can communicate with each other. Please contact us via email or through the contact page on our website if you have any issues during your <span id = "helloTwo">tutoring session.</span> </p>


                     </div> <!-- section title -->
                 </div>
             </div> <!-- row -->
             <div class = "background">
                 <div class="row justify-content-center">
                     <h5 id = "intro">Ready for a tutor?</h5>


                 </div> <!-- row -->
                 <div class="row justify-content-center">
                     <h5 id = "hi" class="col-md-6 col-sm-8">Before matching, if you have any questions over our program, feel free to contact us or look over the details through the icon to the right.</h5>
                 <div class="col-lg-4 col-md-6 col-sm-8">
                     <div class="single-service text-center mt-30">
                         <div class="service-icon">
                             <i class="lni-website"></i>
                         </div>
                         <div class="service-content">
                             <h4 class="service-title"><a href="readMoreStudents.html">Read More</a></h4>
                             <p>Want to learn more about registering as a student?</p>
                         </div>
                     </div> <!-- single service -->
                 </div>

                 </div> <!-- row -->


                 <div class  = "background">
                 <div class="row justify-content-center" >
                 <h5 id = "hi" class="col-md-6 col-sm-8">Now for the most important step. If you are ready to start looking for a tutor, please click on the icon on the right. You will be prompted to enter some information to begin the matching process.</h5>
                 <div class="col-lg-4 col-md-6 col-sm-8">
                     <div class="single-service text-center mt-30">
                         <div class="service-icon">
                             <i class="lni lni-search"></i>
                         </div>
                         <div class="service-content">
                             <h4 class="service-title"><a href="matching.php">Find a Tutor for a class</a></h4>
                             <p id = "helloThree">You will recieve an email upon being matched.</p>
                         </div>
                     </div> <!-- single service -->
                 </div>
                     </div>
                 </div>
         </div>





             <!-- now what? -->

            <div id = "split">
                 <div class = "background">
                     <div class="row justify-content-center">
                         <h5 id = "intro">What's next?</h5>


                     </div> <!-- row -->
                     <div class="row justify-content-center">
                         <div class="col-lg-4 col-md-6 col-sm-8">
                         <div class="single-service text-center mt-30">
                             <div class="service-icon">
                                 <i class="lni lni-timer"></i>
                             </div>
                             <div class="service-content">
                                 <h4 class="service-title">Algorithms At Work</h4>
                                 <p><br>To find a match, it may take time. Just be patient!</p>
                             </div>
                         </div> <!-- single service -->
                     </div>
                         <h5 id = "hi" class="col-md-6 col-sm-8">Once you start your search for a tutor, that's it! Our computers will be working on pairing you with a qualified tutor.</h5>

                     </div> <!-- row -->
                 <div class="row justify-content-center">
                     <div class="col-lg-4 col-md-6 col-sm-8">
                         <div class="single-service text-center mt-30">
                             <div class="service-icon">
                                 <i class="lni lni-envelope"></i>
                             </div>
                             <div class="service-content">
                                 <h4 class="service-title">Look Out For an Email</h4>
                                 <p>Change your subjects for different tutors.</p>
                             </div>
                         </div> <!-- single service -->
                     </div>
                     <h5 id = "hi" class="col-md-6 col-sm-8">Once our computer finds a match, we will send you an email with you and your tutor's details. Verify if you got an email by visiting this page and viewing your status. </h5>


                 </div> <!-- row -->

                     <div class  = "background">
                     <div class="row justify-content-center" >
                         <div class="col-lg-4 col-md-6 col-sm-7">
                     <div class="contact-box text-center mt-30">
                         <div class="contact-icon">
                             <i class="lni lni-bubble"></i>
                         </div>
                         <div class="contact-content">
                             <h6 class="contact-title">Contact Us</h6>
                             <p>Our email: support@scholastician.org</p>
                         </div>
                     </div> <!-- contact box -->
                 </div>
                     <h5 id = "hi" class="col-md-6 col-sm-8">Once you recieve the email, it is up to you and your tutor on how you are going to communicate. If there are some delays, please contact us. </h5>

                         </div>
                     </div>
             </div>

         </div>
         </div>






     </section>
     <section id="call-to-action" class="call-to-action pt-125 pb-130 bg_cover" style="background-image: url(assets/images/call-to-action.jpg)" >
             <div class="container">
                 <div class="row justify-content-center">
                     <div class="col-xl-8 col-lg-9">
                         <div class="call-action-content text-center">
                             <h2 class="action-title">Thank You</h2>
                             <p>We hope that you found our services helpful, and we wish you a successful journey in what lies ahead!</p>

                         </div> <!-- call action content -->
                     </div>
                 </div> <!-- row -->
             </div> <!-- container -->
         </section>
     <!--====== ABOUT PART START ======-->

       <footer id="footer" class="footer-area">
         <div class="footer-widget pt-130 pb-130">
             <div class="container">
                 <div class="row justify-content-center">
                     <div class="col-lg-8">
                         <div class="footer-content text-center">
                             <a href="index.php">
                                 <img src="assets/images/logo.png" alt="Logo" style="display: inline; height:30%; width: inherit;">
                             </a>
                             <p class="mt-">Free Education for a Better Tommorow</p>
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
                             <p>Copyright © 2022.</p>
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
     <!--====== Main js ======-->
     <script src="assets/js/main.js"></script>
 </body>
 </html>
