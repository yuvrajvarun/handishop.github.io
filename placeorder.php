<?php
include'lgiachu.php';
$rowcart=$_SESSION['CUSTMID'];
$tcost=$_POST['cost'];
$paymentmode=$_POST['pm'];
$TC=0;
 $arr='PID';
 $arr2='oidc';
  $arr3='C'; 
  $v=1;
 date_default_timezone_set("Asia/Dhaka");
        $dte =date("Y-m-d");
                
        $tme=date("h:i:s:a");
$qry="SELECT DISTINCT `CART_ID`, `PRODUCT_ID`, `QUANTITY`, `RATE`, `COST` FROM `cart_info` WHERE cart_info.`CART_ID` IN(SELECT DISTINCT `CART_ID` FROM `cart` WHERE CART.CUSTMER_ID ='$rowcart')";
                                $result=mysqli_query($conn,$qry);
                                $var=0;
                                $qua=0;
                               
                                ?>

                                <?php while($data=mysqli_fetch_assoc($result)){ $dp=$data['PRODUCT_ID'];   ?>
 <?php $qry2="SELECT PRODUCT_ID,PRODUCT_NAME,PRODUCT_DETAILS,BRAND_NAME, CATEGORY_NAME,PRODUCT_DETAILS,MRP,DISCOUNT,C_A_D,PRODUCT_IMAGE FROM `product` INNER JOIN brand on product.BRAND_ID=brand.BRAND_ID INNER JOIN CATEGORY on PRODUCT.CATEGORY_ID=CATEGORY.CATEGORY_ID INNER JOIN SELLER on PRODUCT.SELLER_ID=SELLER.SELLER_ID WHERE product.PRODUCT_ID='$dp'";  
$resultpc=mysqli_query($conn,$qry2);
$datapc=mysqli_fetch_assoc($resultpc);
    $dis=$datapc['DISCOUNT'];
    $PC=$datapc['PRODUCT_IMAGE'];
      $datapc['PRODUCT_DETAILS'];
       $QUT=$data['QUANTITY'];  
       $DIS =$QUT *  $dis ; 
        $rate=  $datapc['MRP'] ;
       $Cost=  $data['COST'] ;
      $TC=$TC + $Cost;
      $ptc=$Cost * $QUT;
     
       $arr=$arr.','.$dp;
       $arr3=$arr3.$rowcart;
        $arr3=$arr3.'P';
        $arr3=$arr3.$dp;
        $arr3=$arr3.'O';
         $arr3=$arr3.'/'.$dte.'/';
          $arr3=$arr3.$v;

           $qryoc="INSERT INTO `order_custemer`(`ORDER_IDC`, `CUSTMER_ID`, `PRODUCT_ID`, `PRODUCT_IMAGE`, `QUANTITY`, `MRP`, `TOTAL_COST`, `DISCOUNT`, `PRICE_TO_BE_COLLECTED`, `PAYMENT_MODE`, `DATE`, `TIME`)
            VALUES ('$arr3','$rowcart','$dp','$PC','$QUT','$rate','$ptc','$DIS','$Cost','$paymentmode'
         ,'$dte','$tme')";
      $resultoc=mysqli_query($conn,$qryoc);

       $qryco="INSERT INTO `c_order`(`C_OID`, `CUSTMER_ID`, `PRODUCT_ID`, `PRODUCT_IMAGE`, `QUANTITY`, 
       `MRP`, `DISCOUNT`, `TOTAL_COST`, `DELEVIERY_STATUS`, `ORDER_DATE`, `ORDER_TIME`) 
       VALUES(NULL,'$rowcart','$dp','$PC','$QUT','$rate','$DIS','$Cost','ORDER PLACED','$dte','$tme')"; 
       $resultco=mysqli_query($conn,$qryco);
   
           $arr2=$arr2.','.$arr3;
           $var++;
           $v++;
           $arr3='C';
        }
       

$qryod="INSERT INTO `order_details`(`ORDER_ID`, `CUSTMER_ID`, `PRODUCT_ID`, `ORDER_IDC`, `DATE`, `TIME`)
  VALUES (NULL,'$rowcart','$arr','$arr2','$dte','$tme')";
$resultod=mysqli_query($conn,$qryod);

  if($qryod)
   { 
  $qrydc="DELETE FROM `cart_info` WHERE `cart_info`.`CART_ID`=(SELECT DISTINCT `CART_ID` FROM `cart` WHERE cart.CUSTMER_ID ='$rowcart')";
$resultdc=mysqli_query($conn,$qrydc);
if($qrydc)
   { ?>

  <script >
    <img src="handimg/successtick.PNG">
  alert('Order Placed Successfully');</script> <?php
  header('location:homepageu.php');
  }
    }
 

?>