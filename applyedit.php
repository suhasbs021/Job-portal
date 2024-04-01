<?php
session_start();

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

    <title>Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Edit
                            <a href="apply.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
					 <?php
                        if(isset($_GET['id']))
                        {
                            $company_id = $_GET['id'];
                            $query = "SELECT * FROM tblogin WHERE userid='$company_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $company = mysqli_fetch_array($query_run);
						
                                ?>
                         <form action="applycode.php" method="POST">
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
                                <select name="civilstatus" id="civilstatus	">
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
                                <input type="number" name="age" value="<?= $company['age']; ?>" min="1" max="100" class="form-control">
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
                                <label>Resume</label>
                                <input type="file" name="applicantphoto" value="<?php $company['applicantphoto'];?>"class="form-control">
                                <label>Resume uploaded</label>
                                <input type="" name="applicantphot" value="<?php echo $company['applicantphoto'];?>"class="form-control">
                                <script>
                                    alert ("Please re-upload your resume ")
                                </script>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_company" class="btn btn-primary">Update Company</button>
                            </div>

                            </form>
                            <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
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
