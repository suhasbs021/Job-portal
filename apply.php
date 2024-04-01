<?php
    session_start();  
    // $userid=$_SESSION["id"];
    // echo   $userid;
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
    <style>
        body {
            background-image: url('sincerely-media-HoEYgBL_Gcs-unsplash.jpg');
            
             background-repeat: no-repeat;
             background-position: center;
            background-size: cover;
            height: 100vh;
            
        }
        
        
    </style>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>vacancy Details
						<a href="home1.html" class="btn btn-primary side-end-end">home</a>
                            <a href="emphiringnow.php" class="btn btn-primary float-end">Back</a>
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
                                 if(isset($_GET['id']))
                                 { 
                                    $job_id = $_GET['id'];
                                    $query = "SELECT * FROM tbljob where jobid='$job_id' ";
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
                                                
                                               <!-- <td>  <a href="applycode.php?id=<?= $vacancy['jobid']; ?>" class="btn btn-success btn-sm">Apply</a> -->
                                               <td>
                                                    <!-- <a href="" class="btn btn-success btn-sm">Apply</a> -->
													  <form action="applicantcode.php" method="POST" class="d-inline">
                                                      <input type=hidden name="apply_vacancy" value="<?=$vacancy['jobid'];?>">
                                                      <input type=hidden name="apply_vacancy" value="<?=$vacancy['companyid'];?>">
                                                    
                                                      <button class="btn btn-success btn-sm" name ="Apply" value="name" type="submit">Apply</button>                                                      
                                                        <!-- <button type="submit" class="btn btn-success btn-sm" name="apply_vacancy" value="<?=$vacancy['jobid'];?>" >Apply</button> -->
                                                    </form>
                                                    
                                                </td>
                                               <td>  <a href="applyedit.php?id=<?= $vacancy['jobid']; ?>" class="btn btn-success btn-sm">Edit</a>
                                        </td>
                                            </td>
                                            
                                            </tr>
                                            <?php
                                        }
                                        
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
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