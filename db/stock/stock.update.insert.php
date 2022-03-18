<?php
include'dbcon.php';

$PID=$_POST['Pid'];
$dte=$_POST['Dte'];
$tim=$_POST['tim'];
$Imp=$_POST['Imp'];
$Exp=$_POST['Exp'];
$stid=$_POST['stid'];
$sell=$Imp-$Exp;


 
 

$qry="UPDATE `stock` SET `PRODUCT_ID`='$PID',`DATE`='$dte',`TIME`='$tim',`IMPORT`='$Imp',`EXPORT`='$Exp',`TOTAL SELL`='$sell'WHERE `stock`.`STOCK_ID` = '$stid'";
$querry=mysqli_query($conn,$qry);

if(!$querry)
{
echo'UNABLE TO UPDATE';
}
else
{
echo'UPDATED SUCCESSFULLY';
header('location:stock.display.php');
}


?>
