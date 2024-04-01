<?php
session_start();
require 'index.php';
if(isset($_POST['delete_employee']))
{
    $employee_id =  $_POST['delete_employee'];

    $query = "DELETE FROM tblemployees WHERE id='$employee_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Deleted Successfully";
        header("Location: employee.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Deleted";
        header("Location: employee.php");
        exit(0);
    }
}

if(isset($_POST['update_employee']))
{
	$company_id = $_POST["update_employee"];
 
    $name = $_POST["name"];
    $address = $_POST["address"];
    $birthplace =  $_POST["birthplace"];
	$age = $_POST["age"];
	$gender = $_POST["gender"];
	$civilstatus = $_POST["civilstatus"];
	$phoneno = $_POST["phoneno"];
	$email = $_POST["email"];
	$position = $_POST["position"];
	$companyid = $_POST["companyid"];
	$query = "UPDATE tblemployees SET  name='$name', birthplace='$birthplace', age='$age',gender='$gender',civilstatus='$civilstatus',phoneno='$phoneno',email='$email',position='$position',companyid='$companyid' WHERE id='$company_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Updated Successfully";
        header("Location: employee.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Updated";
        header("Location: employee.php");
        exit(0);
    }
}

   
if(isset($_POST['save_employee']))
{
    $id=$_POST["id"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $birthplace =  $_POST["birthplace"];
	$age = $_POST["age"];
	$gender = $_POST["gender"];
	$civilstatus = $_POST["civilstatus"];
	$phoneno = $_POST["phoneno"];
	$email = $_POST["email"];
	$position = $_POST["position"];
	$companyid = $_POST["companyid"];
	
	$dp=mysqli_query($conn,"SELECT * FROM tblemployees where id='$id'");
	if(mysqli_num_rows($dp)>0){
		 $_SESSION['message'] = "employeee already exists";
        header("Location: addemployee.php");
        exit(0);
	
	}
	else{
		    $query = "INSERT INTO tblemployees (id,name,address,birthplace,age,gender,civilstatus,phoneno,email,position,companyid) VALUES ('$id','$name','$address','$birthplace','$age','$gender','$civilstatus','$phoneno','$email','$position','$companyid')";
			mysqli_query($conn,$query);
			 $_SESSION['message'] = "Employee Created Successfully";
			header("Location: addemployee.php");
			exit(0);
		}
}
	

?>
  
  