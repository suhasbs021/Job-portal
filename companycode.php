<?php
session_start();
require 'index.php';
if(isset($_POST['delete_company']))
{
    $company_id =  $_POST['delete_company'];

    $query = "DELETE FROM tblcompany WHERE companyid='$company_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Company Deleted Successfully";
        header("Location: company.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Company Not Deleted";
        header("Location: company.php");
        exit(0);
    }
}

if(isset($_POST['update_company']))
{
	$company_id = $_POST["company_id"];
  
    $address = $_POST["address"];
    $contactno =  $_POST["contactno"];
	$query = "UPDATE tblcompany SET   address='$address',contactno='$contactno' WHERE companyid='$company_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "company Updated Successfully";
        header("Location: company.php");
        exit(0);
    }
   
    else
    {
        $_SESSION['message'] = "company Not Updated";
        header("Location: company.php");
        exit(0);
    }
}

   
if(isset($_POST['save_company']))
{
    $companyid = $_POST["companyid"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $contactno =  $_POST["contactno"];
	$dp=mysqli_query($conn,"SELECT * FROM tblcompany WHERE  companyid='$companyid' or  name='$name'     ");
	if(mysqli_num_rows($dp)>0){
		 $_SESSION['message'] = "Company already exists";
        header("Location: addcompany.php");
        exit(0);
	}
	elseif($_POST["companyid"]==""||$_POST["name"]==""||$_POST["address"]==""||$_POST["contactno"]==""){
        $_SESSION['message'] = "All fields Required";
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

  

?>
  
  