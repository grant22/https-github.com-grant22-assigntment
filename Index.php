<?php
 
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Login Page</title> 
  <link rel="stylesheet" href="css/style.css">
 </head>
 <body style="background-color:#7f8c8d">
       
	   <div id="main-wrapper">
	 <center> 
	 <h2>STUDENT LOGIN FORM</h2>
	  <h4>UNIVERSITY OF GHANA</h4>
	  <img src="images/ug.jpg"class="ug" /> 
	  </center> 
	    
	   <form class="myform" action="index.php" method="post" >
	     <label><b> Username</b></label><br>
		 <input type="text" class="inputvalues" placeholder="Username"required/><br>
		  
		  <label><b> Password</b></label><br>
		  <input type="password" class="inputvalues"placeholder="Password"required/><br>
		  
		  <input type="submit" id="login_btn" value="Login"/><br>
		  
		  <input type="button" id="register_btn" value="Register"/><br>
	   </form>
	   
	   </div>
	    
 </body>
</html>   