<?php
       include'dbcon.php'; 
      
       $idD =$_GET['id']; 
          	   	   
        $qry="DELETE FROM `student` WHERE STUDENT_ID ='$idD'";
		$result=mysqli_query($conn,$qry);
		
		if($qry){
		?>
		 <script>
		  alert('Row deleted');
		 </script>
		<?php
		header('location:display.php');
		}else 
	   ?><script>
		  alert('Not deleted');
		 </script>
     