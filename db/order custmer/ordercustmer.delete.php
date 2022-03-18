<?php
       include'dbcon.php'; 
      
       $idD =$_GET['id']; 
          	   	   
        $qry="DELETE FROM `product` WHERE PRODUCT_ID ='$idD'";
		$result=mysqli_query($conn,$qry);
		
		if($qry){
		?>
		 <script>
		  alert('Row deleted');
		 </script>
		<?php
		header('location:product.display.php');
		}else 
	   ?><script>
		  alert('Not deleted');
		 </script>
     