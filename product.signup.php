 <!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.min.css"> 
 
   
    <title>Adding Product </title>
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
	  <div class="container" style="background-color:yellow ;border:20px groove green">
	      <div class="col-lg-12 col-lg-offset-2" >
	   <h1 style="color:green;font-family:algerian;">Product Adding</h1>
	 <form class="form-group" action="product.signup.insert.php" method="post" enctype="multipart/form-data" >
	  
	 <div   class="form-group" style="background-color:PINK" >
	 <label for="pname" class="control-label col-lg-2" style="background-color:GREEN" > Name</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="pname" name="pname"/>
	 </div>
	  </div>   
		 

  <div class="form-group">
	 <label for="pcid" class="control-label col-lg-2">Category </label>
	 <div class="col-lg-8">
	 	<?php 
	 	 include'dbcon.php';
		 $qry="select * from category ";
		 $result=mysqli_query($conn,$qry); ?>
		 <select name="pcid">
		 	<option value=""> SELECT CATEGORY</option><?php
		 while($data=mysqli_fetch_assoc($result)) { ?>
        <option value="<?php echo $data['CATEGORY_ID'] ?>"> <?php echo $data['CATEGORY_NAME'] ?>
        </option>
		 <?php }
		 ?> </select>
	 
	 </div>
	 </div>
		 
	 <div class="form-group">
	 <label for="pbid" class="control-label col-lg-2">Brand</label>
	 <div class="col-lg-8">
	 	<?php 
		 $qry="select * from brand ";
		 $result=mysqli_query($conn,$qry); ?>
		 <select name="pbid">
		 	<option value=""> SELECT BRAND</option>
		 	<?php
		 while($data=mysqli_fetch_assoc($result)) { ?>
        <option value="<?php  echo $data['BRAND_ID'] ?>"> <?php echo $data['BRAND_NAME']?></option>
		 <?php }
		 ?> </select>
	
	 </div>
	 </div>

	 

<div class="form-group">
	 <label for="pdetail" class="control-label col-lg-2">Details</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="pdetail" name="pdetail" />
	 </div>
	 </div>

	 <div class="form-group">
	 <label for="pprice" class="control-label col-lg-2">Price</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="pprice" name="pprice" />
	 </div>
	 </div>

	  <div class="form-group">
	 <label for="dprice" class="control-label col-lg-2">Discount</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="dprice" name="dprice" />
	 </div>
	 </div>
	 
<div class="form-group">
	 <label for="pphoto" class="control-label col-lg-2">IMAGE</label>
	 <div class="col-lg-8">
	 <input type="FILE" class="form-control" id="pphoto" name="pphoto" />
	 </div>
	 </div>

	 <div class="form-group">
	 <label for="psid" class="control-label col-lg-2">Seller</label>
	 <div class="col-lg-8">

	 		<?php 
		 $qry="select * from seller";
		 $result=mysqli_query($conn,$qry); ?>
		 <select name="psid">
		 	<option value=""> SELECT SELLER</option>
		 	<?php
		 while($data=mysqli_fetch_assoc($result)) { ?>
        <option value="<?php echo $data['SELLER_ID'] ?>"> <?php echo $data['SELLER_NAME']?></option>
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
