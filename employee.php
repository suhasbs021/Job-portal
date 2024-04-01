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

    <title>Employee</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Employee Details
						<a href="home3.html" class="btn btn-primary side-end-end">home</a>
                            <a href="addemployee.php" class="btn btn-primary float-end">Add Employee</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
									<th>Id</th>
                                    <th>Name</th>
                                    <th>Address </th>
                                    <th>Birthplace</th>
                                    <th>Age</th>
									<th>Gender</th>
									<th>CivilStatus</th>
									<th>PhoneNo</th>
									<th>Email</th>
									<th>Position</th>
									<th>Company ID</th>
									
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM tblemployees";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $employee)
                                        {
                                            ?>
                                            <tr>
												<td><?= $employee['id']; ?></td>
                                                <td><?= $employee['name']; ?></td>
                                                <td><?= $employee['address']; ?></td>
                                                <td><?= $employee['birthplace']; ?></td>
                                                <td><?= $employee['age']; ?></td>
												<td><?= $employee['gender']; ?></td>
												<td><?= $employee['civilstatus']; ?></td>
												<td><?= $employee['phoneno']; ?></td>
												<td><?= $employee['email']; ?></td>
												<td><?= $employee['position']; ?></td>
												<td><?= $employee['companyid']; ?></td>
												
                                                
                                                <td>
                                                    
                                                <a href="employeeedit.php?id=<?= $employee['id']; ?>" class="btn btn-success btn-sm">Edit</a>
													  <form action="employeecode.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_employee" value="<?=$employee['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                    
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>