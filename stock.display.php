<?php 
include'dbcon.php';?>
<!doctype html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/styleT.css"> 


<?php
$qry="select * from stock inner join product on stock.PRODUCT_ID=product.PRODUCT_ID";
$result=mysqli_query($conn,$qry); ?>
<html>
<body>

<table   > 
<thead><th>STOCK ID</th><th>PRODUCT ID</th><th>PRODUCT NAME</th><th>DATE</th><th>TIME</th><th>IMPORT</th>
        <th>EXPORT</th><th>TOTAL SELL</th><th colspan="2">CONTROLS</th></thead>
<?php while($data=mysqli_fetch_assoc($result)){?>
<tr> 
     <td><?php echo $data['STOCK_ID']; ?></td>
	 <td><?php echo $data['PRODUCT_ID']; ?></td>
	 <td><?php echo $data['PRODUCT_NAME']; ?></td>
	 <td><?php echo $data['DATE']; ?></td>
	 <td><?php echo $data['TIME']; ?></td>
	 <td><?php echo $data['IMPORT']; ?></td>
	 <td><?php echo $data['EXPORT']; ?></td>
     <td><?php echo $data['TOTAL SELL']; ?></td>
     <td><a href="stock.update.php?id=<?php echo $data['STOCK_ID']; ?>">UPDATE</a></td>
	 <td><a href="stock.delete.php?id=<?php echo $data['STOCK_ID']; ?>">DELETE</a></td>
</tr>
	<?php
		} ?></table>
		
</body>
</html>	
		