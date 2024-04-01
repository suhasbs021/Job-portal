<?php
require 'index.php';
require 'message.php';
session_start();
if(isset($_SESSION["id"])){

session_destroy($_SESSION["id"]);
$_SESSION['message'] = "Userlogged out";
header("Location: main.php");

}
else{
	$_SESSION['message'] = "logout Unsuccesfull";
	header("Location: main.php");
}
?>