<?php
require 'index.php';
if(!empty($_SESSION["userid"])){
  header("Location: login2.php");
}
if(isset($_POST["submit"])){
  $usernameuserid = $_POST["usernameuserid"];
  $password = $_POST["password"];
  $role=$_POST["role"];
  $result = mysqli_query($conn, "SELECT * FROM tblusers WHERE username = '$usernameuserid' OR userid = '$usernameuserid' ");
  $row=mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result)>0){
    if($password == $row['password']){
      session_start();
      $_SESSION["id"]=$usernameuserid;
      $_SESSION["login"] = true;
      $_SESSION["userid"] = $row["userid"];
      header("Location: home3.html");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
	<link rel= "stylesheet" href="main.css">
    <title>Login</title>
  </head>
  <body>
    <h2>Employer Or Admin Login</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="usernameuserid">Username or UserID : </label>
      <input type="text" name="usernameuserid" id = "usernameuserid" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <button type="submit" name="submit">Login</button>
	  <label for="Role">Role:</label>
	<select name="role" id="role">
    <option>Select</option>
	<option value="Adminstrater">Adminstrater</option>
	<option value="Employer">Employer</option>
	</select>
    </form>
    <br>
    <a href="registration2.php">Registration</a><br>
	<a href="main.php">Back</a><br>
  </body>
</html>