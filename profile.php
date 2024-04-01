<?php
   
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
    <style>
        body {
            background-image: url('pexels-dominika-roseclay-1036841.jpg');
            
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
                        <h4>Applied Jobs
						<a href="home1.html" class="btn btn-primary side-end-end">home</a>
                        <a href="profileedit.php" class="btn btn-primary  float-end">Edit</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
									
									<th>companyid</th>
									<th>jobid</th>
									<th>userid</th>
									<th>applicant</th>
									
									<th>remarks</th>
									
								
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                  session_start();
                                    $userid= $_SESSION["userid"] ;                                    
                                    $query = "SELECT * FROM tbljobregistration where userid=$userid";
                                   
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $vacancy)
                                        {
                                            ?>
                                            <tr>
                                                
												<td><?= $vacancy['companyid']; ?></td>
												<td><?= $vacancy['jobid']; ?></td>
												<td><?= $vacancy['userid']; ?></td>
												<td><?= $vacancy['applicant']; ?></td>
												
												<td><?= $vacancy['remarks']; ?></td>
                                                
	                                               
                                                </select></td>
												
											
                                                
                                                <td>
                                                
                                                    
													  
                                                      
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