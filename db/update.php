2690
<!doctype html>
<html lang="en">
<?php
       include'dbcon.php'; 
      
       $idU =$_GET['id']; 
       	   	   
        $qry="SELECT * FROM `student` WHERE STUDENT_ID = '$idU'";
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
	 <form class="form-group" action="updateinsert.php" method="post" enctype="multipart/form-data" >
	  
	 <div   class="form-group"  >
	 <label for="name" class="control-label col-lg-2" > Name</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['NAME'];?>" id="name" name="name"/>
	 </div>
	  </div>   
		 
	 <div class="form-group">
	 <label for="class" class="control-label col-lg-2">Class</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['CLASS']; ?>" id="class" name="class" />
	 </div>
	 </div>
	 <div class="form-group">
	 <label for="subject" class="control-label col-lg-2">Subject</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo $data['SUBJECT_FOR_TUTION'];?>" id="subject" name="subject"/>
	 </div>
	 </div>
	 <div class="form-group">
	 <label for="board" class="control-label col-lg-2">Board</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo $data['BOARD']?>" id="board" name="board" />
	 </div>
	 </div>
	 
	 <div class="form-group">
	 <label for="fee" class="control-label col-lg-2">Fee</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['FEE']?>" id="fee" name="fee" />
	 </div>
	 </div>
	 
	  <div class="form-group">
	 <label for="mob" class="control-label col-lg-2">Phone no</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['MOBILE_NO']?>" id="mob" name="mob" />
	 </div>
	 </div>
	   
	      <div class="form-group">
	 <label for="add" class="control-label col-lg-2">Full address</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['FULL_ADDRESS']?>" id="add" name="add" />
	 </div>
	 </div>
	 
	   <div class="form-group">
	 <label for="city" class="control-label col-lg-2">City</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['CITY']?>" id="city" name="city" />
	 </div>
	 </div>
	 
	   <div class="form-group">
	 <label for="id" class="control-label col-lg-2">Id</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo$data['ID']?>" id="id" name="id" />
	 </div>
	 </div>
	 
	 
	 <div class="form-group">
	 <label for="photo" class="control-label col-lg-2">Id IMAGE</label>
	 <div class="col-lg-8"><tr>
	 <td> <img src ="<?php echo $data['ID_IMG'] ?>height="100px" width="100px" ">" id="photo" name="photo" /> </td></tr>
	  <input type="FILE" class="form-control" id="photo" name="photo" />
	 </div>
	 </div>
	 
	 <div class="form-group">
	 <label for="sid" class="control-label col-lg-2">STUDENT ID</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" style="background-color:FFA500;" placeholder="<?php echo $data['STUDENT_ID'] ?>" readonly id="sid" name="sid" />
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
