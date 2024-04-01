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

    <title>Company Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Company Edit
                            <a href="company.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
					 <?php
                        if(isset($_GET['id']))
                        {
                            $company_id = $_GET['id'];
                            $query = "SELECT * FROM tblcompany WHERE companyid='$company_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $company = mysqli_fetch_array($query_run);
						
                                ?>
                         <form action="companycode.php" method="POST">
                             <input type="hidden" name="company_id" value="<?= $company['companyid']; ?>" required>
                           
                            
                            <div class="mb-3">
                                <label>Company Address</label>
                                <input type="text" name="address" value="<?= $company['address']; ?>" class="form-control"required>
                            </div>
                            <div class="mb-3">
                                <label>Contact Number</label>
                                <input type="tel" name="contactno" value="<?= $company['contactno']; ?>"class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_company" class="btn btn-primary">Update Company</button>
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
