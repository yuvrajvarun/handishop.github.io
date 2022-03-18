<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.min.css"> 
 
   
    <title>Category</title>
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
	   <h1 style="color:green;font-family:algerian;">Category Details</h1>
	 <form class="form-group" action="category.signup.insert.php" method="post" enctype="multipart/form-data" >
	  <?php include'dbcon.php';
	   $qry="select CATEGORY_ID from category order by CATEGORY_ID desc limit 1";
	   $result=mysqli_query($conn,$qry);
	   $data=mysqli_fetch_assoc($result);
	   $var=$data['CATEGORY_ID'];
	   $var++;
	  ?>
	 <div   class="form-group" style="background-color:PINK" >
	 <label for="catId" class="control-label col-lg-2" style="background-color:GREEN" >ID</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control"  id="catId" name="catId" value="<?php echo $var?>" readonly/>
	 </div>
	  </div>   
		 
	 <div class="form-group">
	 <label for="catName" class="control-label col-lg-2">Name</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="catName" name="catName" />
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
