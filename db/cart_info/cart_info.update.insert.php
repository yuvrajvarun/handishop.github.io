<?php
include'dbcon.php';
$pID=$_POST['pID'];
$pname=$_POST['pname'];
$pbid=$_POST['pbid'];
$pcid=$_POST['pcid'];
$pdetail=$_POST['pdetail'];
$pprice=$_POST['pprice'];
$pdce=$_POST['dce'];
$psid=$_POST['psid'];
$pfile=$_FILES['pphoto'];
$cad=$pprice-$pdce;
print_r($pfile);

$filename=$pfile['name'];
$filepath=$pfile['tmp_name'];
$filsize=$pfile['size'];
$fileerror=$pfile['error'];
$destfile='handimg/'.$filename;
echo"$destfile";
move_uploaded_file($filepath,$destfile);
$pimg=$destfile;

 
 $qry="UPDATE `product` SET  `PRODUCT_NAME` = '$pname',`SELLER_ID` = '$psid',`BRAND_ID` = '$pbid', `CATEGORY_ID` = '$pcid', `PRODUCT_DETAILS` = '$pdetail', `MRP` = '$pprice',`DISCOUNT` = '$pdce',`C_A_D` = '$cad', `PRODUCT_IMAGE` = '$pimg', `SELLER_ID` = '$psid' WHERE `product`.`PRODUCT_ID` = $pID";





$querry=mysqli_query($conn,$qry);

if($querry)
{
echo' updated';
header('location:product.display.php');
}
else
{
echo'Unable to update';
   
}


?>
