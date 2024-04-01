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

    <title>Applicant</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Applicant Details
						<a href="home3.html" class="btn btn-primary side-end-end">home</a>
                        </h4>
                    </div>
                    <div class="card-body">
                         <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
									<th>registrationid</th>
									<th>companyid</th>
									<th>jobid</th>
									<th>userid</th>
									<th>applicant</th>
									
									<th>remarks</th>
									
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM tbljobregistration";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $vacancy)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $vacancy['registrationid']; ?></td>
												<td><?= $vacancy['companyid']; ?></td>
												<td><?= $vacancy['jobid']; ?></td>
												<td><?= $vacancy['userid']; ?></td>
												<td><?= $vacancy['applicant']; ?></td>
												
												 <td><?= $vacancy['remarks']; ?></td>
                                                
	                                               
                                                
												
												
                                                
                                                <td>
                                                    <a href="applicantview.php?id=<?= $vacancy['userid']; ?>" class="btn btn-info btn-sm">View</a><br>
                                                    <a href="submitapplication.php?id=<?= $vacancy['registrationid']; ?>" class="btn btn-success btn-sm">Submit</a>
													  <form action="applicantcode.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_applicant" value="<?=$vacancy['registrationid'];?>" class="btn btn-danger btn-sm">Delete</button>
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