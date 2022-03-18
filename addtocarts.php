<?php
include'dbcon.php';

$pcid=$_POST['idPc'];
$quantity=$_POST['quantity']; 
$rate=$_POST['cad'];
$cost=$quantity * $rate;

session_start();{
 echo$custmid=$_SESSION['CUSTMID'];
}

$qry2c="SELECT `CART_ID` FROM `cart` WHERE `cart`.`CUSTMER_ID`='$custmid'";
$querry2c=mysqli_query($conn,$qry2c);
$result2c=mysqli_fetch_assoc($querry2c);
$cartid=$result2c['CART_ID'];
$qrychk="select * from cart_info where cart_info.CART_ID='$cartid' AND cart_info.PRODUCT_ID='$pcid'";
$resultchk=mysqli_query($conn,$qrychk);
if(mysqli_num_rows($resultchk)>0){
   $qryuc="UPDATE `cart_info` SET `QUANTITY`='$quantity',`COST`='$cost' WHERE `CART_ID`='$cartid' AND`PRODUCT_ID`='$pcid'";
$querryu=mysqli_query($conn,$qryuc);
   if($querryu)
   { 
  echo'Updated';
  
   }
   else{ echo'UNABLE TO UPDATE'; }
}else{

$qry="INSERT INTO `cart_info` (`CART_INF_ID`, `CART_ID`, `PRODUCT_ID`, `QUANTITY`, `RATE`, `COST`) VALUES (NULL, '$cartid', '$pcid', '$quantity', '$rate', '$cost')";
$querry=mysqli_query($conn,$qry);

if(!$querry)
{
echo'UNABLE TO Add CArt';

}
else
{
echo'CART_INFO ADDED SUCCESSFULLY';
}

}
