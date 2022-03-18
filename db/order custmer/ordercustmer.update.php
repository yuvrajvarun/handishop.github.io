
<!doctype html>
<html lang="en">
<?php
       include'dbcon.php'; 
      
       $idU =$_GET['id']; 
       	   	   
        $qry="SELECT * FROM `product` WHERE PRODUCT_ID = '$idU'";
		$result=mysqli_query($conn,$qry);
		$data=mysqli_fetch_assoc($result);
		
	   ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.min.css"> 
 
   
    <title>Hello, world!</title>
	<style>
	.cls li a:hover{
		background-color:blue;
		color:#ffffff;
	}
	.cls li a{
		
		color:#fffff0;
	}
	.cls{
		background-color:#222;
	}
	
	
	
	
	  </style>
	
	<body>
	  <div class="container" style="border:20px groove green " >
	    
	      <div class="col-lg-12 col-lg-offset-2" >
	   <h1 style="color:green;font-family:algerian;">User Sign Up</h1>
	 <form class="form-group" action="product.update.insert.php" method="post" enctype="multipart/form-data" >
	  
	 <div   class="form-group"  >
	 <label for="pID" class="control-label col-lg-2" > ID</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo $data['PRODUCT_ID'];?>" readonly id="pID" name="pID"/>
	 </div>
	  </div>   
		 
     <div   class="form-group"  >
	 <label for="pname" class="control-label col-lg-2" > NAME</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['PRODUCT_NAME'];?>" id="pname" name="pname"/>
	 </div>
	  </div> 

	   <div class="form-group">
	 <label for="pcid" class="control-label col-lg-2">Category </label>
	 <div class="col-lg-8">
	 	<?php 
	 	
		 $qrypu="select * from category ";
		 $resultpu=mysqli_query($conn,$qrypu); ?>
		 <select name="pcid">
		 	<option value=""> SELECT CATEGORY</option><?php
		 while($datapu=mysqli_fetch_assoc($resultpu)) { ?>
        <option value="<?php echo $datapu['CATEGORY_ID'] ?>"> <?php echo $datapu['CATEGORY_NAME'] ?>
        </option>
		 <?php }
		 ?> </select>
	 
	 </div>
	 </div>

	<div class="form-group">
	 <label for="pbid" class="control-label col-lg-2">Brand</label>
	 <div class="col-lg-8">
	 	<?php 
		 $qrypu="select * from brand ";
		 $resultpu=mysqli_query($conn,$qrypu); ?>
		 <select name="pbid">
		 	<option value=""> SELECT BRAND</option>
		 	<?php
		 while($datapu=mysqli_fetch_assoc($resultpu)) { ?>
        <option value="<?php  echo $datapu['BRAND_ID'] ?>"> <?php echo $datapu['BRAND_NAME']?></option>
		 <?php }
		 ?> </select>
	
	 </div>
	 </div>

	
	 <div class="form-group">
	 <label for="pdetail" class="control-label col-lg-2">Product details</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo $data['PRODUCT_DETAILS']?>" id="pdetail" name="pdetail" />
	 </div>
	 </div>
	 
	 <div class="form-group">
	 <label for="pprice" class="control-label col-lg-2">PRICE</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['MRP']?>" id="pprice" name="pprice" />
	 </div>
	 </div>

	 <div class="form-group">
	 <label for="dce" class="control-label col-lg-2">DISCOUNT</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['DISCOUNT']?>" id="dce" name="dce" />
	 </div>
	 </div>
	 
	 
	 
	 <div class="form-group">
	 <label for="pphoto" class="control-label col-lg-2">Id IMAGE</label>
	 <div class="col-lg-8">
	  <input type="FILE" class="form-control" id="pphoto" name="pphoto" />
	 </div>
	 </div>
	 

	 	<div class="form-group">
	 <label for="psid" class="control-label col-lg-2">SELLER ID</label>
	 <div class="col-lg-8">
	 	<?php 
		 $qrypu="select * from seller ";
		 $resultpu=mysqli_query($conn,$qrypu); ?>
		 <select name="psid">
		 	<option value=""> SELECT SELLER</option>
		 	<?php
		 while($datapu=mysqli_fetch_assoc($resultpu)) { ?>
        <option value="<?php  echo $datapu['SELLER_ID'] ?>"> <?php echo $datapu['SELLER_NAME']?></option>
		 <?php }
		 ?> </select>
	
	 </div>
	 </div>
  

	 <div class="form-group">
	 <div class="col-lg-1 col-lg-offset-2">
	<button type="submit" class="btn btn-primary">submit</button>
	</div>
	</div>
	 </form>
	  </div>

	 </div>
	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
	 
</body>
</html>
