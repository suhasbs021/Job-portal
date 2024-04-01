<?php
require 'index.php';
if(isset($_POST["submit"])){
	$userid=$_POST["userid"];
	$name =$_POST["name"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$role=$_POST["role"];
	$dp=mysqli_query($conn,"SELECT * FROM tblusers WHERE username='$username' or userid='$userid'");
	if(mysqli_num_rows($dp)>0){
		echo
		"<script> alert('Username or Userid Already taken');</script>";
	
	}
	else{
			$query = "INSERT INTO tblusers VALUES('$userid','$name','$username','$password','$role')";
			mysqli_query($conn,$query);
			echo
			"<script> alert('registartion Successful');</script>";
		}
	
}
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel= "stylesheet" href="main.css">
<title>Registration</title>

</head>
<body>
<h2>Registration for Admin or Employer</h2>

<form class = "" action="" method="Post" autocomplete="off">
<label for="userid"> UserId:</label>
<input type="number" name="userid" id="userid" placeholder="Enter the registration Number (Almost 5)" required value="" required><br>
<label for="Name"> Name :</label>
<input type="text" name="name" id="name" placeholder="Enter the name" required value="" ><br>
<label for="Username"> Username :</label>
<input type="text" name="username" id="username" placeholder="Enter the Address" required value=""required><br>
<label for="Password"> Password :</label>
<input type="password" name="password" id="password" placeholder="Enter the Password" required value=""required><br>
<label for="Role">Role:</label>
<select name="role" id="role">
	<option>Select</option>
<option value="Adminstrater">Adminstrater</option>
<option value="Employer">Employer</option>
</select>
<button type="submit" name="submit">Register </button>

</form>
<br>
<a href="login2.php">Login</a><br>

</body>
</html>

