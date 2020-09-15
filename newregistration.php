<html>
<head>
<br>
<title>Registration form
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="stylelogin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	 
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<style type="text/css">
 h1            {color:black;
                text-align:center;
                background-color:gray;
                padding-top:20px;
                padding-bottom:30px;
                
               }
	h4 {	text-align:center;
          }
    		 div{ text-align:center;} 
			   
 
</style>
<body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
      <form  method="POST">


    <h1>REGISTER</h1>
    <div class="container-fluid">
	</br>
	  <div class="row">
    <div class="col-sm-6">
      <p><span class="input-group-addon glyphicon glyphicon-user">  <input type="text" name="firstname"  placeholder="First Name"  required /></span></p>
    </div>
    <div class="col-sm-6">
      <p><span class="input-group-addon glyphicon glyphicon-user"> <input type="text" name="lastname"  placeholder="Last Name" required /></span></p>
    </div>
    </div>
</br>
    <div class="row">
    <div class="col-sm-6">
      <p><span class="input-group-addon glyphicon glyphicon-user">  <input type="number" name="username" minlength="10" maxlength="12" placeholder="Aadhaar number" required /></span> </p>
    </div>
    <div class="col-sm-6">
      <p><span class="input-group-addon glyphicon glyphicon-phone">  <input type="number" class="input-medium bfh-phone" name="contact_no" maxlength="10" data-format="+1 (ddd) ddd-dddd" placeholder="Phone Number" required /></span></p>
    </div>
    </div>
</br>
    <div class="row">
    <div class="col-sm-6">
       <p><span class="input-group-addon glyphicon glyphicon-envelope"align="center">  <input type="email" name="email" maxlength="30" placeholder="Your Email Address" required /></span></p>
	 </div>
	 <div class="col-sm-6">
      <p><span class="input-group-addon"> <label for="usr">Gender:
	<select name="gender" id="state" class="form-control">
	<option value="Female">Female</option>
	<option value="Male">Male</option>
	<option value="Others">Others</option>
	</select></label></span></p>
    </div>
    </div>
</br>
    <div class="row">
    <div class="col-sm-6">
       <p><span class="input-group-addon "align="center"><span class="fa fa-birthday-cake"> <label>Date of Birth</label>
      <input type="date"  name="InputDOB" placeholder="Date of Birth value="DD/MM/YYYY" required></span></p>
    </div>
	<div class="col-sm-6">
      <p><span class="input-group-addon ">  <input type="text" name="occupation" maxlength="30" placeholder="Occupation" required /></span> </p>
    </div>
	</div>
</br>
	<div class="row">
    <div class="col-sm-6">
      <p><span class="input-group-addon glyphicon glyphicon-map-marker"> <label for="usr">State of residence:
<select name="state" id="state" class="form-control">
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select></label></span></p>
    </div>
    <div class="col-sm-6">
      <p><span class="input-group-addon glyphicon glyphicon-map-marker"> <label for="usr">State of work:
	  <select name="work" id="state" class="form-control">
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select></</label></span></p>
    </div>
    </div>

</br>
    <div class="row">
    <div class="col-sm-6">
      <p><span class="input-group-addon glyphicon glyphicon-map-marker"> <label for="usr" >Home Address:</label></span></p>
    </div>
    <div class="col-sm-6">
      <p><span class="input-group-addon glyphicon glyphicon-map-marker"> <label for="usr">Office Address:</label></span></p>
    </div>
    </div>
	  <div class="row-sm-3">
    <div class="col-sm-6">
      <p><textarea type="text" name="HomeAddress" required></textarea></p>
    </div>
    <div class="col-sm-6">
      <p><textarea type="text" name="OfficeAddress"  required ></textarea></p>
    </div>
  </div>
</br>
    <div class="row">
    <div class="col-sm-6">
      <p><span class="input-group-addon glyphicon glyphicon-lock"><input type="password" name="password" maxlength="8"  placeholder="Password" required /></p>
    </div>
    
    </div>

</br>
    <div class="row">
	<div class="col-sm-12">
       <p><label><input type="checkbox" required>:I agree with the terms & conditions</p>
	 </div>
	</div> 
</br> 
	<div class="row">
    <div class="col-sm-12">
       <p><label>
          <input type="checkbox">:Receive notifications and updates</p>
	</div>
	</div>
  </div>
  </br>
  <h4><input type="submit" name="insert" class="btn btn-primary" value="REGISTER" >
  </br>
  Already have an account? <a href="userlogin.html">Login</a>
</h4>
	
</form>
  </body>
</head>
</html>


<?php
if(isset($_POST["insert"]))
	{
		require('connection.php');
			



	 $query = "INSERT INTO insert_info(first_name,last_name,aadhar_number,contact_no,email,gender,dob,occupation,residense,work_residense,home_address,office_address,password) 
VALUES('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["username"]."','".$_POST["contact_no"]."','".$_POST["email"]."','".$_POST["gender"]."','".$_POST["InputDOB"]."','".$_POST["occupation"]."','".$_POST["state"]."','".$_POST["work"]."','".$_POST["HomeAddress"]."','".$_POST["OfficeAddress"]."','".$_POST["password"]."')";
       
	 $sql = mysqli_query($con, $query) or die(mysqli_error($con));
		if($sql)
		{
      		echo "ok";
			header("location: userlogin.php");
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("somthing wrong")';
			echo '</script>';
		}
	}
	

			
?>