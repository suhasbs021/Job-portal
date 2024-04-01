<?php
require 'index.php';
require 'message.php';

if(isset($_POST["update_company"])){
    $company_id=$_POST['company_id'];
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
	
	
    $query = "UPDATE tblogin SET userid='$userid',name='$name',username='$username',password='$password',address='$address',gender='$gender',civilstatus='$civilstatus',birthplace='$birthplace',age='$age',email='$email',contactno='$contactno',degree='$degree',applicantphoto='$applicantphoto' WHERE userid='$company_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee details Updated Successfully";
        header("Location: emphiringnow.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee details Not Updated";
        header("Location: emphiringnow.php");
        exit(0);
    }
	
}
?>