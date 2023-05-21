<?php session_start()?>

<html>
<head>
<title>Admin login form</title>
<style>
   
   
   #loginform{
	   width:400px;
	   height:200;
	   background-color:#abbc;
	   padding:50px;
   }
   
   
   p{color:red;}
   
   
</style>


</head>


  <body>
  
  
     <center>
	 
	 
        <div id="loginform">
        
           <h3>Admin Login</h3>
		      <form action="login.php"method="post">
		         User Id:<input type="text" name="uid" required><br><br>
			     Password:<input type="password" name="pass" required><br><br>
			     <input type="submit" value="login"><br>
			   </form>
			<?php if(isset($_SESSION['id']))
				echo "<p>incorrect user id or password.</p>";
			   session_destroy();
			
			?>   
			   
	    </div>
		
     </center>
	 
  </body>
  
</html>