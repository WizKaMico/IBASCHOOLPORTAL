<?php  

    require_once "../connection/connection.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student View Details 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['user_id']))
                        {
                            $id = mysqli_real_escape_string($con, $_GET['user_id']);
                            $query = "SELECT * FROM student_info WHERE user_id='$id;' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $row = mysqli_fetch_array($query_run);
                                ?>
                                     

                                    <div class="mb-3">
                                        <label>Student Name</label>
                                        <p class="form-control">
                                            <?=$row['fname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>LastName</label>
                                        <p class="form-control">
                                            <?=$row['lname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Address_S</label>
                                        <p class="form-control">
                                            <?=$row['Address_S'];?>
                                        </p>
                                    </div>
                                   

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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
