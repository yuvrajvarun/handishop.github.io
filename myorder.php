<!DOCTYPE html>
	
<?php 
include'lgiachu.php';
$rowcart=$_SESSION['CUSTMID'];
$TC=0;
$TP=0;
$C=0;
?>

<html>
<head>
	
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.min.css"> 
   
   <link rel="stylesheet" href="css/all.css">
   <link rel="stylesheet" type="text/css" href="css/styleT.css">

	</head>

	<body>
		<div  class="form-group">
           
	


<table>
    <thead><th>INDEX</th><th>PRODUCT</th><th>PRODUCT_IMAGE</th><th>QUANTITY</th><th>RATE</th><th>DISCOUNT</th><th>TOTAL_DISCOUNT</th><th>PRICE_TO_BE_COLLECTED</th><th>ORDER DATE</th><th>ORDER TIME</th>
    </thead>
	<?php
          $qry="SELECT * FROM `c_order` WHERE `c_order`.`CUSTMER_ID` ='$rowcart'";
                                $result=mysqli_query($conn,$qry);
                                $var=0;         
                              
                                 while($data=mysqli_fetch_assoc($result)){ $dp=$data['PRODUCT_ID'];   ?>
<tr>  <?php $qry2="SELECT PRODUCT_ID,PRODUCT_NAME,SELLER_NAME,BRAND_NAME, CATEGORY_NAME,PRODUCT_DETAILS,MRP,DISCOUNT,C_A_D,PRODUCT_IMAGE FROM `product` INNER JOIN brand on product.BRAND_ID=brand.BRAND_ID INNER JOIN CATEGORY on PRODUCT.CATEGORY_ID=CATEGORY.CATEGORY_ID INNER JOIN SELLER on PRODUCT.SELLER_ID=SELLER.SELLER_ID WHERE product.PRODUCT_ID='$dp'";  $var++;
$resultpc=mysqli_query($conn,$qry2);
$datapc=mysqli_fetch_assoc($resultpc);
?>   <td><?php echo $var; ?></td>
     <td><?php echo $datapc['PRODUCT_NAME']; ?></td>
     <td><a href="single.product.php?id=<?php echo $data['PRODUCT_ID']; ?>"> <img src="<?php echo $data['PRODUCT_IMAGE']; ?>"height="100px" width="100px"></a></td>
     <td><?php echo $data['QUANTITY']; ?></td><td><?php echo$C=$data['MRP'] ;?></td>
      <?php  $Q=$data['QUANTITY']; ?>
    
       <?php $dis=$data['DISCOUNT'];?>
      <td><?php echo$d=$dis/$Q ; ?></td>
      <td><?php echo$dis ; ?></td>
      <td><?php echo$data['TOTAL_COST']; ?></td>
       <?php $TC=$TC + $data['TOTAL_COST'] ;?>
     <td><?php echo$data['ORDER_DATE']; ?></td>
     <td><?php echo$data['ORDER_TIME']; ?></td>


     
</tr>

    <?php
        } ?>
        <tr><td>TOTAL PRICE :</td><td colspan="3"></td>
         <td colspan="6"><center><?php echo$TC;?></center></td></tr>
    </table> </div>
                      
</body> 

</html>

                                

