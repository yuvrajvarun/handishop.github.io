<?php
include'dbcon.php';

$bid=$_POST['Bid'];
$bname=$_POST['brand_name'];
$cid=$_POST['cid'];
$file=$_FILES['brandLogo'];

$filename=$file['name'];
$filepath=$file['tmp_name'];
$filsize=$file['size'];
$fileerror=$file['error'];
$destfile='handimg/'.$file['name'];

move_uploaded_file($filepath,$destfile);
$img=$destfile;



$qry="UPDATE `brand` SET `BRAND_NAME` = '$bname', `BRAND_LOGO` = '$img' , `CATEGORY_ID` = '$cid'  WHERE `brand`.`BRAND_ID` = '$bid'";
 echo $bname;
$querry=mysqli_query($conn,$qry);

if($querry)
{    ?>
       <script>
		  alert('Brand <?php echo $bname; ?> Updated');
		 </script>

  <?php header('location:brand.display.php');
   }
   else
    {  
    ?>      <script>
		  alert('Unable to update');
		   </script>

  <?php 
       //  header('location:brand.display.php');
   }

   ?>
		 
		
		
