<?php
include'lgiachu.php';
$rowcart=$_SESSION['CUSTMID'];
$dp=$_POST['pid'];
$quantity=$_POST['quantity'];
$paymentmode=$_POST['pm'];

   $qry2="SELECT * FROM PRODUCT WHERE product.PRODUCT_ID='$dp'";  $var++;
$resultpc=mysqli_query($conn,$qry2);
$datapc=mysqli_fetch_assoc($resultpc);
    $dis=$datapc['DISCOUNT'];

    $PC=$datapc['PRODUCT_IMAGE'];
      $datapc['PRODUCT_DETAILS'];
        
       $DIS =$quantity *  $dis ; 
        $rate=  $datapc['MRP'] ;
       $Cost=  $rate * $quantity; 
      $ptc=$Cost - $DIS;
   $qryoc="INSERT INTO `order_custemer`(`ORDER_IDC`, `CUSTMER_ID`, `PRODUCT_ID`, `PRODUCT_IMAGE`, `QUANTITY`, `MRP`, `TOTAL_COST`, `DISCOUNT`, `PRICE_TO_BE_COLLECTED`, `PAYMENT_MODE`)
         VALUES (NULL,'$rowcart','$dp','$PC','$quantity','$rate','$Cost','$DIS','$ptc','$paymentmode')";
      $resultoc=mysqli_query($conn,$qryoc);
      $oid=0;
      $qryoid="SELECT `ORDER_IDC` from `order_custemer` where `order_custemer`.`CUSTMER_ID`='$rowcart' AND
      `order_custemer`.`PRODUCT_ID`='$dp'";
      $resultoid=mysqli_query($conn,$qryoid);
      $dataoid=mysqli_fetch_assoc($resultoid);
         $oid=$dataoid['ORDER_IDC'];
         date_default_timezone_set("Asia/Dhaka");
         $dte =date("Y-m-d");$tme=date("h:i:s:a");

$qryod="INSERT INTO `order_details`(`ORDER_ID`, `CUSTMER_ID`, `PRODUCT_ID`, `ORDER_IDC`, `DATE`, `TIME`)
 VALUES (NULL,'$rowcart','$dp','$oid','$dte','$dte')";
$resultod=mysqli_query($conn,$qryod);
    if($qryod)
   { ?>
  <script>
    <img src="handimg/successtick.PNG">
  alert('Order Placed Successfully');</script> <?php
  header('location:homepageu.php');
  }
?>