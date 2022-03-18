<?php
 include'dbcon.php'; 
  session_start();
  if(!isset($_SESSION['custname'])){
  	  header('location:loginu.php');
  }
  ?>	