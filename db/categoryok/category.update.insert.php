<?php
include'dbcon.php';

$cid=$_POST['catId'];
 $cname=$_POST['catName'];

$qry="UPDATE  `category` SET CATEGORY_NAME='$cname' where category.CATEGORY_ID='$cid'";
$querry=mysqli_query($conn,$qry);

if(!$querry)
{
echo'UNABLE TO EDIT CATEGORY';
}
else
 { ?>
<script> ('CATEGORY <?php echo $cname; ?> Updated');</script>script><?php
header('location:category.display.php');
}
?>

