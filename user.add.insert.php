<?php
include'dbcon.php';

$cid=$_POST['ide'];
$cname=$_POST['cname'];
$caddrs=$_POST['cadd'];
$cmail=$_POST['cmail'];
$cmob=$_POST['cmob'];
$cpwd=$_POST['cPwd'];
$file=$_FILES['cphoto'];
$urole=1;


$filename=$file['name'];
$filepath=$file['tmp_name'];
$filsize=$file['size'];
$fileerror=$file['error'];
$destfile='handimg/'.$file['name'];
move_uploaded_file($filepath,$destfile);
$cimg=$destfile;

 
 

$qry="INSERT INTO `custmer` (`CUSTMER_ID`, `CUST_NAME`, `CUSTMER_IMAGE`, `CUST_MOBILE`, `CUST_EMAIL`, `CUST_ADDRESS`,`USER_ROLE`,`C_PASSWORD`) 
VALUES (NULL,'$cname', '$cimg', '$cmob', '$cmail', '$caddrs', '$urole', '$cpwd')";
$querry=mysqli_query($conn,$qry);

if($querry)
{
echo'COUSTMER REGISTERED';
  echo $qryC="SELECT `CUSTMER_ID` from `custmer`  where CUST_EMAIL='$cmail' AND CUST_MOBILE='$cmob'" ;
  $querryC=mysqli_query($conn,$qryC);
  $resultC=mysqli_fetch_assoc($querryC);
  echo$dataC= $resultC['CUSTMER_ID'];
  $qryD="INSERT INTO `cart`(`CART_ID`, `CUSTMER_ID`) VALUES ('$dataC','$dataC')";
 $querryD=mysqli_query($conn,$qryD);
   if ( $querryD) {
   	echo'CART CREATED';
   }
header('location:loginu.php');
}
else
{
echo'UNNABLE TO REGISTER COUSTMER';
}


?>
