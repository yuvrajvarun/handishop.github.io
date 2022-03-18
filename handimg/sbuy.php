<!doctype html>
    <html>
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.min.css"> 
<?php
include'lgiachatcu.php';
include'dbcon.php';

if(isset($_GET['id'])) {
   $idPc =$_GET['id'];
    $qry="select * from product where product.PRODUCT_ID='$idPc'";
  $result=mysqli_query($conn,$qry);
  $datasp=mysqli_fetch_assoc($result); } ?>
  </head>
  
  <body>
<img src="<?php echo  $datasp['PRODUCT_IMAGE'];?>" height="500px" width="500px"> <?php
echo 'Rs:'.$datasp['C_A_D'];?>
<form class="form-group" action="addtocarts.php" method="post">
<div class="col-lg-3" class="form-group" >
<label  for="quantity" class="control-label col-lg-2">Quantity</label>
<input type="number" class="form-control" name="quantity" id="quantity" required/>
</div>
<div class="col-lg-3" class="form-group">
    
<input type="hidden" class="form-control"  value="<?php echo$idPc?>" name="idPc" id="idPc" readonly/>
<input type="hidden" class="form-control"  value="<?php echo  $datasp['C_A_D'];?>" name="cad" id="cad" readonly/>
<button type="submit" class="btn btn-primary">ADD TO CART</button> 

</div>
</form>
</body>
 </html>


<?php
include'dbcon.php';

$pcid=$_Get['id'];
$quantity=1;
$qryr="select * from product where product.PRODUCT_ID='$pcid'"; 
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
