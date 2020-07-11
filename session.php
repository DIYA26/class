<?php
   include('database.php');
   session_start();
   
   $user_check = $_SESSION['uname'];
   
   $ses_sql = mysqli_query($con,"select * from student where uname = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql);
   
   $login_session = $row['uname'];
   if(!isset($_SESSION['uname'])){
      header("location:login.php");
      die();
   }
?>