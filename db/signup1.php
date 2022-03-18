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
	   <h1 style="color:green;font-family:algerian;">User Sign Up</h1>
	 <form class="form-group" action="insert2.php" method="post" enctype="multipart/form-data" >
	  
	 <div   class="form-group" style="background-color:PINK" >
	 <label for="name" class="control-label col-lg-2" style="background-color:GREEN" > Name</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="name" name="name"/>
	 </div>
	  </div>   
		 
	 <div class="form-group">
	 <label for="class" class="control-label col-lg-2">Class</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="class" name="class" />
	 </div>
	 </div>
	 <div class="form-group">
	 <label for="subject" class="control-label col-lg-2">Subject</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="subject" name="subject"/>
	 </div>
	 </div>
	 <div class="form-group">
	 <label for="board" class="control-label col-lg-2">Board</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="board" name="board" />
	 </div>
	 </div>
	 
	 <div class="form-group">
	 <label for="fee" class="control-label col-lg-2">Fee</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="fee" name="fee" />
	 </div>
	 </div>
	 
	  <div class="form-group">
	 <label for="mob" class="control-label col-lg-2">Phone no</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="mob" name="mob" />
	 </div>
	 </div>
	   
	      <div class="form-group">
	 <label for="add" class="control-label col-lg-2">Full address</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="add" name="add" />
	 </div>
	 </div>
	 
	   <div class="form-group">
	 <label for="city" class="control-label col-lg-2">City</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="city" name="city" />
	 </div>
	 </div>
	 
	   <div class="form-group">
	 <label for="id" class="control-label col-lg-2">Id</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="id" name="id" />
	 </div>
	 </div>
	 
	 
	 <div class="form-group">
	 <label for="photo" class="control-label col-lg-2">Id IMAGE</label>
	 <div class="col-lg-8">
	 <input type="FILE" class="form-control" id="photo" name="photo" />
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
