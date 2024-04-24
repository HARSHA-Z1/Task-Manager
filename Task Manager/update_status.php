<?php 
    session_start();
    if(isset($_SESSION['email'])){
        include('includes/connection.php');
        if(isset($_POST['update'])){
            $query = "update tasks set status = '$_POST[status]' where tid = $_GET[id]";
            $query_run = mysqli_query($connection,$query);
            if($query_run){
                echo "<script type='text/javascript'>
                    alert('Status updated successfully...');
                    window.location.href = 'user_dashboard.php';  
                </script>";
            }
            else{
                echo "<script type='text/javascript'>
                    alert('Error...Please try again.');
                    window.location.href = 'user_dashboard.php';
                </script>";
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETMS - Update Task Status</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #fafafa;
        }
        #home_page {
            margin-top: 50px;
        }
        .container {
            max-width: 400px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        h3 {
            color: #262626;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        button.btn {
            width: 100%;
            margin-top: 20px;
        }
        a.btn {
            width: 100%;
            display: inline-block;
            margin-top: 10px;
            text-align: center;
            color: #fff;
        }
        a.btn:hover {
            text-decoration: none;
        }
        .btn-primary {
            background-color: #0095f6;
            border-color: #0095f6;
        }
        .btn-primary:hover {
            background-color: #0058b7;
            border-color: #0058b7;
        }
        .btn-danger {
            background-color: #ed4956;
            border-color: #ed4956;
        }
        .btn-danger:hover {
            background-color: #b03a47;
            border-color: #b03a47;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="home_page">
                <center>
                    <h3>Update Task Status</h3>
                    <?php 
                        $query = "select * from tasks where tid = $_GET[id]";
                        $query_run = mysqli_query($connection,$query);
                        while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" class="form-control" />
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="status">
                                <option>-Select-</option>
                                <option>Complete</option>
                                <option>In-Progress</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-danger" name="update">Update</button>
                        <a href="user_dashboard.php" class="btn btn-primary">Dashboard</a>
                    </form>
                    <?php
                        }
                    ?>
                </center>
            </div>
        </div>
    </div>
</body>
</html>
<?php  
    }
    else{
        header('Location:user_login.php');
    }
?>
