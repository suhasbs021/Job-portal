<?php
session_start();
require 'index.php';
if(isset($_POST['delete_user']))
{
    $user_id =  $_POST['delete_user'];

    $query = "DELETE FROM tblusers WHERE userid='$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "user Deleted Successfully";
        header("Location: user.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "user Not Deleted";
        header("Location: company.php");
        exit(0);
    }
}

if(isset($_POST['update_user']))
{
	$user_id = $_POST["user_id"];
   
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password =  $_POST["password"];
    $role =  $_POST["role"];
	$query = "UPDATE tblusers SET  name='$name', username='$username', password='$password',role='$role'  WHERE userid='$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "user Updated Successfully";
        header("Location: user.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "user Not Updated";
        header("Location: user.php");
        exit(0);
    }
}
if(isset($_POST['update_profile']))
{
	$user_id = $_POST["user_id"];
   
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password =  $_POST["password"];
    $role =  $_POST["role"];
	$query = "UPDATE tblusers SET  name='$name', username='$username', password='$password',role='$role'  WHERE userid='$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "user Updated Successfully";
        header("Location: profile1.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "user Not Updated";
        header("Location: profile1.php");
        exit(0);
    }
}

   
if(isset($_POST['save_user']))
{
    $userid = $_POST["userid"];
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password =  $_POST["password"];
	 $role =  $_POST["role"];
	$dp=mysqli_query($conn,"SELECT * FROM tblusers WHERE username='$username' or userid='$userid'");
	if(mysqli_num_rows($dp)>0){
		 $_SESSION['message'] = "user already exists";
        header("Location: adduser.php");
        exit(0);
	
	}
	else{
		    $query = "INSERT INTO tblusers VALUES('$userid','$name','$username','$password','$role')";
			mysqli_query($conn,$query);
			 $_SESSION['message'] = "user Created Successfully";
			header("Location: adduser.php");
			exit(0);
		}
}

  

?>
  
  