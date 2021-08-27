<?php
   include('connection.php');
   session_start();
   
   $user_check = $_SESSION['user_name'];
   
   $ses_sql = mysqli_query($db,"select username from admin where user_name = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['user_name'];
   
   if(!isset($_SESSION['user_name'])){
      header("location:adminlogin.php");
      die();
   }
?>