<?php 
include'dbcon.php';?>
<!doctype html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/styleT.css"> 


<?php
$qry="select * from student";
$result=mysqli_query($conn,$qry); ?>
<html>
<body>

<table   > 
<thead><th>NAME</th><th>CLASS</th><th>SUBJECT_FOR_TUTION</th><th>BOARD</th><th>FEE</th><th>MOBILE NO</th>
        <th>FULL_ADDRESS</th><th>CITY</th><th>ID</th><th>ID_IMG</th><th>STUDENT_ID</th><th colspan="2">CONTROLS</th></thead>
<?php while($data=mysqli_fetch_assoc($result)){?>
<tr> 
     <td><?php echo $data['NAME']; ?></td>
	 <td><?php echo $data['CLASS']; ?></td>
	 <td><?php echo $data['SUBJECT_FOR_TUTION']; ?></td>
	 <td><?php echo $data['BOARD']; ?></td>
	 <td><?php echo $data['FEE']; ?></td>
	 <td><?php echo $data['MOBILE_NO']; ?></td>
	 <td><?php echo $data['FULL_ADDRESS']; ?></td>
     <td><?php echo $data['CITY']; ?></td>
	 <td><?php echo $data['ID']; ?></td>
	 <td> <img src="<?php echo $data['ID_IMG'];?>" height="100px" width="100px"> </td>
	 <td><?php echo $data['STUDENT_ID']; ?></td>
     <td><a href="update.php?id=<?php echo $data['STUDENT_ID']; ?>">UPDATE</a></td>
	 <td><a href="delete.php?id=<?php echo $data['STUDENT_ID']; ?>">DELETE</a></td>
</tr>
	<?php
		} ?></table>
		
</body>
</html>	
		