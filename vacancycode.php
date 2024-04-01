<?php
session_start();
require 'index.php';
if(isset($_POST['delete_vacancy']))
{
    $jobid =  $_POST['delete_vacancy'];

    $query = "DELETE FROM tbljob WHERE jobid='$jobid' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "vacancy Deleted Successfully";
        header("Location: vacancy.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "vacancy Not Deleted";
        header("Location: vacancy.php");
        exit(0);
    }
}


if(isset($_POST['update_vacancy']))
{
    
    $jobid = $_POST["update_vacancy"];
	$companyid = $_POST["companyid"];
	$category = $_POST["category"];
    $occupationtitle = $_POST["occupationtitle"];
    $number_emp_required = $_POST["number_emp_required"];
	$salary = $_POST["salary"];
	$duration_employement = $_POST["duration_employement"];
	$workexperience = $_POST["workexperience"];
	$jobdiscription = $_POST["jobdiscription"];
	$gender = $_POST["gender"];

    $location = $_POST["location"];
   
    

    $query = "UPDATE tbljob SET companyid= '$companyid', category='$category', occupationtitle='$occupationtitle',number_emp_required='$number_emp_required',salary='$salary',duration_employement='$duration_employement',workexperience='$workexperience',jobdiscription='$jobdiscription',gender='$gender',location='$location'  WHERE jobid='$jobid' ";
    //$query = "UPDATE tbljob SET   occupationtitle='Civil3' WHERE jobid='$jobid' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "vacancy ";
        $_SESSION['message'] = "vacancy Updated Successfully";
        header("Location: vacancy.php");
        exit(0);
    }
    // elseif($_POST["jobid"]==""||$_POST["companyid"]==""||$_POST["category"]==""||$_POST["occupationtitle"]==""||$_POST["number_emp_required"]==""||$_POST["salary"]==""||$_POST["duration_employement"]==""||$_POST["workexperience"]==""||$_POST["jobdiscription"]==""||$_POST["gender"]==""||$_POST["dateposted"]==""||$_POST["location"]==""){
    //     $_SESSION['message'] = "All fields are required";
    //     header("Location: addvacancy.php");
    //     exit(0);
    // }
    else
    {
        $_SESSION['message'] = "vacancy Not Updated";
        header("Location: vacancy.php");
        exit(0);
    }

}

   
if(isset($_POST['save_vacancy']))
{
    
    $jobid = $_POST["jobid"];
	$companyid = $_POST["companyid"];
	$category = $_POST["category"];
    $occupationtitle = $_POST["occupationtitle"];
    $number_emp_required = $_POST["number_emp_required"];
	$salary = $_POST["salary"];
	$duration_employement = $_POST["duration_employement"];
	$workexperience = $_POST["workexperience"];
	$jobdiscription = $_POST["jobdiscription"];
	$gender = $_POST["gender"];
	$dateposted = $_POST["dateposted"];
    $location = $_POST["location"];

	$dp=mysqli_query($conn,"SELECT * FROM tbljob WHERE  jobid='$jobid'");
	if(mysqli_num_rows($dp)>0){
		 $_SESSION['message'] = "vacancy already exists";
        header("Location: addvacancy.php");
        exit(0);
	
	}
    // elseif($_POST["jobid"]==""||$_POST["companyid"]==""||$_POST["category"]==""||$_POST["occupationtitle"]==""||$_POST["number_emp_required"]==""||$_POST["salary"]==""||$_POST["duration_employement"]==""||$_POST["workexperience"]==""||$_POST["jobdiscription"]==""||$_POST["gender"]==""||$_POST["dateposted"]==""||$_POST["location"]==""){
    //     $_SESSION['message'] = "All fields are required";
    //     header("Location: addvacancy.php");
    //     exit(0);
    // }
	else{
		    $query = "INSERT INTO tbljob(jobid,companyid,category,occupationtitle,number_emp_required,salary,duration_employement,workexperience,jobdiscription,gender,dateposted,location) VALUES ('$jobid','$companyid','$category','$occupationtitle','$number_emp_required','$salary','$duration_employement','$workexperience','$jobdiscription','$gender','$dateposted','$location')";
			mysqli_query($conn,$query);
			 $_SESSION['message'] = "vacancy Created Successfully";
			header("Location: addvacancy.php");
			exit(0);
		}
}

  

?>
  
  