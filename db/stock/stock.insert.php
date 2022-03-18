<?php
include'dbcon.php';

$name=$_POST['name'];
$class=$_POST['class'];
$sub=$_POST['subject'];
$board=$_POST['board'];
$fee=$_POST['fee'];
$mob=$_POST['mob'];
$add=$_POST['add'];
$city=$_POST['city'];
$id=$_POST['id'];
$file=$_FILES['photo'];

print_r($file);

$filename=$file['name'];
$filepath=$file['tmp_name'];
$filsize=$file['size'];
$fileerror=$file['error'];
$destfile='handimg/'.$file['name'];
echo"$destfile";
move_uploaded_file($filepath,$destfile);
$img=$destfile;

 
 

$qry="INSERT INTO `student` (`NAME`, `CLASS`, `SUBJECT_FOR_TUTION`, `BOARD`, `FEE`, `MOBILE_NO`, `FULL_ADDRESS`, `CITY`, `ID` , `ID_IMG`, `STUDENT_ID`) 
VALUES ('$name', '$class', '$sub', '$board', '$fee', '$mob', '$add', '$city', '$id', '$img', NULL)";
$querry=mysqli_query($conn,$qry);

if(!$querry)
{
echo'UNABLE TO LOGIN';
}
else
{
echo'LOGIN SUCCESSFULLY';
}

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
