<?php 
include'lgiachs.php';
?>
<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.min.css"> 
   <link rel="stylesheet" href="css/homea.css"> 
   <link rel="stylesheet" href="css/all.css">
   
    <title>home</title>

	
	<body>
	  
	  
	 <div >
	 	   
	 	    <div class="nav-area">
	 	   <ul>
	 	   	<li><a class="active" href="#"><i class="fas fa-home"></i>HOME </a></li>
	 	   	  	<li><a href="#"><i class="fas fa-home"></i>CATEGORY</a> 
	 	   	  	      <div class="sub">
                                    <ul>
                         	          <li><a href="category.signup.php">ADD</a></li>
                         	          <li><a href="category.display.php">DISPLAY</a></li>
                                                       
                                     </ul>                 
                                   </div>  
                              </li> 

	 	   	  	  <li><a href="#"><i class="fas fa-home"></i>BRAND</a>
                                        <div class="sub">
                                         <ul> 
                                          <li><a href="brand.signup.php"">ADD</a></li>
                                          <li><a href="brand.display.php"">DISPLAY</a></li>             
                                          </ul>                 
                                        </div>  
	 	   	  	  	</li>

	 	   	  <li><a href="#"><i class="fas fa-home"></i>PRODUCTS</a>
                               <div class="sub">
                                 <ul>
                                  <li><a href="">ADD </a></li>
                                  <li><a href="">DISPLAY</a></li>
                                  <li><a href="">GHI</a></li>                          
                                  </ul>                 
                                </div>  
	                  </li>

                                   <li><a href="#"><i class="fas fa-home"></i>CUSTMER</a>
                                        <div class="sub">
                                        <ul> 
                                          <li><a href="">ADD</a></li>
                                          <li><a href="">DISPLAY</a></li>
                                                                   
                                        </ul>                 
                                        </div>  

                                   </li>

                       <li><a href="#"><i class="fas fa-home"></i>SELLER</a>
                              <div class="sub">
                             <ul> 
                                <li><a href="">ADD</a></li>
                                 <li><a href="">DISPLAY</a></li>
                                                       
                             </ul>                 
                              </div>  
                       </li>

                        <li><a href="#"><i class="fas fa-home"></i>STOCK</a>
                               <div class="sub">
                                 <ul> 
                                 <li><a href="">ADD</a></li>
                                 <li><a href="">DISPLAY</a></li>
                                                         
                                 </ul>                 
                               </div>  
                          </li>



                            <li><a href="#"><i class="fas fa-home">BRAND</i></a>
                               <div class="sub">
                               <ul>
                                <li><a href="">ADD</a></li>
                                <li><a href="">DISPLAY</a></li>
                                <li><a href="">GHI</a></li>                          
                               </ul>                 
                               </div>  
	 	   	  	</li>


	 	   	  	  	  	  </ul>

	 	   	  	  	 <div class="log">
	 	           <ul>
	 	           	<li><a href="logouts.php"><i class="fas fa-users"></i><?PHP echo "Hai".$_SESSION['susername']?>, LOGOUT</a>

                      <div class="sub">
                         <ul>
                                <li><a href="logina.php ">ADMIN</a></li>
                                <li><a href="loginu.php">USER</a></li>      
                                 <li><a href="logins.php">SELLER</a></li>                    
                         </ul>                 
                       </div>  

	 	           	</li>
	 	           	</ul>
	 	           </div>
	 	 		  </div> 
	 	 </div>
	 	 </div>
	 
	 
	 
</body>
</html>
