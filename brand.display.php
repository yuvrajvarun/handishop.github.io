<?php 
include'dbcon.php';?>
<!doctype html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/styleT.css"> 


<?php
$qry="select * from brand";
$result=mysqli_query($conn,$qry); ?>
<html>
<body>

<table   > 
<thead><th>BRAND_ID</th><th>BRAND_NAME</th><th>BRAND_LOGO</th><th colspan="2">CONTROLS</th></thead>
<?php while($data=mysqli_fetch_assoc($result)){?>
<tr> 
     <td><?php echo $data['BRAND_ID']; ?></td>
	 <td><?php echo $data['BRAND_NAME']; ?></td>
	 <td><img src="<?php echo $data['BRAND_LOGO']; ?>" height="100px" weidth="100px"> </td>

     <td><a href="brand.update.php?id=<?php echo $data['BRAND_ID']; ?>">UPDATE</a></td>
	 <td><a href="brand.delete.php?id=<?php echo $data['BRAND_ID']; ?>">DELETE</a></td>
</tr>
	<?php
		} ?></table>
		
</body>
</html>	
		