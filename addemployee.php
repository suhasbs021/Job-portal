<?php
session_start();
include 'index.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Add Employee</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Employee
                            <a href="employee.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="employeecode.php" method="POST">

                            <div class="mb-3">
                                <label>id</label>
                                <input type="number" name="id" placeholder="Enter the EmployeeID(Number only)" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Employee Name</label>
                                <input type="text" name="name" placeholder="Enter the Employee Name"  class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Employee Address</label>
                                <input type="text" name="address"  placeholder="Enter the Employee Address"  class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Birthplace</label>
                                <input type="text" name="birthplace"  placeholder="Enter the Employee Birthpalce"  class="form-control"required>
                            </div>
							<div class="mb-3">
                                <label>Age</label>
                                <input type="number" name="age"  placeholder="Enter the Employee Age"  class="form-control"required>
                            </div>
							<div class="mb-3">
                                <label>Gender</label>
                                <select name="gender" id="gender"required>
                                <option>Select</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
                            </div>
							<div class="mb-3">
                                <label>Civilstatus</label>
                                <select name="civilstatus" id="civilstatus" required>
                                <option>Select</option>
								<option value="married">Married</option>
								<option value="single">single</option>
								<option value="single">widow</option>
							</select>
                            </div>
							<div class="mb-3">
                                <label>PhoneNo</label>
                                <input type="number" name="phoneno"  placeholder="Enter the Employee Phoone Number"  class="form-control" required>
                            </div>
							<div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email"  placeholder="Enter the Employee Email"  class="form-control"required>
                            </div>
							<div class="mb-3">
                                <label>Position</label>
                                <input type="text" name="position"  placeholder="Enter the Employee Position"  class="form-control"required>
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
                                <button type="submit" name="save_employee" class="btn btn-primary">Save Employee</button>
                                
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
