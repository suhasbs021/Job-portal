<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "jobportal";

$conn = mysqli_connect($servername, $username, $password, $db);

if($conn){
    ?>
    <script>
      // alert("connected")
    </script>
    <?php
}else{
    die(" not connect".mysqli_connect_error());
}

?>
