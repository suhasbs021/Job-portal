<?php
session_start();
require 'index.php'
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Add vacancy</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add 
                            <a href="vacancy.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="vacancycode.php" method="POST">

                           
                            <div class="mb-3">
                                <label>jobid</label>
                                <input type="number" name="jobid" placeholder="Enter the JOBID(only number) " class="form-control" required><br>
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
									<select name="companyid" required>
									<option>Select</option>
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
                                <label>category</label>
                                		<?php 
										$query ="SELECT category FROM tblcategory";
										$result = $conn->query($query);
										if($result->num_rows> 0){
										$options= mysqli_fetch_all($result, MYSQLI_ASSOC);
										}
									?>
									<select name="category"required>
									<option>Select</option>
									<?php 
										foreach ($options as $option) {
									?>
									<option><?php echo $option['category']; ?> </option>
										<?php 
									}
									?>
								</select>
							</div>
							<div class="mb-3">
                                <label>occupationtitle</label>
                                <input type="text" name="occupationtitle" placeholder="Enter the Occupationtitle " class="form-control"required><br>
							</div>
							<div class="mb-3">
                                <label>number_emp_required</label>
                                <input type="number" name="number_emp_required" placeholder="Enter the number of employees required " min="1" max="1000" class="form-control"required><br>
							</div>
							<div class="mb-3">
                                <label>salary</label>
                                <input type="number" name="salary" placeholder="Enter the salary " min="1"  max="10000000000" class="form-control"required><br>
							</div>
							<div class="mb-3">
                                <label>duration_employement</label>
                                <input type="text" name="duration_employement" placeholder="Enter the Duration employement " class="form-control"required><br>
							</div>
							<div class="mb-3">
                                <label>workexperience</label>
                                <input type="text" name="workexperience" placeholder="Enter the work experience " class="form-control"required><br>
							</div>
							<div class="mb-3">
                                <label>jobdiscription</label>
                                <input type="text" name="jobdiscription" placeholder="Enter the jobiscription " class="form-control"required><br>
							</div>
                            <div class="mb-3">
                                <label>gender</label>
                                <select name="gender" id="gender">
								<option >Select</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="Both">Both</option>
							</select>
							</div>
                            <div class="mb-3">
                                <label>dateposted</label>
                                <input type="date" name="dateposted" placeholder="Enter the dateposted " class="form-control"required><br>
							</div>
							<div class="mb-3">
                                <label>Location</label>
                                <input type="text" name="location" placeholder="Enter the location " class="form-control"required><br>
							</div>
                           
                            
                            <div class="mb-3">
                                <button type="submit" name="save_vacancy" class="btn btn-primary">save Vacancy</button>
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
