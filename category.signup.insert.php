<?php
include'dbcon.php';

$cid=$_POST['catId'];
$cname=$_POST['catName'];


$qry="INSERT INTO `category` (`CATEGORY_ID`, `CATEGORY_NAME`) 
VALUES (NULL, '$cname')";
$querry=mysqli_query($conn,$qry);

if(!$querry)
{
echo'UNABLE TO Add CATEGORY';
}
else
{
echo'CATEGORY ADDED SUCCESSFULLY';
header('location:category.display.php');
}

/*INSERT INTO `student` (`NAME`, `CLASS`, `SUBJECT_FOR_TUTION`, `BOARD`, `FEE`, `MOBILE_NO`, `FULL_ADDRESS`, `CITY`, `ID`, `STUDENT-ID`) 
VALUES ('VARUN', '5', 'MATHS', 'C.B.S.E', '900', '7549886454', 'GFXHGJHBK', 'RANCHI', '123654532110', NULL);
$name
$class
$subject
$board
$fee
$mob
$add
$city
$id */
?>
