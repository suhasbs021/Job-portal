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

    <title>vacancy</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>vacancy Details
						<a href="home3.html" class="btn btn-primary side-end-end">home</a>
                            <a href="addvacancy.php" class="btn btn-primary float-end">Add vacancy</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
									<th>jobid</th>
									<th>companyid</th>
									<th>category</th>
									<th>occupationtitle</th>
									<th>number_emp_required</th>
									<th>salary</th>
									<th>duration_employement</th>
									<th>workexperience</th>
									<th>jobdiscription</th>
									<th>gender</th>
									<th>dateposted</th>
                                    <th>Loaction</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM tbljob";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $vacancy)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $vacancy['jobid']; ?></td>
												<td><?= $vacancy['companyid']; ?></td>
												<td><?= $vacancy['category']; ?></td>
												<td><?= $vacancy['occupationtitle']; ?></td>
												<td><?= $vacancy['number_emp_required']; ?></td>
												<td><?= $vacancy['salary']; ?></td>
												<td><?= $vacancy['duration_employement']; ?></td>
												<td><?= $vacancy['workexperience']; ?></td>
												<td><?= $vacancy['jobdiscription']; ?></td>
												<td><?= $vacancy['gender']; ?></td>
												<td><?= $vacancy['dateposted']; ?></td>
                                                <td><?= $vacancy['location']; ?></td>
                                                
                                                <td>
                                                    
                                                     <a href="vacancyedit.php?id=<?= $vacancy['jobid']; ?>" class="btn btn-success btn-sm">Edit</a><br>
													  <form action="vacancycode.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_vacancy" value="<?=$vacancy['jobid'];?>" class="btn btn-danger btn-sm">Delete</button>
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