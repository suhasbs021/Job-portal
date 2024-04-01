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

    <title>Add Category</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Submit Application
                            <a href="applicant.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="applicantcode.php" method="POST">

                           
                            <div class="mb-3">
                                <label>Remarks</label>
                                <td><select name="remark" id="remark">
	                                                 <option value="">Select</option> 
	                                                <option value="Pending">Pending</option>
	                                                <option value="Approved">Approved</option>
	                                                <option value="Disapproved">Disapproved</option>
                                                </select></td>   <br> 
                            
                            <div class="mb-3">
                                <button type="submit" name="submit_application" class="btn btn-primary float-end">Submit</button>
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
