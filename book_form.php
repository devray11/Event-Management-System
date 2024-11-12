<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      

      $request = " insert into book_form(name, email, phone, address, location) values('$name','$email','$phone','$address','$location') ";
      $result = mysqli_query($connection, $request);
      session_start();
      $_SESSION['success_message'] = "Form Submitted";
     header('location:book.php'); 
      
   }else{
      echo 'something went wrong please try again!';
   }

?>