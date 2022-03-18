
<!doctype html>
<html lang="en">
<?php
       include'dbcon.php'; 
      
       $idU =$_GET['id']; 
       	   	   
        $qry="SELECT * FROM `seller` WHERE SELLER_ID = '$idU'";
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
	 <form class="form-group" action="seller.update.insert.php" method="post" enctype="multipart/form-data" >
	  <img src ="<?php echo $data['SELLER_IMAGE'] ?>"height="100px" width="100px"  />
	 <div   class="form-group"  >
	 <label for="sname" class="control-label col-lg-2" > Name</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['SELLER_NAME'];?>" id="sname" name="sname"/>
	 </div>
	  </div>   
		 
	 <div class="form-group">
	 <label for="sadd" class="control-label col-lg-2">ADDRESS</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['SELLER_ADDRESS']; ?>" id="sadd"
	  name="sadd"/>
	 </div>
	 </div>
	 
	 
	 
	  <div class="form-group">
	 <label for="smob" class="control-label col-lg-2">Mobile no</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['SELLER_MOBILE_NO']?>" id="smob" name="smob" />
	 </div>
	 </div>
	   
	      <div class="form-group">
	 <label for="smail" class="control-label col-lg-2">Email Id</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['SELLER_EMAIL_ID']?>" id="smail" name="smail" />
	 </div>
	 </div>
	 

	 <div class="form-group">
	 <label for="spwd" class="control-label col-lg-2">Password</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['S_PASSWORD']?>" id="spwd" name="spwd" />
	 </div>
	 </div>
	 
	 
	 <div class="form-group">
	 <label for="sphoto" class="control-label col-lg-2">Id IMAGE</label>
	 <div class="col-lg-8">
	  <input type="FILE" class="form-control" id="sphoto" name="sphoto" />
	 </div>
	 </div>
	 
	  <div class="form-group">
	 <label for="sid" class="control-label col-lg-2">Id</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['SELLER_ID']?>" id="sid" name="sid" readonly />
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
