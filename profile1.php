<?php

//$id=$_SESSION["id"];
require 'index.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Profile</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Profile
                            <a href="home3.html" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
					 <?php
                            session_start();
                            $userid= $_SESSION["userid"] ; 
                            $query = "SELECT * FROM tblusers WHERE userid='$userid' ";
                            $query_run = mysqli_query($conn, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $user = mysqli_fetch_array($query_run);
						
                                ?>
                           <form action="usercode.php" method="POST">
                             <input type="hidden" name="user_id" value="<?= $user['userid']; ?>">
                            
                            <div class="mb-3">
                                <label> Name</label>
                                <input type="text" name="name" value="<?= $user['name']; ?>" class="form-control" require>
                            </div>
                            <div class="mb-3">
                                <label>Username</label>
                                <input type="text" name="username" value="<?= $user['username']; ?>" class="form-control"require>
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="Password" name="password" value="<?= $user['password']; ?>"class="form-control"require>
                            </div>
							<div class="mb-3">
							<label for="Role">Role:</label>
							<select name="role" id="role">

							<option ><?= $user['role']; ?></option>
							
							</select>
							</div>
                            <div class="mb-3">
                                <button type="submit" name="update_profile" class="btn btn-primary">Update Profile</button>
                            </div>

                            </form>
                            <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
