<?php

require 'index.php';
if(!empty($_SESSION["userid"])){
  header("Location: king.php");
}
if(isset($_POST["submit"])){
  $usernameuserid = $_POST["usernameuserid"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tblogin WHERE username = '$usernameuserid' OR userid = '$usernameuserid'");
  $row=mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result)>0){
    if($password == $row['password']){
	session_start();
      $_SESSION["id"]=$usernameuserid;
      $_SESSION["login"] = true;
      $_SESSION["userid"] = $row["userid"];
      echo
      "<script> alert('login sucessfull'); </script>";
      header("Location: home1.html");
      echo
      "<script> alert('login sucessfull'); </script>";
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
    <style>
        body {
            background-image: url('sincerely-media-HoEYgBL_Gcs-unsplash.jpg');
            
             background-repeat: no-repeat;
             background-position: center;
            background-size: cover;
            height: 100vh;
            
        }
        
        
    </style>
  </head>
  <body>
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="usernameuserid">Username or Userid : </label>
      <input type="text" name="usernameuserid" id = "usernameuserid" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <button type="submit" name="submit">Login</button>
    </form>
    <br>
    <a href="registration.php">Registration</a><br>
    <a href="main.php">Back</a>
  </body>
</html>