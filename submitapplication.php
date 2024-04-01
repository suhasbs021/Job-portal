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

    <title>Category Edit</title>
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

                        <?php
                        if(isset($_GET['id']))
                        {
                            $category_id = $_GET['id'];
                            echo $category_id ;
                            $query = "SELECT *  FROM tbljobregistration WHERE registrationid='$category_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $category = mysqli_fetch_array($query_run);
                                ?>
                                <form action="applicantcode.php" method="POST">

                                <input type="hidden" name="category_id" value="<?= $category['id']; ?>">
                                    <div class="mb-3">
                                        <label>Remarks </label>
                                    <td><select name="remarks" id="remarks">
                                    <option><?= $category['remarks']; ?></option>
	                                                <option value="Pending">Pending</option>
	                                                <option value="Approved">Approved</option>
	                                                <option value="Disapproved">Disapproved</option>
                                                </select></td>                                              
                                    </div>
                                    
                                    <div class="mb-3">
                                        <button type="submit" name="submit_application" value=<?= $category_id; ?> class="btn btn-primary">
                                            Submit Application
                                        </button>
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