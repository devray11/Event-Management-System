<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Event Management System - DMR-2025</title>
   <link rel="stylesheet" href="css/style.css">
   <style>
   #dmr {
      text-align: center; 
      margin: 0; 
      padding: 0; 
      font-size: 40px; 
      color: blue;
      display: inline; 
      font-family: 'Times New Roman', Times, serif;
      text-shadow: 
         0 0 5px red,    
         0 0 10px red,   
         0 0 15px cyan,  
         0 0 20px cyan;  
   }

   </style>
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
<section class="home">
   <div class="single-slide" style="background:url(images/home_front.jpg) no-repeat center center/cover; height: 100vh;">
      <div class="content">
      </div>
   </div>
</section>

<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="images/dmr_home_details.jpeg" alt="Special Offer" style="height: 500px;">
      </div>
   </div>
   <div class="content">
      <h3 id="dmr">DMR-2024</h3>
      <p><strong>G H Patel College of Engineering and Technology</strong>, popularly known as GCET is back with their yearly observance of the fascinating technical fest, to keep aside the weariness of our customary routine and step into the realm of a reasonable cognizance, endorsing the sagacity galore. A modest step taken towards the inception 20 years ago, DMR has been manifested as a heritable affair of the institution, witnessing massive indulgence of all the faculty members and students.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<section class="home-packages">
   <h1 class="heading-title"> Top Events </h1>
   <div class="box-container">

   <div class="box">
         <div class="image">
            <img src="images/dmr_background_about.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Concert</h3>
            <p><strong>Concert Events at DMR 2024: An Unforgettable Musical Experience</strong> <br>DMR 2024 will host a series of captivating concert events, featuring a diverse lineup of talented artists. Immerse yourself in the electrifying atmosphere as you witness live performances from your favorite musicians. Feel the energy of the crowd, connect with fellow music enthusiasts, and create lasting memories. Let the power of music move you at DMR 2024.</p>
            <h2>Rs 299</h2>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/pubg.png" alt="">
         </div>
         <div class="content">
            <h3>PUBG Mania</h3>
            <p>Prepare for an exhilarating PUBG showdown at DMR 2024! The PUBG Mania event will gather skilled players from all corners of the globe to compete in a fierce battle for supremacy. Experience the thrill of intense combat, strategic gameplay, and the ultimate test of survival as players fight to be the last team standing. With the stakes high and the competition fierce, PUBG Mania promises an unforgettable experience for both participants and spectators alike.</p>
            <h2>Rs 299</h2>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/logo.png" alt="">
         </div>
         <div class="content">
            <h3>Stargazing</h3>
            <p>Join us for a night under the stars at DMR 2024! Our stargazing event offers a unique opportunity to explore the wonders of the cosmos. With the help of telescopes and expert guidance, you'll be able to observe distant galaxies, nebulae, and celestial bodies. Immerse yourself in the beauty of the night sky and learn about the mysteries of the universe.</p><br><br><br><br>
            <h2>Rs 299</h2>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>
      
   </div>
   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
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
</section>
<script src="js/script.js"></script>
</body>
</html>