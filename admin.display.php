<?php 
include'lgiach.php';
?>
<!doctype html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/admind.css"> 


<?php
$qry="select * from admin";
$result=mysqli_query($conn,$qry); ?>
<html>
<body><div class="btd">
	
<button type="submit" class="btn btn-primary" ><a href="logout.php"><?php echo "Hai ".$_SESSION['ausername']; ?>,LOGOUT</a></button></div>
<table   > 
<thead><th>ADMIN_ID</th><th>ADMIN_NAME</th><th>PASSWORD</th><th colspan="2">CONTROLS</th></thead>
<?php while($data=mysqli_fetch_assoc($result)){?>
<tr> 
     <td><?php echo $data['ADMIN_ID']; ?></td>
	 <td><?php echo $data['ADMIN_NAME']; ?></td>
	 <td><?php echo $data['PASSWORD']; ?></td>
	
	 
     <td><a href="admin.update.php?id=<?php echo $data['ADMIN_ID']; ?>">UPDATE</a></td>
	 <td><a href="admin.delete.php?id=<?php echo $data['ADMIN_ID']; ?>">DELETE</a></td>
</tr>
	<?php
		} ?></table>

		
</body>
</html>	
		