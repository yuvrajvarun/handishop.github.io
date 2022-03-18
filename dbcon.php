<?php
$conn=mysqli_connect('localhost','root','','hand');
if(!$conn)
{ 
die('could not connect:'.mysqli_error()); 
}else { ?>
<script>
alert('connected successfully'); 
</script><?php
}?>