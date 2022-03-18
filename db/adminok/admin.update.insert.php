<?php
include'dbcon.php';

$Aid=$_POST['aid'];
$admname=$_POST['ADMIN_NAME'];
$pwd=$_POST['PASSWORD'];


/*print_r($file);

$filename=$file['name'];
$filepath=$file['tmp_name'];
$filsize=$file['size'];
$fileerror=$file['error'];
$destfile='handimg/'.$file['name'];
echo"$destfile";
move_uploaded_file($filepath,$destfile);
$img=$destfile;*/

 
 

$qry="UPDATE `admin` SET `ADMIN_NAME` = '$admname' WHERE `admin`.`ADMIN_ID` = $Aid";
$querry=mysqli_query($conn,$qry);

if(querry)
{  ?>
  <script>alert('ADMIN UPDATED SUCCESSFULLY ');</script> <?php
    header('location:admin.display.php');
}
else
{  ?>
<script>alert('UNABLE TO UPDATED ADMIN ');</script><?php
} ?>
