<?php
session_start();


session_destroy();
$_SESSION['message'] = "Userlogged out";
header("Location: main.php");



?>