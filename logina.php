
<!doctype html>
<html lang="en">	            	

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.min.css"> 
   <link rel="stylesheet" href="css/all.css">
   <link rel="stylesheet" href="css/login.css"> 

    <title>home</title>

	
	<body>
	 <form class="form-group" action="" method="post">
	 	   
	 	    <div class="login-box">
	 	        <img src="handimg/adminlogin1.PNG" class="admlog" >
	 	       <label for="username">USERNAME</label>
	 	         <input type="text" id="username" name="username">	
	 	         <label for="pass">PASSWORD</label>
	 	         <input type="text" id="pass" name="pass">
	 	      
	 	 
	      <div class="form-group">
	     <div class="col-lg-1 col-lg-offset-2">
      	<button type="submit" name="LOGIN" value="LOGIN" class="btn btn-primary">LOGIN</button>
	      </div>
	       </div>
	       </div>
	       <?php 
	            if(isset($_POST['LOGIN'])){ 
	             include'dbcon.php';          
                $uname=$_POST['username'];
                $pwd=$_POST['pass'];
                 $qry="SELECT * FROM `admin` where ADMIN_NAME='$uname' AND PASSWORD='$pwd'" ;
                    
                $result=mysqli_query($conn,$qry); 

                  if (mysqli_num_rows($result)>0){
                  	while ($data=mysqli_fetch_assoc($result)) {
                  	         session_start();
                  	        $_SESSION['ausername']=$data['ADMIN_NAME'];
                  	          $_SESSION['aPASSWORD']=$data['PASSWORD'];
                  	           $_SESSION['auserrole']=$data['USER_ROLE'];
                  	            header('location:homepagea.php');
                  	}
                  }else{ ?>
	            	<script>alert('INVALID USERNAME OR PASSWORD')</script><?php
	                  }

	            }
	        ?>
	 </form>
	 
</body>
</html>
