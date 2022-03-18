<?php 
           include'dbcon.php';
           $qry="SELECT BRAND_ID FROM brand order by BRAND_ID desc limit 1";
          $rew=mysqli_query($conn,$qry);
           $data=mysqli_fetch_assoc($rew);
           $varbid=$data['BRAND_ID'];
	           $varbid++;
           ?>
<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.min.css"> 
 
   
    <title>Adding Brand</title>
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
	  <div class="container" style="background-color:yellow ;border:20px groove green " >
	    
	      <div class="col-lg-12 col-lg-offset-2" >
	   <h1 style="color:green;font-family:algerian;">Brand Details</h1>
	 <form class="form-group" action="brand.signup.insert.php" method="post" enctype="multipart/form-data" >
           
	 	<div class="form-group">
	 <label for="BrandId" class="control-label col-lg-2">Brand Id</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="BrandId" name="BrandId" value="<?php echo $varbid ;?>" readonly />
	 </div>
	 </div>
	  
	 <div   class="form-group" style="background-color:PINK" >
	 <label for="brandName" class="control-label col-lg-2" style="background-color:GREEN" >Brand Name</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="brandName" name="brandName"/>
	 </div>
	  </div>  

	   <div   class="form-group" style="background-color:PINK" >
	 <label for="brandLogo" class="control-label col-lg-2" style="background-color:GREEN" >Brand Logo</label>
	 <div class="col-lg-8">
	 <input type="File" class="form-control" id="brandLogo" name="brandLogo"/>
	 </div>
	  </div>  
		 


  <div class="form-group">
	 <label for="cid" class="control-label col-lg-2">Category </label>
	 <div class="col-lg-8">
	 	<?php 
	 	 include'dbcon.php';
		 $qry="select * from category ";
		 $result=mysqli_query($conn,$qry); ?>
		 <select name="cid">
		 	<option value=""> SELECT CATEGORY</option><?php
		 while($data=mysqli_fetch_assoc($result)) { ?>
        <option value="<?php echo $data['CATEGORY_ID'] ?>"> <?php echo $data['CATEGORY_NAME'] ?>
        </option>
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
