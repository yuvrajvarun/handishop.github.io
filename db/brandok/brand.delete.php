<?php
       include'dbcon.php'; 
      
       $idD =$_GET['id']; 
          	   	   
        $qry="DELETE FROM `brand` WHERE BRAND_ID ='$idD'";
		$result=mysqli_query($conn,$qry);
		
		if($qry){
		?>
		 <script>
		  alert('Brand deleted');
		 </script>
		<?php
		header('location:brand.display.php');
		}else 
	   ?><script>
		  alert('Unable to deleted');
		 </script>
     