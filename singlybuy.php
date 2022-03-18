<?php 
include'lgiachu.php';
$rowcart=$_SESSION['CUSTMID'];
$dp=$_GET['id'];
$TC=0;
?>
<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.min.css"> 
   
   <link rel="stylesheet" href="css/all.css">
   <link rel="stylesheet" type="text/css" href="css/styleT.css">

    <title>home</title>

    
    <body>


<?php
         $qry="SELECT * FROM PRODUCT where PRODUCT_ID='$dp'";
                                $result=mysqli_query($conn,$qry);
                              $data=mysqli_fetch_assoc($result)    ?>

 <a href="single.product.php?id=<?php  $data['PRODUCT_ID']; ?>"><center><img src="<?php  $data['PRODUCT_IMAGE'];?>" height="20px" width="10px"></center>
    <?php echo $data['PRODUCT_NAME'];?><?php echo $data['PRODUCT_DETAILS'];?>
     <STRIKE><?php echo $data['MRP'];?></STRIKE><?php echo $data['C_A_D'];?><?php echo $data['DISCOUNT'];?></a>
    
        ?>
   
   
<form class="form-group" action="checkouts.php" method="post">
<div class="col-lg-3" class="form-group" >
<label  for="quantity" class="control-label col-lg-2">Quantity</label>
<input type="number" class="form-control" name="quantity" id="quantity" required/>
</div>
<div class="col-lg-3" class="form-group">  
<input type="hidden" class="form-control"  value="<?php echo$idPc?>" name="idPc" id="idPc" readonly/>
<input type="hidden" class="form-control"  value="<?php echo  $datasp['C_A_D'];?>" name="cad" id="cad" readonly/>

<button type="submit" name="buy" value="buy" class="btn btn-primary">CHECKOUT</button>

    </form>
   

</body>
</html>