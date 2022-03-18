<?php
include'dbcon.php';

$bname=$_POST['brandName'];
$bcid=$_POST['cid'];
$file=$_FILES['brandLogo'];

echo $bname;
print_r($file);

$filename=$file['name'];
$filepath=$file['tmp_name'];
$filsize=$file['size'];
$fileerror=$file['error'];
$destfile='handimg/'.$file['name'];

move_uploaded_file($filepath,$destfile);
$img=$destfile;
 
$qry="INSERT INTO `brand` (`BRAND_ID`, `BRAND_NAME`, `BRAND_LOGO`, `CATEGORY_ID`) VALUES (NULL, '$bname', '$img','$bcid')";
$query=mysqli_query($conn,$qry);
echo $qry;
if($query)
{?>
		<script>
		  alert('added successfully'); </script><?php
		header('location:brand.display.php');
		}else {
	   ?><script>
		  alert('Unable to add brand'); </script>
		 <?php }?>
		
 

