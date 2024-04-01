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

    <title>Category</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Category Details
						<a href="home3.html" class="btn btn-primary side-end-end">home</a>
                            <a href="addcategory.php" class="btn btn-primary float-end">Add category</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
									<th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM tblcategory";
                                    $query_run = mysqli_query($conn, $query);
									

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $category)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $category['category']; ?></td>
                                                
                                                <td>
                                                   
                                                      <a href="categoryedit.php?id=<?= $category['id']; ?>" class="btn btn-success btn-sm">Edit</a>
													  <form action="categorycode.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_category" value="<?=$category['id'];?>" class="btn btn-danger btn-sm">Delete</button>
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