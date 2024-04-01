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

    <title>Manage User</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>USers Details
							<a href="home3.html" class="btn btn-primary side-end-end">home</a><th></th>
							
                            <a href="adduser.php" class="btn btn-primary float-end">Add userss</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>UserID</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM tblusers";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $user)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $user['userid']; ?></td>
                                                <td><?= $user['name']; ?></td>
                                                <td><?= $user['username']; ?></td>
                                                <td><?= $user['role']; ?></td>
                                                
                                                <td>
                                                <a href="useredit.php?id=<?= $user['userid']; ?>" class="btn btn-success btn-sm">Edit</a>
													  <form action="usercode.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_user" value="<?=$user['userid'];?>" class="btn btn-danger btn-sm">Delete</button>
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