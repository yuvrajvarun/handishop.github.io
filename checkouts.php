<?php 
include'lgiachu.php';
$rowcart=$_SESSION['CUSTMID'];
$quantity=$_POST['quantity'];
$dp=$_POST['idPc'];

?>
<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.min.css"> 
   
   <link rel="stylesheet" href="css/all.css">
   <link rel="stylesheet" type="text/css" href="css/styleT.css">

    <title>home</title>

    
    <body>

<form action="placeorders.php" method="post">
    <div class="form-group">
    <label for="pm"  class="control-label" class="form-control" class="col-lg-2">PAYMENT MODE:</label>
    <div  class="form-control" class="col-lg-8">
     <div><input type="radio" name="pm" id="pm" value="CARD" >CARD</div> 
     <div><input type="radio" name="pm" id="pm" value="NET BANKING" >NET BANKING</div>
     <div><input type="radio" name="pm" id="pm" value="UPI">UPI</div>
     <div><input type="radio" name="pm" id="pm" value="COD">CASH ON DELEVIERY</div>
    </div>
    </div>
    <input type="hidden" name="quantity" id="quantity" value="<?php echo $quantity?>">
    <input type="hidden" name="pid" id="pid" value="<?php echo $dp?>">
    <button type="submit" class="btn btn-primary">PLACE ORDER</button>
    </form>
   

</body>
</html>