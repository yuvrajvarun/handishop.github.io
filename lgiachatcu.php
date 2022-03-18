<?php
 include'dbcon2.php'; 
  session_start();
  if(!isset($_SESSION['custname'])){
  	  header('location:loginatcu.php');
  }
  ?>