<?php
       include'dbcon.php'; 
      
       $idD =$_GET['id']; 
          	   	   
        $qry="DELETE FROM `admin` WHERE ADMIN_ID ='$idD'";
		$result=mysqli_query($conn,$qry);
		
		if($qry){
		?>
		 <script>
		  alert('Row deleted');
		  </script>
		<?php
		header('location:admin.display.php');
		}else 
	   ?><script>
		  alert('Not deleted');
		 </script>
           <?php 
             header('location:admin.display.php');
            ?>