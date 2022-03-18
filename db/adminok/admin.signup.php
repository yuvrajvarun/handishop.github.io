<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.min.css"> 
 
   
    <title>Adding another Administrator</title>
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
	   <h1 style="color:green;font-family:algerian;">Please enter details</h1>
	 <form class="form-group" action="admin.signup.insert.php" method="post" enctype="multipart/form-data" >
	  
	 <div   class="form-group" style="background-color:PINK" >
	 <label for="ADMIN_ID" class="control-label col-lg-2" style="background-color:GREEN" >ADMIN_ID</label>
	 <div class="col-lg-8">
	 <input type="text " class="form-control" id="ADMIN_ID" name="ADMIN_ID" readonly />
	 </div>
	  </div>   
		 
	 <div class="form-group">
	 <label for="ADMIN_NAME" class="control-label col-lg-2">ADMIN_NAME</label>
	 <div class="col-lg-8">
	 <input type="text"  class="form-control" id="ADMIN_NAME" name="ADMIN_NAME" required />
	 </div>
	 </div>
	 <div class="form-group">
	 <label for="PASSWORD" class="control-label col-lg-2">PASSWORD</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="PASSWORD" name="PASSWORD" required />
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
