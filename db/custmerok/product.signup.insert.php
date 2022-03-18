<?php
include'dbcon.php';

$pname=$_POST['pname'];
$pbid=$_POST['pbid'];
$pcid=$_POST['pcid'];
$pdetail=$_POST['pdetail'];
$pprice=$_POST['pprice'];
$pdiscount=$_POST['dprice'];
$psid=$_POST['psid'];
$pfile=$_FILES['pphoto'];
$pcad=$pprice-$pdiscount;
print_r($pfile);

$filename=$pfile['name'];
$filepath=$pfile['tmp_name'];
$filsize=$pfile['size'];
$fileerror=$pfile['error'];
$destfile='handimg/'.$pfile['name'];
move_uploaded_file($filepath,$destfile);
$pimg=$destfile;

 
$qry="INSERT INTO `product` (`PRODUCT_ID`, `PRODUCT_NAME`, `SELLER_ID`,`BRAND_ID`, `CATEGORY_ID`, `PRODUCT_IMAGE`,`PRODUCT_DETAILS`,  `MRP`, `C_A_D`,`DISCOUNT`) VALUES (NULL, '$pname', '$psid', '$pbid', '$pcid','$pimg', '$pdetail', '$pprice' ,'$pcad' ,'$pdiscount')";

$querry=mysqli_query($conn,$qry);


if(!$querry)
{
echo'UNABLE TO ADD PRODUCT';
}
else
{
echo'ADDED SUCCESSFULLY';
 header('location:product.display.php');
}


?>
