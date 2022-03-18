<?php 
include'lgiachu.php';
$rowcart=$_SESSION['CUSTMID'];
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
   $qry="SELECT DISTINCT `CART_ID`, `PRODUCT_ID`, `QUANTITY`, `RATE`, `COST` FROM `cart_info` WHERE cart_info.`CART_ID` IN(SELECT DISTINCT `CART_ID` FROM `cart` WHERE CART.CUSTMER_ID ='$rowcart')";
                                $result=mysqli_query($conn,$qry);
                                $var=0;
                                $qua=0;
                                ?>
                              
                              
                                <?php while($data=mysqli_fetch_assoc($result)){ $dp=$data['PRODUCT_ID'];   ?>
<tr>  <?php $qry2="SELECT PRODUCT_ID,PRODUCT_NAME,PRODUCT_DETAILS,BRAND_NAME, CATEGORY_NAME,PRODUCT_DETAILS,MRP,DISCOUNT,C_A_D,PRODUCT_IMAGE FROM `product` INNER JOIN brand on product.BRAND_ID=brand.BRAND_ID INNER JOIN CATEGORY on PRODUCT.CATEGORY_ID=CATEGORY.CATEGORY_ID INNER JOIN SELLER on PRODUCT.SELLER_ID=SELLER.SELLER_ID WHERE product.PRODUCT_ID='$dp'";  $var++;
$resultpc=mysqli_query($conn,$qry2);
$datapc=mysqli_fetch_assoc($resultpc);
?>  <td> <a href="single.product.php?id=<?php  $data['PRODUCT_ID']; ?>"><center><img src="<?php  $datapc['PRODUCT_IMAGE'];?>" height="20px" width="10px"></center>
    <?php  $datapc['PRODUCT_DETAILS'];?> </a></td> 
      <td><?php $data['QUANTITY']; ?></td><?php $C=  $data['COST'] ;?>
      <?php $TC=$TC + $C;
      
     ?>
    </tr>
   
    <?php   
        } ?>
  <tr><td colspan="4"></td></tr>
<tr><td colspan="4"> </td></tr>
   

    <div class="container">
     <div class="row">
    <form action="placeorder.php" method="post">
    <div class="form-group">
    <label for="cost"  class="control-label">Total Cost</label>
    <div class="col-lg-8">
       <input type="text" name="cost" class="col-lg-8" value=" <?php echo$TC;?>" class="form-control"> 
    </div>
    </div>
   
    <div class="form-group">
    <label for="pm"  class="control-label" class="form-control" class="col-lg-2">PAYMENT MODE:</label>
    <div  class="form-control" class="col-lg-8">
     <div><input type="radio" name="pm" id="pm" value="CARD" >CARD<i class="fab fa-cc-mastercard"></i><i class="fab fa-cc-visa"></i></div> 
     <div><input type="radio" name="pm" id="pm" value="NET BANKING">NET BANKING</div>
     <div><input type="radio" name="pm" id="pm" value="UPI">UPI</div>
     <div><input type="radio" name="pm" id="pm" value="COD">CASH ON DELEVIERY</div>
    </div>
    </div>
    <input type="hidden" name="quantity">
    <button type="submit" class="btn btn-primary">PLACE ORDER</button>
    </form>
    </div>
</div>
</body>
</html>