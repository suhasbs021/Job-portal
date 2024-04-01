<?php
require 'index.php';

if(isset($_POST["submit"])){
	$userid=$_POST["userid"];
	$name =$_POST["name"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$confirmpassword=$_POST["confirmpassword"];
	$address=$_POST["address"];
	$gender=$_POST["gender"];
	$civilstatus=$_POST["civilstatus"];
	$birthplace=$_POST["birthplace"];
	$age=$_POST["age"];
	$email=$_POST["email"];
	$contactno=$_POST["contactno"];	
	$degree=$_POST["degree"];
	$applicantphoto=$_POST["applicantphoto"];
	
	$dp=mysqli_query($conn,"SELECT * FROM tblogin WHERE username='$username' or userid='$userid'");
	if(mysqli_num_rows($dp)>0){
		echo
		"<script> alert('Username or Userid Already taken');</script>";
	
	}
	else{
		if($password == $confirmpassword){
			$query = "INSERT INTO tblogin VALUES('$userid','$name','$username','$password','$address','$gender','$civilstatus','$birthplace','$age','$email','$contactno','$degree','$applicantphoto')";
			mysqli_query($conn,$query);
			echo
			"<script> alert('registartion Successful');</script>";
		}
		else{
			echo
			"<script> alert('password doesnot match');</script>";
		}
	}
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Registration</title>
<style>
        body {
            background-image: url('pexels-lex-photography-1109543.jpg');
            
             background-repeat: no-repeat;
             background-position: center;
            background-size: cover;
            height: 100vh;
            
        }
        
        
    </style>

</head>
<body style="text-align: center;">

<h2>Registration</h2>
<form class = "f" action="" method="Post" autocomplete="off">
<div class="bo">
<label for="userid"> UserId:</label>
<input type="number" name="userid" placeholder="Enter the Usreid" id="userid" required value="">
<br>
<br>
<label for="Name"> Name :</label>
<input type="text" name="name" placeholder="Enter the name" id="name" required value="">
<br>
<br>
<label for="Username"> Username :</label>
<input type="text" name="username" placeholder="Enter the Username" id="username" required value="">
<br>
<br>
<label for="Password"> Password :</label>
<input type="password" name="password" placeholder="Enter the password"  id="password" required value="">
<br>
<br>
<label for="confirmpassword"> Confirmpassword :</label>
<input type="password" name="confirmpassword" placeholder="Enter the password again" id="confirmpassword" required value="">
<br>
<br>
<label for="address">  Address :</label>
<input type="text" name="address" id="address" placeholder="Enter the Address" required value="">
<br>
<br>
<label for="gender">  Gender :</label>
<select name="gender" id="gender">
	<option>Select</option>
<option value="male">Male</option>
<option value="female">Female</option>
							</select>
							<br>
							<br>
<label for="civilstatus">  Civilstatus :</label>
<select name="civilstatus" id="civilstatus	">
	<option>Select</option>
<option value="married">Married</option>
<option value="single">Single</option>
<option value="widow">widow</option>
							</select>
							<br>
							<br>
<label for="birthplace">  Birthplace :</label>
<input type="text" name="birthplace" placeholder="Enter the Birthplace" id="birthplace" required value="">
<br>
<br>
<label for="age"> Age :</label>
<input type="number" name="age" id="age" placeholder="Enter the Age" min="20"  max="60" required value="">
<br>
<br>
<label for="email"> Email  :</label>
<input type="email" name="email" id="email" placeholder="Enter the Emial" required value="">
<br>
<br>
<label for="contactno"> Contactno  :</label>
<input type="number" name="contactno" placeholder="Enter the Contact Number" id="contactno" required value="">
<br>
<br>
<label for="degree">  Degree :</label>
<input type="text" name="degree" id="degree" placeholder="Enter the degree" required value="">
<br>
<br>
<label for="applicantphoto"> Resume(in pdf format) :</label>
<input type="file" name="applicantphoto" id="applicantphoto" required value="">
<br>
<br>
<div class="mb-3">
                                        <button type="submit" name="submit" class="btn btn-primary">
                                            register
                                        </button>
                                    </div>
<div class="mb-3">
<a href="king.php" class="btn btn-primary side-end-end">Login</a>	
</div>
</form>
</div>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

