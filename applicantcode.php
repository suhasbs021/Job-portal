<?php
session_start();
require 'index.php';
if(isset($_POST['delete_applicant']))
{
    $applicant_id =  $_POST['delete_applicant'];

    $query = "DELETE FROM tbljobregistration WHERE registrationid='$applicant_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Job Deleted Successfully";
        header("Location: applicant.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "job Not Deleted";
        header("Location: applicant.php");
        exit(0);
    }
}

if(isset($_POST['submit_application']))
{
	$category_id = $_POST["submit_application"];
    echo "hi" ;
    $remarks = $_POST["remarks"];
   
	$query = "UPDATE tbljobregistration SET  remarks='$remarks' WHERE registrationid ='$category_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Application Submitted Successfully";
        header("Location: applicant.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Application  Not Updated";
        header("Location: applicant.php");
        exit(0);
    }
}
if(isset($_POST['submi_application']))
{
	$company_id = $_POST["company_id"];
    $remarks = $_POST["remark"];
    $dp=mysqli_query($conn,"SELECT * FROM tbljobregistration WHERE  registrationid ='$company_id'");
    $query = "INSERT INTO tbljobregistration (	remarks) VALUES ('$remarks')";
    mysqli_query($conn,$query);
    $_SESSION['message'] = "Application submitted Successfully";
    header("Location: applicant.php");
    exit(0);
   
	
}
   
if(isset($_POST['save_company']))
{
    $companyid = $_POST["companyid"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $contactno =  $_POST["contactno"];
	$dp=mysqli_query($conn,"SELECT * FROM tblcompany WHERE  companyid='$companyid'");
	if(mysqli_num_rows($dp)>0){
		 $_SESSION['message'] = "Company already exists";
        header("Location: addcompany.php");
        exit(0);
	
	}
	else{
		    $query = "INSERT INTO tblcompany (companyid	,name	,address,	contactno) VALUES ('$companyid','$name','$address','$contactno')";
			mysqli_query($conn,$query);
			 $_SESSION['message'] = "Company Created Successfully";
			header("Location: addcompany.php");
			exit(0);
		}
}
if(isset($_POST['apply_vacancy']))
{    
    $userid= $_SESSION["userid"] ;
    $username=$_SESSION["id"] ;   
    $job_id =  $_POST['apply_vacancy'];  
    $company_id=$_POST['apply_vacancy'];
    echo "com id $company_id";

    //$companyidquery = "SELECT * FROM tbljob WHERE jobid=$job_id ";
    $companyidqueryy = "SELECT * FROM tbljobregistration WHERE userid=$userid and jobid=$job_id ";
    $companyidquery_run = mysqli_query($conn,$companyidqueryy);
    $company = mysqli_fetch_array($companyidquery_run);		
    
    
    if(mysqli_num_rows($companyidquery_run)>0 ){
        $_SESSION['message'] = "Selected job is already applied. Please choose other job";
       header("Location: emphiringnow.php");
       exit(0);
   
   }

   //$company_id=$company['companyid'];
    $insertquery="INSERT INTO `tbljobregistration` (`REGISTRATIONID`, `COMPANYID`, `JOBID`, `USERID`, `APPLICANT`) 
                      VALUES (null, $company_id,$job_id , $userid, '$username');";
    $insertquery_run = mysqli_query($conn, $insertquery);    
     $_SESSION['message'] = "Job Applied Successfully";
        header("Location: emphiringnow.php");
        exit(0);
}
if(isset($_POST['appl_vacancy']))
{    
    $userid= $_SESSION["userid"] ;
    $username=$_SESSION["id"] ;   
    $job_id =  $_POST['apply_vacancy'];  

    $companyidquery = "SELECT * FROM tbljob WHERE jobid=$job_id ";
    $companyidqueryy = "SELECT userid and jobid  FROM tbljobregistration WHERE userid=$userid && jobid=$jobid ";
    $companyidquery_run = mysqli_query($conn,$companyidquery);
    $company = mysqli_fetch_array($companyidquery_run);		
    $company_id=$company['companyid'];
    
    if(mysqli_num_rows($companyidquery_run)>0 && $_post["jobid"]=$jobid){
        $_SESSION['message'] = "Selected Company or job is already applied. Please choose other Company";
       header("Location: emphiringnow.php");
       exit(0);
   
   }


    $insertquery="INSERT INTO `tbljobregistration` (`REGISTRATIONID`, `COMPANYID`, `JOBID`, `USERID`, `APPLICANT`) 
                      VALUES (null, $company_id,$job_id , $userid, '$username');";
    $insertquery_run = mysqli_query($conn, $insertquery);    
     $_SESSION['message'] = "Job Applied Successfully";
        header("Location: emphiringnow.php");
        exit(0);
}
if(isset($_POST['appl_vacancy']))
{    
    $userid= $_SESSION["userid"] ;
    $username=$_SESSION["id"] ;   
    $job_id =  $_POST['apply_vacancy'];  

    $companyidquery = "SELECT * FROM tbljob WHERE jobid=$job_id ";
    $companyidqueryy = "SELECT * FROM tbljobregistration WHERE userid=$userid ";
    $companyidquery_run = mysqli_query($conn, $companyidquery);
    $company = mysqli_fetch_array($companyidquery_run);		
    $company_id=$company['companyid'];
    
    if(mysqli_num_rows($companyidquery_run)>0&& $_POST["userid"]==mysqli_query($conn,"SELECT * FROM tblogin WHERE userid='$userid'")){
        $_SESSION['message'] = "Selected job is already applied. Please choose other job";
       header("Location: emphiringnow.php");
       exit(0);
   
   }


    $insertquery="INSERT INTO `tbljobregistration` (`REGISTRATIONID`, `COMPANYID`, `JOBID`, `USERID`, `APPLICANT`) 
                      VALUES (null, $company_id,$job_id , $userid, '$username');";
    $insertquery_run = mysqli_query($conn, $insertquery);    
     $_SESSION['message'] = "Job Applied Successfully";
        header("Location: emphiringnow.php");
        exit(0);
}

if(isset($_POST['appl_vacancy']))
{    
    $userid= $_SESSION["userid"] ;
    $username=$_SESSION["id"] ;   
    $job_id =  $_POST['apply_vacancy'];  

    $dp=mysqli_query($conn,"SELECT * FROM  WHERE username='$username' or userid='$userid'");
	if(mysqli_num_rows($dp)>0){
		echo
		"<script> alert('Username or Userid Already taken');</script>";
	
	}
    
    if(mysqli_num_rows($companyidquery_run)>0&& $_POST["userid"]==mysqli_query($conn,"SELECT * FROM tblogin WHERE userid='$userid'")){
        $_SESSION['message'] = "Selected job is already applied. Please choose other job";
       header("Location: emphiringnow.php");
       exit(0);
   
   }


    $insertquery="INSERT INTO `tbljobregistration` (`REGISTRATIONID`, `COMPANYID`, `JOBID`, `USERID`, `APPLICANT`) 
                      VALUES (null, $company_id,$job_id , $userid, '$username');";
    $insertquery_run = mysqli_query($conn, $insertquery);    
     $_SESSION['message'] = "Job Applied Successfully";
        header("Location: emphiringnow.php");
        exit(0);
}

  

?>
  
  