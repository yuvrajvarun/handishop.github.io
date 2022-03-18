<!doctype html>
<html lang="en">

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
	  <div class="container" style="background-color:yellow ;border:20px groove green " >
	    
	      <div class="col-lg-12 col-lg-offset-2" >
	   <h1 style="color:green;font-family:algerian;">Seller Sign Up</h1>
	 <form class="form-group" action="seller.signup.insert.php" method="post" enctype="multipart/form-data" >
	  
	 <div   class="form-group" style="background-color:PINK" >
	 <label for="sname" class="control-label col-lg-2" style="background-color:GREEN" > Name</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="sname" name="sname"/>
	 </div>
	  </div>   
		 
	 <div class="form-group">
	 <label for="sadd" class="control-label col-lg-2">Address</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="sadd" name="sadd" />
	 </div>
	 </div>
	 
	 
	 
	  <div class="form-group">
	 <label for="simge" class="control-label col-lg-2">IMAGE</label>
	 <div class="col-lg-8">
	 <input type="FILE" class="form-control" id="simge" name="simge" />
	 </div>
	 </div>
	   
	  <div class="form-group">
	 <label for="smob" class="control-label col-lg-2">MOBILE</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="smob" name="smob" />
	 </div>
	 </div>
	 
	   <div class="form-group">
	 <label for="seid" class="control-label col-lg-2">Email Id</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="seid" name="seid" />
	 </div>
	 </div>
	  
	      <div class="form-group">
	 <label for="spwd" class="control-label col-lg-2">Password</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="spwd" name="spwd" />
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
