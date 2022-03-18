<!doctype html>
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="css/prd.css">
    </head>
<body>
	
<form method="GET">
    <div class="row" style="background-color:red">
	<div class="col-lg-3" style="background-color:yellow" >
		<button type="submit" class="btn btn-primary" name="aply" id="aply" >APPLY</button>
		 <div style="background-color:white"><label >CATEGORY</label></div>
	    <?php include'dbcon2.php';
	       $qry="select * from category";
	         $result=mysqli_query($conn,$qry);
	         if(mysqli_num_rows($result)>0)
	         {
	         	foreach($result as $key => $dataC) {
	         		$checked=[];
	         		if(isset($_GET['category'])){
	         			 $checked=$_GET['category']; 
	         		}?>
	         		<div>
	         			<input type="checkbox" name="category[]" value="<?php echo $dataC['CATEGORY_ID'];?>"
	         			<?php
	         			   if (in_array($dataC['CATEGORY_ID'],$checked)){
	         			   	 echo "checked";
	         			   }
	         			?>
	         			/><?php echo$dataC['CATEGORY_NAME']; ?>
	         		</div>
	         <?php
	         	}
	         	
	         }

	    ?>	 
	   <!2nd filter!>
      <div style="background-color:white"><label >BRANDS</label></div>
	    <?php 
	     if(isset($_GET['category'])){
               $categorycheck=[];
               $categorycheck=$_GET['category'];
               foreach($categorycheck as $rowcat){
	       $qry="SELECT DISTINCT `BRAND_NAME`,`BRAND_ID` FROM `brand` WHERE brand.`BRAND_ID` IN(SELECT DISTINCT `BRAND_ID` FROM `product` WHERE PRODUCT.CATEGORY_ID IN($rowcat)) ";
	         $resultc=mysqli_query($conn,$qry);
	         if(mysqli_num_rows($resultc)>0)
	         {
	         	foreach($resultc as $key => $dataB) {
	         		$checkedB=[];
	         		if(isset($_GET['brand'])){
	         			$checkedB=$_GET['brand'];
	         		}?>
	         		<div>
	         			<input type="checkbox" name="brand[]" value="<?php echo $dataB['BRAND_ID'];?>"
	         			<?php
	         			   if (in_array($dataB['BRAND_ID'],$checkedB)){
	         			   	 echo "checked";
	         			   }
	         			   
	         			?>
	         			/><?php echo$dataB['BRAND_NAME']; ?>
	         		</div>
	         <?php
	       }
	         	}
	         	
	         }
	     }else{
            $qry="SELECT * FROM brand ";
	         $resultc=mysqli_query($conn,$qry);
	         if(mysqli_num_rows($resultc)>0)
	         {
	         	foreach($resultc as $key => $dataB) {
	         		$checkedB=[];
	         		if(isset($_GET['brand'])){
	         			$checkedB=$_GET['brand'];
	         		}?>
	         		<div>
	         			<input type="checkbox" name="brand[]" value="<?php echo $dataB['BRAND_ID'];?>"
	         			<?php
	         			   if (in_array($dataB['BRAND_ID'],$checkedB)){
	         			   	 echo "checked";
	         			   }
	         			   
	         			?>
	         			/><?php echo$dataB['BRAND_NAME']; ?>
	         		</div>
	         <?php
	         	}
	        } 	
	         }

	    ?>	

      </div>
      
	       <div class="col-lg-9" style="background-color:PINK; ">
	       	
	       	<!result of product!>
	     
	            
	                      <?php 
	                      if(isset($_GET['brand']))
	                      {
	                      	$brandchecked=[];
	                      	$brandchecked=$_GET['brand'];
	                      	foreach($brandchecked as $rowbrand){
	                      		    $qry="select * from product where BRAND_ID IN($rowbrand) order by C_A_D asc";
	                                        $resultp=mysqli_query($conn,$qry);
             	                                if(mysqli_num_rows($result)>0)
	                                             {
	                                          	foreach($resultp as $key => $datapb)
	                                          	        {  ?>
	                                <div class="col-sm-9" >            
	                             <div style="border:1px solid brown;border-radius:5px padding:16px; margin-bottom:16px  ;">                           	      
	                             <center>        	   
	         	 <img src="<?php echo $datapb['PRODUCT_IMAGE'];?>" height="100" width="90">
	         			     <p>Rs:<strike><?php echo $datapb['MRP'];?></strike><?php echo" "; echo $datapb['C_A_D'];?></p>
                                         </center>   
	         			</div> </div> 
                                                
	         		                <?php } 
	         		                               }

	                      	              }
                          }elseif(isset($_GET['category'])) {
                                 {
                                        $categorycheck=[];
                                       $categorycheck=$_GET['category'];	
                                       foreach($categorycheck as $rowcat){
                                       	
                                        $qry="select * from product where CATEGORY_ID IN($rowcat) order by C_A_D asc";
	                                        $resultp=mysqli_query($conn,$qry);
             	                                if(mysqli_num_rows($result)>0)
	                                             {
	                                          	foreach($resultp as $key => $datapC)
	                                          	        { ?>
	                                <div class="col-sm-9" >            
	                             <div style="border:1px solid brown;border-radius:5px padding:16px; margin-bottom:16px  ;">                           	      
	                             <center>        	   
	         		 <img src="<?php echo $datapC['PRODUCT_IMAGE'];?>" height="100" width="100"> 
	         			     <p>Rs:<strike><?php echo $datapC['MRP'];?></strike><?php echo" "; echo $datapC['C_A_D'];?></p>
                                         </center>   
	         			</div> </div> 
                                                
	         		                <?php
	         		                                    } 
	         		                               }
                                           }


                                   }  


                          }else{
                                    $qry="select * from product order by C_A_D asc";
	                                        $resultp=mysqli_query($conn,$qry);
             	                                if(mysqli_num_rows($resultp)>0)
	                                             { ?> <div class="pbox" ><?php
	                                          	foreach($resultp as $key => $datap)
	                                          	        {         	   
	         			                                ?><td>
	                                            
	                             <div class="box"  >                           	      
	                             <center>        	   
	         	<img src="<?php echo $datap['PRODUCT_IMAGE']?>"  height="100" width="100"> 
	         			     <p>Rs:<strike><?php echo $datap['MRP'];?></strike><?php echo" "; echo $datap['C_A_D'];?></p>
	         		 <a  href="single.product.php?id=<?php echo $datap['PRODUCT_ID']; ?>" class="btn btn-primary">DETAILS</a>
	         			 <a  href="singlybuy.php?id=<?php echo $datap['PRODUCT_ID']; ?>" class="btn btn-primary">BUY NOW</a>
                                         </center>   
	         			</div> </td>
                                                
	         		                <?php
                                                       } ?></div> <?php
            
                                                }     
                                         }          
	         		?>    
	            
             
             </div>
    
    </form>
</body>