<?php 
include'dbcon.php';?>
<!doctype html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/styleT.css"> 


<?php
$qry="select * from seller";
$result=mysqli_query($conn,$qry); ?>
<html>
<body>

<table   > CLASS
<thead><th>SELLER_ID</th><th>NAME</th><th>ADDRESS</th><th>MOBILE_NO</th><th>EMAIL_ID</th>
	<th>IMAGE</th><th>PASSWORD</th><th colspan="2">CONTROLS</th></thead>
<?php while($data=mysqli_fetch_assoc($result)){?>
<tr> 
     <td><?php echo $data['SELLER_ID']; ?></td>
	 <td><?php echo $data['SELLER_NAME']; ?></td>
	 <td><?php echo $data['SELLER_ADDRESS']; ?></td>
     <td><?php echo $data['SELLER_MOBILE_NO']; ?></td>
     <td><?php echo $data['SELLER_EMAIL_ID']; ?></td>
	 <td> <img src="<?php echo $data['SELLER_IMAGE'];?>" height="100px" width="100px"> </td>
	 <td><?php echo $data['S_PASSWORD']; ?></td>
     <td><a href="seller.update.php?id=<?php echo $data['SELLER_ID']; ?>">UPDATE</a></td>
	 <td><a href="seller.delete.php?id=<?php echo $data['SELLER_ID']; ?>">DELETE</a></td>
</tr>
	<?php
		} ?></table>
		
</body>
</html>	
		