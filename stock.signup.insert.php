<?php
include'dbcon.php';

$PID=$_POST['Pid'];
$dte=$_POST['Dte'];
$tim=$_POST['tim'];
$Imp=$_POST['Imp'];
$Exp=$_POST['Exp'];
$stid=$_POST['stid'];
$sell=$Imp-$Exp;
 
 

echo$qry="INSERT INTO `stock`(`STOCK_ID`, `PRODUCT_ID`, `DATE`, `TIME`, `IMPORT`, `EXPORT`, `TOTAL SELL`) VALUES (NULL,'$PID','$dte','$tim','$Imp','$Exp','$sell')";
$querry=mysqli_query($conn,$qry);

if(!$querry)
{
echo'UNABLE TO add';
}
else
{
echo'added SUCCESSFULLY';
header('location:stock.display.php');
}

?>
