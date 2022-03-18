<?php
include'dbcon.php';

$snames=$_POST['sname'];
$adds=$_POST['sadd'];
$file=$_FILES['simge'];
$pwds=$_POST['spwd'];
$mobs=$_POST['smob'];
$eids=$_POST['seid'];


($file);

$filename=$file['name'];
$filepath=$file['tmp_name'];
$filsize=$file['size'];
$fileerror=$file['error'];
$destfile='handimg/'.$file['name'];

move_uploaded_file($filepath,$destfile);
$imgs=$destfile;

 
 

$qry="INSERT INTO `seller` (`SELLER_ID`, `SELLER_NAME`, `SELLER_ADDRESS`, `SELLER_IMAGE`, `SELLER_MOBILE_NO`, `SELLER_EMAIL_ID`,`USER_ROLE`, `S_PASSWORD`) 
VALUES (NULL ,'$snames', '$adds', '$imgs', '$mobs', '$eids','2', '$pwds' )";
$querry=mysqli_query($conn,$qry);


if(!$querry)
{
echo'UNABLE TO ADD SELLER';
}
else
{?> <script>alert(' SELLER <?php echo $snames ?> ADDED  SUCCESSFULLY');</script>
 <?php
 header('location:seller.display.php');
}


?>
