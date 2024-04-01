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
                        <h4>Hiring
						<a href="home1.html" class="btn btn-primary side-end-end">home</a>
                            
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
									
									<th>companyid</th>
									<th>category</th>
                                    <th>location</th>
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
                                                
												<td><?= $vacancy['companyid']; ?></td>
												<td><?= $vacancy['category']; ?></td>
                                                <td><?= $vacancy['location']; ?></td>
												
                                                
                                                <td>
                                                   
                                                     <a href="apply.php?id=<?= $vacancy['jobid']; ?>" class="btn btn-success btn-sm">Apply</a>
													 
                                                    
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