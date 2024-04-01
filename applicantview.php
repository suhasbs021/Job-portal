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
						<a href="applicant.php" class="btn btn-primary float-end">back</a>
                            
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>UserId</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>CivilStatus</th>
                                    <th>Birthplace</th>
                                    <th>Age</th>
                                    <th>Email</th>
                                    <th>Contactnuber</th>
                                    <th>degree</th>
                                    <th>Resume</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if(isset($_GET['id']))
                                {
                                    $company_id = $_GET['id'];
                                    $query = "SELECT * FROM tblogin where userid='$company_id'";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $vacancy)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $vacancy['userid']; ?></td>
                                                <td><?= $vacancy['name']; ?></td>
                                                <td><?= $vacancy['address']; ?></td>
                                                <td><?= $vacancy['gender']; ?></td>
                                                <td><?= $vacancy['civilstatus']; ?></td>
                                                <td><?= $vacancy['birthplace']; ?></td>
                                                <td><?= $vacancy['age']; ?></td>
                                                <td><?= $vacancy['email']; ?></td>
                                                <td><?= $vacancy['contactno']; ?></td>
                                                <td><?= $vacancy['degree']; ?></td>
                                                <td ><a href="<?=("$vacancy[applicantphoto]"); ?>" download="new file">
                                                <button class="do" type="button">Download</button>
                                                </a></td>
                                                <style>
                                                            .do:hover{
                                                                background-color: rgb(40, 48, 123);
                                                                color: rgb(44, 148, 13);
                                                                font-style: italic;
                                                                font-weight: bold;
                                                                border-radius: 12px;
                                                                }
                                                                .do{
                                                                    font-style: italic;
                                                                font-weight: bold;
                                                                border-radius: 12px;
                                                                }
                                                                </style>
                                                        
                                                        
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