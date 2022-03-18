<?php 
include'dbcon.php';
session_start();
if(!isset($_SESSION['ausername'])){
      header('location:logina.php');
  }
?>