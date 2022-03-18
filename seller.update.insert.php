<?php
include'dbcon.php';

$names=$_POST['sname'];
$adds=$_POST['sadd'];
$mobs=$_POST['smob'];
$eids=$_POST['smail'];
$pwds=$_POST['spwd'];
$file=$_FILES['sphoto'];
$suid=$_POST['sid'];



$filename=$file['name'];
$filepath=$file['tmp_name'];
$filsize=$file['size'];
$fileerror=$file['error'];
$destfile='handimg/'.$file['name'];
move_uploaded_file($filepath,$destfile);
$suimg=$destfile;

 
 

echo$qry="UPDATE `seller` SET `SELLER_NAME`='$names',`SELLER_IMAGE`='$suimg',`SELLER_MOBILE_NO`='$mobs',`SELLER_EMAIL_ID`='$eids',`SELLER_ADDRESS`='$adds',`USER_ROLE`='2',`S_PASSWORD`='$pwds' WHERE `seller`.`SELLER_ID` = '$suid'";
$querry=mysqli_query($conn,$qry);


if(!$querry)
{
echo'UNABLE TO UPDATE SELLER';
}
else
{?> <script>alert(' SELLER <?php echo $names ?> UPDATED  SUCCESSFULLY');</script>
 <?php
 header('location:seller.display.php');
}

?>
