<?php
include'dbcon.php';

$name=$_POST['ADMIN_ID'];
$admname=$_POST['ADMIN_NAME'];
$pwd=$_POST['PASSWORD'];


/*print_r($file);

$filename=$file['name'];
$filepath=$file['tmp_name'];
$filsize=$file['size'];
$fileerror=$file['error'];
$destfile='handimg/'.$file['name'];
echo"$destfile";
move_uploaded_file($filepath,$destfile);
$img=$destfile;*/

 
 

$qry="INSERT INTO `admin` (`ADMIN_ID`, `ADMIN_NAME`, `PASSWORD`) 
VALUES (NULL, '$admname', '$pwd' )";
$querry=mysqli_query($conn,$qry);

if(!$querry)
{ ?>
<script> alert('UNABLE TO REGISTER');
</script>script> 
<?php
}
else
{ ?>

<script>alert('ADMIN REGISTERED SUCCESSFULLY');</script><?php
}
?>
/*INSERT INTO `student` (`NAME`, `CLASS`, `SUBJECT_FOR_TUTION`, `BOARD`, `FEE`, `MOBILE_NO`, `FULL_ADDRESS`, `CITY`, `ID`, `STUDENT-ID`) 
VALUES ('VARUN', '5', 'MATHS', 'C.B.S.E', '900', '7549886454', 'GFXHGJHBK', 'RANCHI', '123654532110', NULL);
$name
$class
$subject
$board
$fee
$mob
$add
$city
$id */
?>
