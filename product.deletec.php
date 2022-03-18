<?php
       include'dbcon.php'; 
      
       $idD =$_GET['id']; 
          	   	   
        $qry="DELETE FROM `cart_info` WHERE PRODUCT_ID ='$idD'";
		$result=mysqli_query($conn,$qry);
		
		if($qry){
		?>
		 <script>
		  alert('Row deleted');
		 </script>
		<?php
		header('location:homepageu.php');
		}else 
	   ?><script>
		  alert('Not deleted');
		 </script>
     