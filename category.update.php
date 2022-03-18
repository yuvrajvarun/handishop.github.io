
<!doctype html>
<html lang="en">
<?php
       include'dbcon.php'; 
      
       $idU =$_GET['id']; 
       	   	   
      $qry="SELECT * FROM `category` WHERE CATEGORY_ID = '$idU'";
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
	   <h1 style="color:green;font-family:algerian;">UPDATE CATEGORY</h1>
	 <form class="form-group" action="category.update.insert.php" method="post" enctype="multipart/form-data" >
	  
	  
		 
	 <div class="form-group">
	 <label for="catName" class="control-label col-lg-2">NAME</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="catName" name="catName" value="<?php echo $data['CATEGORY_NAME'] ?>" />
	 </div>
	 </div>
	 <div class="form-group">
	 <label for="catId" class="control-label col-lg-2">CATEGORY ID</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" style="background-color:FFA500;" readonly value="<?php echo $data['CATEGORY_ID'] ?>"  id="catId" name="catId" />
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
