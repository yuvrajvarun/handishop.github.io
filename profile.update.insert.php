<?php
include'dbcon.php';

$cid=$_POST['cid'];
$cname=$_POST['cname'];
$caddrs=$_POST['cadd'];
$cmail=$_POST['cmail'];
$cmob=$_POST['cmob'];
$cpwd=$_POST['cpwd'];
$file=$_FILES['cimg'];



$filename=$file['name'];
$filepath=$file['tmp_name'];
$filsize=$file['size'];
$fileerror=$file['error'];
$destfile='handimg/'.$file['name'];
move_uploaded_file($filepath,$destfile);
$cimg=$destfile;

 
 

$qry="UPDATE `custmer` SET `CUST_NAME` = '$cname', `CUST_ADDRESS` = '$caddrs', `CUST_EMAIL` = '$cmail', `CUST_MOBILE` = '$cmob', `CUSTMER_IMAGE` = '$cimg', `C_PASSWORD` = '$cpwd' WHERE `custmer`.`CUSTMER_ID` = $cid";



$querry=mysqli_query($conn,$qry);

if($querry)
{
echo'CUSTMER REGISTERED';
header('location:custmer.display.php');
}
else
{
echo'UNNABLE TO REGISTER CUSTMER';
}


?>
