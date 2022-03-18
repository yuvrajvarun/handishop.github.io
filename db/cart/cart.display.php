<?php 
include'dbcon.php';?>
<!doctype html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/styleT.css"> 


<?php
$qry="SELECT PRODUCT_ID,PRODUCT_NAME,SELLER_NAME,BRAND_NAME, CATEGORY_NAME,PRODUCT_DETAILS,MRP,DISCOUNT,C_A_D,PRODUCT_IMAGE FROM `product` INNER JOIN brand on product.BRAND_ID=brand.BRAND_ID INNER JOIN CATEGORY on PRODUCT.CATEGORY_ID=CATEGORY.CATEGORY_ID INNER JOIN SELLER on PRODUCT.SELLER_ID=SELLER.SELLER_ID";
$result=mysqli_query($conn,$qry); ?>
<html>
<body>

<table   > 
<thead><th>PRODUCT_ID</th><th>PRODUCT_NAME</th><th>SELLER</th><th>BRAND</th><th>CATEGORY</th>><th>PRODUCT_DETAILS</th><th>MRP</th><th>DISCOUNT</th><th>SELLING PRICE</th><th>IMAGE</th><th colspan="2">CONTROLS</th></thead>
<?php while($data=mysqli_fetch_assoc($result)){?>
<tr> 
     <td><?php echo $data['PRODUCT_ID']; ?></td>
      <td><?php echo $data['PRODUCT_NAME']; ?></td>
      <td><?php echo $data['SELLER_NAME']; ?></td>
	 <td><?php echo $data['BRAND_NAME']; ?></td>
	 <td><?php echo $data['CATEGORY_NAME']; ?></td>
	  <td><?php echo $data['PRODUCT_DETAILS']; ?></td>
	 <td><?php echo $data['MRP']; ?></td> 
	 <td><?php echo $data['DISCOUNT']; ?></td>
	 <td><?php echo $data['C_A_D']; ?></td>
	 <td> <img src="<?php echo $data['PRODUCT_IMAGE'];?>" height="100px" width="100px"> </td>
     <td><a href="product.update.php?id=<?php echo $data['PRODUCT_ID']; ?>">UPDATE</a></td>
	 <td><a href="product.delete.php?id=<?php echo $data['PRODUCT_ID']; ?>">DELETE</a></td>
</tr>
	<?php
		} ?></table>
		
</body>
</html>	
		