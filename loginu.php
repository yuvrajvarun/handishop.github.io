
<!doctype html>
<html lang="en">	            	

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.min.css"> 
   <link rel="stylesheet" href="css/all.css">
   <link rel="stylesheet" href="css/loginu.css"> 

    <title>home</title>

	
	<body>
	 <form class="form-group" action="" method="post">
	 	   
	 	    <div class="login-box">
	 	        <img src="handimg/LGUSER.PNG" class="admlog" >
	 	       <label for="username">EMAIL</label>
	 	         <input type="text" id="username" name="username">	
	 	         <label for="pass">PASSWORD</label>
	 	         <input type="text" id="pass" name="pass">
	 	      
	 	 
	      <div class="form-group" >
	     <div class="col-lg-1 col-lg-offset-2">
      	<button type="submit" name="LOGIN" value="LOGIN" class="btn btn-primary">LOGIN</button>       
	      </div>
	       </div>
                 <div  class="reg"> 
                 	<label class="btn btn-primary"><?php echo"Don't have account" ?></label>
             <a style="text-decoration:none ;" href="user.add.php" class="btn btn-primary">REGISTER HERE</a></div>
	       </div>
	       <?php 
	            if(isset($_POST['LOGIN'])){ 
	             include'dbcon.php';          
                $uname=$_POST['username'];
                $pwd=$_POST['pass'];
                 $qry="SELECT * FROM `custmer` where CUST_EMAIL='$uname' AND C_PASSWORD='$pwd'" ;
                    
                $result=mysqli_query($conn,$qry); 

                  if (mysqli_num_rows($result)>0){
                  	while ($data=mysqli_fetch_assoc($result)) {
                  	         session_start();
                  	        $_SESSION['custname']=$data['CUST_NAME'];
                  	          $_SESSION['CPASSWORD']=$data['C_PASSWORD'];
                  	          $_SESSION['CUSTMID']=$data['CUSTMER_ID'];
                  	           $_SESSION['userrole']=$data['USER_ROLE'];
                  	            header('location:homepageu.php');
                  	}
                  }else{ ?>
	            	<script>alert('INVALID USERNAME OR PASSWORD')</script><?php
	                  }

	            }
	        ?>
	 </form>
	 
</body>
</html>
