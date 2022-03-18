
<!doctype html>
<html lang="en">
<?php
       include'dbcon.php'; 
      
       $idU =$_GET['id']; 
       	   	   
        $qry="SELECT * FROM `brand` WHERE BRAND_ID = '$idU'";
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
	 <form class="form-group" action="brand.update.insert.php" method="post" enctype="multipart/form-data" >
	  
	  
	  
	 <div   class="form-group" style="background-color:PINK" >
	 <label for="brand_name" class="control-label col-lg-2" style="background-color:GREEN" >Brand Name</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="brand_name" name="brand_name" value="<?php echo $data['BRAND_NAME'] ?>" />
	 </div>
	  </div>   

	   <div   class="form-group" style="background-color:PINK" >
	 <label for="brandLogo" class="control-label col-lg-2" style="background-color:GREEN" >Change Logo</label>
	 <div class="col-lg-8">
	 <input type="File" class="form-control" id="brandLogo" name="brandLogo" value="<?php echo $data['BRAND_LOGO'] ?>"/>
	 </div>
	  </div>  

	  <div class="form-group">
	 <label for="cid" class="control-label col-lg-2">Category </label>
	 <div class="col-lg-8">
	 	<?php 
	 	 
		 $qry2="select * from category ";
		 $result2=mysqli_query($conn,$qry); ?>
		 <select name="cid">
		 	<option value=""> SELECT CATEGORY</option><?php
		 while($data2=mysqli_fetch_assoc($result)) { ?>
        <option value="<?php echo $data2['CATEGORY_ID'] ?>"> <?php echo $data2['CATEGORY_NAME'] ?>
        </option>
		 <?php }
		 ?> </select>
	 
	 </div>
	 </div>
		 
	 <div class="form-group">
	 <label for="Bid" class="control-label col-lg-2">BRAND ID</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" style="background-color:FFA500;" value="<?php echo $data['BRAND_ID'] ?>" readonly id="Bid" name="Bid" />
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
