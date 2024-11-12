<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Book Events</title>

   <link rel="stylesheet" href="css/style.css">
</head>
<body>


<section class="header">
   <a href="home.php" class="logo"><img src="images/dmr_logo.png" alt="Logo" style="height: 80px;"></a>
   <nav class="navbar">
      <a href="home.php" class="active">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Events</a>
      <a href="sponsers.php">Sponsers</a>
      <a href="book.php">Book</a>
      <a href="feedback.php">Feedback</a>
      <a href="signup.html">Log Out</a>
   </nav>
</section>

<div class="heading" style="background:url(images/feedback_banner.png) no-repeat">
   <h1>ㅤㅤ</h1>
</div>

<section class="booking">

   <h1 class="heading-title">Give Your Feedback</h1>

   <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
      <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
      <?php
      unset($_SESSION['success_message']);
   }
   ?>

   <form action="feedback_form.php" method="post" class="book-form">
<div>
      <div class="flex">
         <div class="inputBox">
            <span>Your Reviews</span>
            <input type="text" placeholder="Enter your reviews" name="feedback">
         </div>
      </div>
      <div class="flex">
         <div class="inputBox">
               <span>Rate us</span>
               <input type="number" placeholder="Enter your Ratings (Out Of 10)" name="rating">
         </div>

      </div>
      <input type="submit" value="submit" class="btn" name="send">

   </form>
</section>
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Events</a>
         <a href="sponsers.php"> <i class="fas fa-angle-right"></i> Sponsers</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
         <a href="feedback.php"> <i class="fas fa-angle-right"></i> FeedBack</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +917433033662 (Dev Ray) </a>
         <a href="#"> <i class="fas fa-envelope"></i> devmray2004@gmail.com </a>
         <a href="https://www.gcet.ac.in/index.php">  <i class="fas fa-map"></i> GCET</a>
         <a href="https://cvmu.ac.in/">  <i class="fas fa-map"></i> CVM</a>

      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.5086067679676!2d72.91754191399711!3d22.560073239117955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4e1285d628d5%3A0xe6cee346bfaa35d0!2sG%20H%20Patel%20College%20of%20Engineering%20%26%20Technology!5e0!3m2!1sen!2sin!4v1648027296453!5m2!1sen!2sin" style="border: 0" allowfullscreen="" loading="lazy" class="map"></iframe>
   </div>
<script src="js/script.js"></script>

</body>
</html>