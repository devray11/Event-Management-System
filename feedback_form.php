<?php

   $connection = mysqli_connect('localhost','root','','feedback_db');

   if(isset($_POST['send'])){
      $feedback = $_POST['feedback'];
      $rating = $_POST['rating'];
      

      $request = " insert into feedback_form(feedback, rating) values('$feedback','$rating') ";
      $result = mysqli_query($connection, $request);
      session_start();
      $_SESSION['success_message'] = "Feedback Submitted";
     header('location:feedback.php'); 
      
   }else{
      echo 'something went wrong please try again!';
   }

?>