<doctype 
<?php 
session_start();
$rowcart=$_SESSION['CUSTMID'];
include'dbcon2.php';
$TC=0;
 $qry="SELECT DISTINCT `CART_ID`, `PRODUCT_ID`, `QUANTITY`, `RATE`, `COST` FROM `cart_info` WHERE cart_info.`CART_ID` IN(SELECT DISTINCT `CART_ID` FROM `cart` WHERE CART.CUSTMER_ID ='$rowcart')";
                                $result=mysqli_query($conn,$qry);
                                $var=0;
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
   </head>
<body>
     <div >
   <table> 
<thead><th>INDEX</th><th>PRODUCT</th><th>QUANTITY</th><th>RATE</th><th>COST</th><th>PRODUCT_IMAGE</th>
    <th colspan="2">CONTROLS</th></thead>
                              
                              
                                <?php while($data=mysqli_fetch_assoc($result)){ $dp=$data['PRODUCT_ID'];   ?>
<tr>  <?php $qry2="SELECT PRODUCT_ID,PRODUCT_NAME,SELLER_NAME,BRAND_NAME, CATEGORY_NAME,PRODUCT_DETAILS,MRP,DISCOUNT,C_A_D,PRODUCT_IMAGE FROM `product` INNER JOIN brand on product.BRAND_ID=brand.BRAND_ID INNER JOIN CATEGORY on PRODUCT.CATEGORY_ID=CATEGORY.CATEGORY_ID INNER JOIN SELLER on PRODUCT.SELLER_ID=SELLER.SELLER_ID WHERE product.PRODUCT_ID='$dp'";  $var++;
$resultpc=mysqli_query($conn,$qry2);
$datapc=mysqli_fetch_assoc($resultpc);
?>    <td><?php echo $var; ?></td>
     <td><?php echo $datapc['PRODUCT_NAME']; ?></td>
      <td><?php echo $data['QUANTITY']; ?></td>
      <td><?php echo $data['RATE']; ?></td><
     <td><?php  echo $data['COST']; ?></td>
     <td> <img src="<?php echo $datapc['PRODUCT_IMAGE'];?>" height="50px" width="50px"> </td>
     <td><a href="cart_info.update.php?id=<?php echo $data['PRODUCT_ID']; ?>">UPDATE</a></td>
     <td><a href="cart_info.delete.php?id=<?php echo $data['PRODUCT_ID']; ?>">REMOVE</a></td>
</tr>

    <?php
        } ?>
        <tr><td>TOTAL COST :</td><td></td>
         <td colspan="4"><center><?php echo$TC;?></center></td></tr>
    </table>
                         
                               </div>  
                               </body>
</html>