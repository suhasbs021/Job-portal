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

    <title>Employee Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Employee Edit 
                            <a href="employee.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = $_GET['id'];
                            $query = "SELECT * FROM tblemployees WHERE id='$id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $vacancy = mysqli_fetch_array($query_run);
                                ?>
                                <form action="employeecode.php" method="POST">
                                <input type="hidden" name="job_id" value="<?= $vacancy['job_id']; ?>">
                              
                            <div class="mb-3">
                                <label>Employee Name</label>
                                <input type="text" name="name" value="<?= $vacancy['name']; ?>" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Employee Address</label>
                                <input type="text" name="address" value="<?= $vacancy['address']; ?>" class="form-control"required>
                            </div>
                            <div class="mb-3">
                                <label>Birthplace</label>
                                <input type="text" name="birthplace" value="<?= $vacancy['birthplace']; ?>" class="form-control"required>
                            </div>
							<div class="mb-3">
                                <label>Age</label>
                                <input type="number" name="age" value="<?= $vacancy['age']; ?>" class="form-control"required>
                            </div>
							<div class="mb-3">
                                <label>Gender</label>
                                <select name="gender" id="gender"required>
                                <option><?= $vacancy['gender']; ?></option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
                            </div>
							<div class="mb-3">
                                <label>Civilstatus</label>
                                <select name="civilstatus" id="civilstatus"required>
                                <option><?= $vacancy['civilstatus']; ?></option>
								<option value="married">Married</option>
								<option value="single">single</option>
								<option value="single">widow</option>
							</select>
                            </div>
							<div class="mb-3">
                                <label>PhoneNo</label>
                                <input type="tel" name="phoneno" value="<?= $vacancy['phoneno']; ?>" class="form-control"required>
                            </div>
							<div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email"  value="<?= $vacancy['email']; ?>" class="form-control"required>
                            </div>
							<div class="mb-3">
                                <label>Position</label>
                                <input type="text" name="position" value="<?= $vacancy['position']; ?>" class="form-control"required>
                            </div>
							<div class="mb-3">
                                <label>Company</label>
                                		<?php 
										$query ="SELECT companyid FROM tblcompany";
										$result = $conn->query($query);
										if($result->num_rows> 0){
										$options= mysqli_fetch_all($result, MYSQLI_ASSOC);
										}
									?>
									<select name="companyid"required>
									<option><?= $vacancy['companyid']; ?></option>
									<?php 
										foreach ($options as $option) {
									?>
									<option><?php echo $option['companyid']; ?> </option>
										<?php 
									}
									?>
								</select>
							</div>
                            
                            <div class="mb-3">
                                <button type="submit" name="update_employee" value="<?=$vacancy['id'];?>" class="btn btn-primary">update vacancy</button>
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