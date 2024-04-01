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
	<link rel="stylesheet" href="style.css">
    
 

    <title>Company</title>
    <style>
        body {
            background-image: url('admin.jpg');
            
             background-repeat: no-repeat;
             background-position: center;
            background-size: cover;
            height: 100vh;
            
        }
        
        
    </style>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Company Details
						<a href="home1.html" class="btn btn-primary float-end">home</a>
                            
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>CompanyID</th>
                                    <th>Company Name</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM tblcompany";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $company)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $company['companyid']; ?></td>
                                                <td><?= $company['name']; ?></td>
                                                <td><?= $company['address']; ?></td>
                                                <td><?= $company['contactno']; ?></td>
                                                
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