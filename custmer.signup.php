<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
   
    <title>Adding New Customer</title>
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
	   <h1 style="color:green;font-family:algerian;">Customer Sign Up</h1>
	 <form class="form-group" action="custmer.signup.insert.php" method="post" enctype="multipart/form-data" >
	  <?php
	  include'dbcon.php';
	  $qry="select CUSTMER_ID from custmer order by CUSTMER_ID desc limit 1"; 
	  $resultc=mysqli_query($conn,$qry);
	  $datac=mysqli_fetch_assoc($resultc);
     $idv=$datac['CUSTMER_ID'];
     $idv++;
	  ?>

	 <div class="form-group">
	 <label for="ide" class="control-label col-lg-2">Id</label>
	 <div class="col-lg-8">
	 <input type="text" value="<?php echo $idv ?>" class="form-control" id="ide" name="ide" />
	 </div>
	 </div>

	 <div   class="form-group" style="background-color:PINK" >
	 <label for="cname" class="control-label col-lg-2" style="background-color:GREEN" > Name</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="cname" name="cname"/>
	 </div>
	  </div>   
		 
	 <div class="form-group">
	 <label for="cadd" class="control-label col-lg-2">Address</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="cadd" name="cadd" />
	 </div>
	 </div>

  

	 <div class="form-group">
	 <label for="cmail" class="control-label col-lg-2">Mail Id</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="cmail" name="cmail" />
	 </div>
	 </div>
	 
	 
	 
	  <div class="form-group">
	 <label for="cmob" class="control-label col-lg-2">Phone no</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="cmob" name="cmob" />
	 </div>
	 </div>

	  <div class="form-group">
	 <label for="cPwd" class="control-label col-lg-2">Password</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" id="cPwd" name="cPwd"/>
	 </div>
	 </div>
	   
	     <div class="form-group">
	 <label for="cphoto" class="control-label col-lg-2">Id IMAGE</label>
	 <div class="col-lg-8">
	 <input type="FILE" class="form-control" id="cphoto" name="cphoto" />
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
