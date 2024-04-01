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
                            <a href="profile.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
					 <?php
                            session_start();
                            $userid= $_SESSION["userid"] ; 
                            $query = "SELECT * FROM tblogin WHERE userid='$userid' ";
                            $query_run = mysqli_query($conn, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $company = mysqli_fetch_array($query_run);
						
                                ?>
                           <form action="profilecode.php" method="POST">
                             <input type="hidden" name="company_id" value="<?= $company['userid']; ?>">
                            <div class="mb-3">
                                <label> userid</label>
                                <input type="number" name="userid" value="<?= $company['userid']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" value="<?= $company['name']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Username</label>
                                <input type="text" name="username" value="<?= $company['username']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>password</label>
                                <input type="password" name="password" value="<?= $company['password']; ?>"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>address</label>
                                <input type="text" name="address" value="<?= $company['address']; ?>"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>gender</label>
                                <option><?= $company['gender']; ?></option>
                                <select name="gender" id="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>

                                </select>
                            <br>
                            </div>
                            <div class="mb-3">
                                <label>civilstatus</label>
                                <select name="civilstatus" id="civilstatus">
                                <option value="married">Married</option>
                                <option value="single">Single</option>
                                <option value="widow">widow</option>
                            </select>
                            </div>
                            <div class="mb-3">
                                <label>birthplace</label>
                                <input type="text" name="birthplace" value="<?= $company['birthplace']; ?>"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>age</label>
                                <input type="number" name="age" value="<?= $company['age']; ?>"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>email</label>
                                <input type="email" name="email" value="<?= $company['email']; ?>"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>contactno</label>
                                <input type="number" name="contactno" value="<?= $company['contactno']; ?>"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>degree</label>
                                <input type="text" name="degree" value="<?= $company['degree']; ?>"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>applicantphoto</label>
                                <input type="text" name="applicantphoto" value="<?= $company['applicantphoto']; ?>"class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_profile" class="btn btn-primary">Update profile</button>
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
