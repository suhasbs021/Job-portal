<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Add Company</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Company
                            <a href="company.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="companycode.php" method="POST">

                            <div class="mb-3">
                                <label>Company ID</label>
                                <input type="number" name="companyid" placeholder="Enter the compayID (Only number)" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Company Name</label>
                                <input type="text" name="name" placeholder="Enter the company name " class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Company Address</label>
                                <input type="text" name="address" placeholder="Enter the Address" class="form-control"required>
                            </div>
                            <div class="mb-3">
                                <label>Contact Number</label>
                                <input type="tel" name="contactno"  min="1" max="10"  class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_company" class="btn btn-primary">Save Company</button>
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
