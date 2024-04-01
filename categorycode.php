<?php
session_start();
require 'index.php';
if(isset($_POST['delete_category']))
{
    $category_id =  $_POST['delete_category'];

    $query = "DELETE FROM tblcategory WHERE id='$category_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "category Deleted Successfully";
        header("Location: category.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "category Not Deleted";
        header("Location: category.php");
        exit(0);
    }
}


if(isset($_POST['update_category']))
{
    $category_id = $_POST['category_id'];

    $category = $_POST['category'];
   

    $query = "UPDATE tblcategory SET category='$category' WHERE id='$category_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "category Updated Successfully";
        header("Location: category.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "category Not Updated";
        header("Location: category.php");
        exit(0);
    }

}

   
if(isset($_POST['save_category']))
{
    
    $category = $_POST["category"];
 
	$dp=mysqli_query($conn,"SELECT * FROM tblcompany WHERE  id='$id'");
	if(mysqli_num_rows($dp)>0){
		$_SESSION['message'] = "Category already exists";
        header("Location: addcategory.php");
        exit(0);
	
	}
	else{
		    $query = "INSERT INTO tblcategory (	category) VALUES ('$category')";
			mysqli_query($conn,$query);
			$_SESSION['message'] = "Category Created Successfully";
			header("Location: addcategory.php");
			exit(0);
		}
}

  

?>