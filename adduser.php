<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Add Users</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Users
                            <a href="user.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="usercode.php" method="POST">

                            <div class="mb-3">
                                <label>Userid</label>
                                <input type="number" name="userid" placeholder="Enter the Userid(only nuber)" class="form-control"required>
                            </div>
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Entetr the name" class="form-control"required>
                            </div>
                            <div class="mb-3">
                                <label>Username</label>
                                <input type="text" name="username" placeholder="Entetr the Address" class="form-control"required>
                            </div>
                            <div class="mb-3">
                                <label>password </label>
                                <input type="password" name="password"placeholder="Entetr the password" class="form-control"required>
                            </div>
							<div class="mb-3">
							<label for="Role">Role:</label>
							<select name="role" id="role" required>
                                <option>Select</option>
							<option value="Adminstrater">Adminstrater</option>
							<option value="Employer">Employer</option>
							</select>
							</div>
                            <div class="mb-3">
                                <button type="submit" name="save_user" class="btn btn-primary">Save User</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
