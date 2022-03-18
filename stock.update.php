
<!doctype html>
<html lang="en">
<?php
       include'dbcon.php'; 
      
       $idU =$_GET['id']; 
       	   	   
        $qry="SELECT * FROM `stock` WHERE STOCK_ID = '$idU'";
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
	 <form class="form-group" action="stock.update.insert.php" method="post" enctype="multipart/form-data" >
	  <?php

	 $qryp="select * from product  ";
	 $resultp=mysqli_query($conn,$qryp);
	 
	 
	 ?>
	 
	  <div   class="form-group" style="background-color:PINK" >
	 <label for="Pid" class="control-label col-lg-2" style="background-color:GREEN" ></label>
	 <div class="col-lg-8">
	 	<select name="Pid" required><option value="">select Product</option>
	 		<?php 
           while($datap=mysqli_fetch_assoc($resultp)){
	 		?>
	 	 <option value="<?php echo $datap['PRODUCT_ID'] ?>"><?php echo $datap['PRODUCT_NAME']?></option>
	 	<?php }?>
	 	</select>
	
	 </div>
	  </div>  

<div class="form-group">
	 <label for="Dte" class="control-label col-lg-2">Date</label>
	 <div class="col-lg-8">
	 <input type="text" value="<?php echo  $data['DATE'] ;?>" class="form-control" id="Dte" name="Dte"
	 readonly />
	 </div>
	 </div>
	 <div class="form-group">
	 <label for="tim" class="control-label col-lg-2">Time</label>
	 <div class="col-lg-8">
	 <input type="text" value=" <?php echo  $data['TIME'] ?>" class="form-control" id="tim" name="tim" readonly/>
	 </div>
	 </div>
	  <div class="form-group">
	 <label for="Imp" class="control-label col-lg-2">Import</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value=" <?php echo  $data['IMPORT'] ?>" id="Imp" name="Imp" />
	 </div>
	 </div>
	 
	 <div class="form-group">
	 <label for="Exp" class="control-label col-lg-2">Export</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value=" <?php echo  $data['EXPORT'] ?>"id="Exp" name="Exp" />
	 </div>
	 </div>
	 

	   
	   <div class="form-group">
	 <label for="stid" class="control-label col-lg-2">Stock Id</label>
	 <div class="col-lg-8">
	 <input type="text" class="form-control" value="<?php echo  $idU ?>" id="stid" name="stid" readonly />
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
