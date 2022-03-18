<?php 
include'lgiachu.php';
$rowcart=$_SESSION['CUSTMID'];?>
<!doctype html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/all.css"> 
   <link rel="stylesheet" href="css/styleT.css"> 


<?php


$qry="select * from custmer where CUSTMER_ID='$rowcart'";
$result=mysqli_query($conn,$qry); ?>
<html>
<body>

<table   > 
<thead><th>CUSTOMER ID</th><th>CUSTOMER NAME</th><th>CUSTOMER ADDRESS</th><th>CUSTOMER MAIL</th><th>CUSTOMOER MOBILE NO</th><th>CUSTOMER PASSWORD</th><th>COUSTOMER IMAGE</th>
       <th colspan="2">CONTROLS</th></thead>
<?php while($datatc=mysqli_fetch_assoc($result)){?>
<tr> 
     <td><?php echo $datatc['CUSTMER_ID']; ?></td>
	 <td><?php echo $datatc['CUST_NAME']; ?></td>
	 <td><?php echo $datatc['CUST_ADDRESS']; ?></td>
	  <td><?php echo $datatc['CUST_EMAIL']; ?></td>
	   <td><?php echo $datatc['CUST_MOBILE']; ?></td>
	 <td><?php echo $datatc['C_PASSWORD']; ?></td>
	 <td> <img src="<?php echo $datatc['CUSTMER_IMAGE'];?>" height="100px" width="100px"> </td>
     <td><a href="profile.custmer.update.php?id=<?php echo $datatc['CUSTMER_ID']; ?>"><i class="fas fa-edit"></i></a></td>
	 
</tr>
	<?php
		} ?></table>
		
</body>
</html>	
		