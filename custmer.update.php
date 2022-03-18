
<!doctype html>
<html lang="en">
<?php
       include'dbcon.php'; 
      
       $idU =$_GET['id']; 
       	   	   
      $qry="SELECT * FROM `custmer` WHERE CUSTMER_ID = '$idU'";
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
	   <h1 style="color:green;font-family:algerian;">Customer update form</h1>
	 <form class="form-group" action="custmer.update.insert.php" method="post" enctype="multipart/form-data" >
	  
<div   class="form-group"  >
	 <label for="cid" class="control-label col-lg-2" >ID</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['CUSTMER_ID'];?>" id="cid" name="cid" readonly/>
	 </div>
	  </div>   

	 <div   class="form-group"  >
	 <label for="cname" class="control-label col-lg-2" >Name</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['CUST_NAME'];?>" id="cname" name="cname"/>
	 </div>
	  </div>   

	  <div class="form-group">
	 <label for="cadd" class="control-label col-lg-2">ADDRESS</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo $data['CUST_ADDRESS'];?>" id="cadd" name="cadd"/>
	 </div>
	 </div>
		 
	 <div class="form-group">
	 <label for="cmail" class="control-label col-lg-2">EMAIL ID</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['CUST_EMAIL']; ?>" id="cmail" name="cmail" />
	 </div>
	 </div>
	 


	 <div class="form-group">
	 <label for="cmob" class="control-label col-lg-2">Mobile no</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo $data['CUST_MOBILE']?>" id="cmob" name="cmob" />
	 </div>
	 </div>
	 
	 <div class="form-group">
	 <label for="cimg" class="control-label col-lg-2">IMAGE</label>
	 <div class="col-lg-8">
	 <input type="FILE" class="form-control" value="<?php echo$data['CUSTMER_IMAGE']?>" id="cimg" name="cimg"  required/>
	 </div>
	 </div>
	 
	  
	   
	      <div class="form-group">
	 <label for="cpwd" class="control-label col-lg-2">PASSWORD</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['C_PASSWORD']?>" id="cpwd" name="cpwd" />
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

