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
                           $_SESSION['matching'] = '1'
                     






                          ?>
