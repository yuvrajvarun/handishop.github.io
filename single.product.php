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
<form class="form-group" action="addtocart.php" method="post">
<div class="col-lg-3" class="form-group" >
<label  for="quantity" class="control-label col-lg-2">Quantity</label>
<input type="number" class="form-control" name="quantity" id="quantity" min="1" required/>
</div>
<div class="col-lg-3" class="form-group">
    
<input type="hidden" class="form-control"  value="<?php echo$idPc?>" name="idPc" id="idPc" readonly/>
<input type="hidden" class="form-control"  value="<?php echo  $datasp['C_A_D'];?>" name="cad" id="cad" readonly/>
<button type="submit" class="btn btn-primary">ADD TO CART</button> 

</div>
</form>
</body>
 </html>
