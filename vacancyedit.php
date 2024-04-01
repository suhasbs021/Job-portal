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

    <title>vacancy Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>vacancy Edit 
                            <a href="vacancy.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $job_id = $_GET['id'];
                            $query = "SELECT * FROM tbljob WHERE jobid='$job_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $vacancy = mysqli_fetch_array($query_run);
                                ?>
                                <form action="vacancycode.php" method="POST">
                                <input type="hidden" name="job_id" value="<?= $vacancy['job_id']; ?>">
                                  <div class="mb-3">
                                
							<div class="mb-3">
                                <label>companyid</label>
								<?php 
										$query ="SELECT companyid FROM tblcompany";
										$result = $conn->query($query);
										if($result->num_rows> 0){
										$options= mysqli_fetch_all($result, MYSQLI_ASSOC);
										}
									?>
									<select name="companyid" required >
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
                                <label>category</label>
                                		<?php 
										$query ="SELECT category FROM tblcategory";
										$result = $conn->query($query);
										if($result->num_rows> 0){
										$options= mysqli_fetch_all($result, MYSQLI_ASSOC);
										}
									?>
									<select name="category"required>
									<option><?= $vacancy['category']; ?></option>
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
                                <input type="text" name="occupationtitle" value="<?= $vacancy['occupationtitle']; ?>" class="form-control" required><br>
							</div>
							<div class="mb-3">
                                <label>number_emp_required</label>
                                <input type="number" name="number_emp_required" value="<?= $vacancy['number_emp_required']; ?>" class="form-control" min="1"  max="100" required><br>
							</div>
							<div class="mb-3">
                                <label>salary</label>
                                <input type="number" name="salary" value="<?= $vacancy['salary']; ?>"  min="1" min="1000000000" class="form-control"required><br>
							</div>
							<div class="mb-3">
                                <label>duration_employement</label>
                                <input type="text" name="duration_employement" value="<?= $vacancy['duration_employement']; ?>" class="form-control"required><br>
							</div>
							<div class="mb-3">
                                <label>workexperience</label>
                                <input type="text" name="workexperience" value="<?= $vacancy['workexperience']; ?>" class="form-control"required><br>
							</div>
							<div class="mb-3">
                                <label>jobdiscription</label>
                                <input type="text" name="jobdiscription" value="<?= $vacancy['jobdiscription']; ?>" class="form-control"required><br>
							</div>
                            <div class="mb-3">
                                <label>gender</label>
                                <select name="gender" id="gender">
                                    <option><?= $vacancy['gender']; ?></option>
								<option value="male">Male</option>
								<option value="female">Female</option>
                                <option value="Both">Both</option>
							</select>
							</div>
                           
                            <div class="mb-3">
                                <label>location</label>
                                <input type="text" name="location" value="<?= $vacancy['location']; ?>" class="form-control"required><br>
							</div>
                            
                            <div class="mb-3">
                                <button type="submit" name="update_vacancy" value="<?=$vacancy['jobid'];?>" class="btn btn-primary">update vacancy</button>
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