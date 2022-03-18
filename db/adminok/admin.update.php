2690
<!doctype html>
<html lang="en">
<?php
       include'dbcon.php'; 
      
       $idU =$_GET['id']; 
       	   	   
        $qry="SELECT * FROM `admin` WHERE ADMIN = '$idU'";
		$result=mysqli_query($conn,$qry);
		$data=mysqli_fetch_assoc($result);
		
	   ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.min.css"> 
 
   
    <title>Updating admin</title>
	<style>lo, world!
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
	 <form class="form-group" action="admin.update.insert.php" method="post" enctype="multipart/form-data" >
	  
	 <div   class="form-group"  >
	 <label for="ADMIN_NAME" class="control-label col-lg-2" > ADMIN_NAME</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['ADMIN_NAME'];?>" id="ADMIN_NAME" name="ADMIN_NAME" />
	 </div>
	  </div>   
		 
	 <div class="form-group">
	 <label for="PASSWORD" class="control-label col-lg-2">PASSWORD</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['PASSWORD']; ?>" id="PASSWORD" name="PASSWORD" />
	 </div>
	 </div>
	 
	 
	 <div class="form-group">
	 <label for="aid" class="control-label col-lg-2">ADMIN ID</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" style="background-color:FFA500;" 
	 placeholder="<?php echo $data['ADMIN_ID'] ?>" readonly id="aid" name="aid" />
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
