<?php
       include'dbcon.php'; 
      
       $idD =$_GET['id']; 
          	   	   
        $qry="DELETE FROM `category` WHERE CATEGORY_ID='$idD'";
		$result=mysqli_query($conn,$qry);
		
		if($qry){
		?>
		 <script>
		  alert('CATEGORY DELETED');
		 </script>
		<?php
		header('location:category.display.php');
		}else 
	   ?><script>
		  alert('UNABLE TO DELETE');
		 </script>
     