<?php
 include'dbcon.php'; 
  session_start();
  if(!isset($_SESSION['susername'])){
  	  header('location:logins.php');
  }
  ?>	