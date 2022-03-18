<?php 
include'dbcon.php';?>
<!doctype html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/styleT.css"> 


<?php
$qry="select * from category";
$result=mysqli_query($conn,$qry); ?>
<html>
<body>

<table   > 
<thead><th>CATEGORY_ID</th><th>CATEGORY_NAME</th> <th colspan="2">CONTROLS</th></thead>
<?php while($data=mysqli_fetch_assoc($result)){?>
<tr> 
     <td><?php echo $data['CATEGORY_ID']; ?></td>
	 <td><?php echo $data['CATEGORY_NAME']; ?></td>
     <td><a href="category.update.php?id=<?php echo $data['CATEGORY_ID']; ?>">UPDATE</a></td>
	 <td><a href="category.delete.php?id=<?php echo $data['CATEGORY_ID']; ?>">DELETE</a></td>
</tr>
	<?php
		} ?></table>
		
</body>
</html>	
		