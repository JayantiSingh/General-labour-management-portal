<!DOCTYPE html>
<html>
<head>
<title>Member Login </title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<style type="text/css">
   h1{ text-align:center;
                padding-top:100px;
                padding-bottom:30px;
				width:600px;
				 margin-left:300px;
       
                }
				
			
   h3{ text-align:center;
			     padding-bottom:150px;
				 width:600px;
				 margin-left:300px;
				 }
  </style>
  <body>
  <h1>लॉग इन<br>User Login</h1>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <form action="insert.php" method="POST"> 
  
  <h3>
   
   
    <span class="input-group-addon glyphicon glyphicon-user">  <input type="number" name="username" maxlength="12" placeholder="Aadhaar number" required /></span>
   </br>
    <span class="input-group-addon glyphicon glyphicon-lock">  <input type="password" name="password" maxlength="8" placeholder="Password" required /></span>
   </br>
	</br>
	<input type="submit" name="login" class="btn btn-primary" value="Login" >
	</br>
	</br>
	<div class="mt-2">
            <p><a href="newregistration.php">Do not have an account yet? Register.</a></p>
          </div>
	</br>
	  <!--<label>
	  <input type="checkbox">:Remember me
	  </br>
	</br>
	<a href="#">Forgot your password?</a>
	</h3>-->
  </body>
</html>