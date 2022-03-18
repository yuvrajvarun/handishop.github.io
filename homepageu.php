<?php 
include'lgiachu.php';
$rowcart=$_SESSION['CUSTMID'];
$TC=0;
$desp=0;
$mrp=0;
$dsp=0;
?>
<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.min.css"> 
   
   <link rel="stylesheet" href="css/all.css">
   <link rel="stylesheet" type="text/css" href="css/styleT2.css">
   <link rel="stylesheet" href="css/homeu.css"> 
    <title>Shopsy.com</title>

	
	<body>
	  
	  
	 <div >
	 	   
	 	    <div class="nav-area">
	 	   <ul>
	 	   	<li><a class="active" href="homepageu.php"><i class="fas fa-home"></i>HOME </a></li>
	 	   	  	<li><a href="prd2.php"><i class="fas fa-box"></i>FILTER PRODUCT </a> 
	 	   	  	         
                              </li> 

	 	   	  	
	 	   	  <li><a href="profile.custmer.display.php?id=<?php echo $rowcart; ?>"><i class="fas fa-address-card"></i>PROFILE</a>
                <div class="sub"> <ul>
                    <li><a href="profile.custmer.display.php?id=<?php echo $rowcart; ?>"><i class="fas fa-address-card"></i>VIEW</a>
                             
                </li></ul></div>
                               
	                  </li>

                                <li><a target="_blank" href="myorder.php"><i class="fas fa-box-open"></i>YOUR ORDER</a>
                                        

                                   </li>



                        

                               <?php
                              $qry="SELECT DISTINCT `CART_ID`, `PRODUCT_ID`, `QUANTITY`, `RATE`, `COST` FROM `cart_info` WHERE cart_info.`CART_ID` IN(SELECT DISTINCT `CART_ID` FROM `cart` WHERE CART.CUSTMER_ID ='$rowcart')";
                                $result=mysqli_query($conn,$qry);
                                $var=0;
 
                                ?>
    
                                               
                        <li ><a target="_blank" href="mycart.php"><i class="fas fa-shopping-cart">CART</i></a>
                                 <div class="sub">
                                     <ul> <li>
                                    <table > 
<thead><th>PRODUCT</th><th>QUANTITY</th><th>REMOVE</th></thead>
                              
                              
                                <?php while($data=mysqli_fetch_assoc($result)){ $dp=$data['PRODUCT_ID'];   ?>
<tr>  <?php $qry2="SELECT PRODUCT_ID,PRODUCT_NAME,PRODUCT_DETAILS,BRAND_NAME, CATEGORY_NAME,PRODUCT_DETAILS,MRP,DISCOUNT,C_A_D,PRODUCT_IMAGE FROM `product` INNER JOIN brand on product.BRAND_ID=brand.BRAND_ID INNER JOIN CATEGORY on PRODUCT.CATEGORY_ID=CATEGORY.CATEGORY_ID INNER JOIN SELLER on PRODUCT.SELLER_ID=SELLER.SELLER_ID WHERE product.PRODUCT_ID='$dp'";  $var++;
$resultpc=mysqli_query($conn,$qry2);
$datapc=mysqli_fetch_assoc($resultpc);
?>  <td> <a href="single.product.php?id=<?php echo $data['PRODUCT_ID']; ?>"><center><img src="<?php echo $datapc['PRODUCT_IMAGE'];?>" height="20px" width="10px"></center>
    <?php echo $datapc['PRODUCT_DETAILS'];?> </a></td> 
      <td><?php echo $data['QUANTITY']; ?></td><?php $C=  $data['COST'] ;?>
      <?php $TC=$TC + $C;?>
     
     <td><a href="product.deletec.php?id=<?php echo $data['PRODUCT_ID']; ?>"><i class="fas fa-trash-alt"></i></a></td>
</tr>

    <?php
        } ?>
  <tr><td colspan="4">total cost:<?php echo $TC; ?></td></tr>
<tr><td colspan="4"><a href="checkout.php">Checkout</a></td></tr>
    </table>
                         </li>       
                                                        
                               </ul>
                               </div>  
                                
	 	   	  	</li>


	 	   	  	  	  	  </ul>

	 	   	  	  	 <div class="log">
	 	           <ul>
	 	           	<li><a href="logoutu.php"><i class="fas fa-sign-out-alt"></i><?PHP echo "Hai".' '.$_SESSION['custname']?>, LOGOUT</a>

                      <div class="sub">
                         <ul>
                                                   
                         </ul>                 
                       </div>  

	 	           	</li>
	 	           	</ul>
	 	           </div>
	 	 		  </div> 
	 	 </div>
         
	 	<div class="container">
            <div class="row">
                      <?php $qryp="select * from product order by C_A_D asc";
                                             $resultp=mysqli_query($conn,$qryp);
                                                if(mysqli_num_rows($resultp)>0)
                                                 { ?><td> <div class="pbox" ><?php
                                                foreach($resultp as $key => $datap)
                                                        {              
                                                        ?> 
                                                <?php $desp=$datap['DISCOUNT'];$mrp=$datap['MRP'];
                                                $desp=$desp/$mrp; $dsp=$desp * 100; ?>
                                 <div class="box"  >                                  
                                 <center>   <td>          
               <a style="text-decoration:none" target="_blank" href="single.product.php?id=<?php echo $datap['PRODUCT_ID']; ?>"><img src="<?php echo $datap['PRODUCT_IMAGE']?>"  height="100" width="100">
                             <p>Rs:<strike><?php echo $datap['MRP'];?></strike><?php echo" "; echo $datap['C_A_D'];?><p><?php echo number_format($dsp,1)."%off";?></p></p></a> 
                     <a  href="single.product.php?id=<?php echo $datap['PRODUCT_ID']; ?>" class="btn btn-primary">DETAILS</a>
                         <a  href="singlybuy.php?id=<?php echo $datap['PRODUCT_ID']; ?>" class="btn btn-primary">BUY NOW</a> </td>
                                         </center>   
                        </div> 
                                                
                                    <?php
                                                       } ?></td></div> <?php
            
                                                }  
                                            ?>
                
            
        </div>
	 
 </div>
	 

	 
</body>
</html>
