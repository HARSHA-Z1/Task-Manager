<?php
include('includes/connection.php');
if(isset($_POST['userRegistration'])){
    // Validate phone number length
    if(strlen($_POST['mobile']) === 10){
        $query = "INSERT INTO users VALUES(null,'{$_POST['name']}','{$_POST['email']}','{$_POST['password']}',{$_POST['mobile']})";
        $query_run = mysqli_query($connection, $query);
        if($query_run){
            echo "<script type='text/javascript'>
                alert('User registered successfully.');
                window.location.href = 'index.php';
            </script>";
        }
        else{
            echo "<script type='text/javascript'>
                alert('Error. Please try again.');
                window.location.href = 'index.php';
            </script>";
        }
    }
    else{
        echo "<script type='text/javascript'>
            alert('Phone number should be exactly 10 digits.');
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #fafafa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #fff;
            border-bottom: none;
            text-align: center;
            padding: 20px 0;
        }
        .card-body {
            padding: 30px;
        }
        .form-control {
            border-radius: 20px;
            border: 1px solid #dbdbdb;
            padding: 12px;
            margin-bottom: 20px;
        }
        .btn-primary {
            border-radius: 20px;
            padding: 12px;
            width: 100%;
            background-color: #3897f0;
            border: 1px solid #3897f0;
        }
        .btn-primary:hover {
            background-color: #4dabf5;
            border: 1px solid #4dabf5;
        }
        .text-muted {
            text-align: center;
            margin-top: 20px;
        }
        .btn-home {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            font-size: 14px;
            text-align: center;
            color: #262626;
            text-decoration: none;
            font-weight: 500;
            border: 1px solid #dbdbdb;
            border-radius: 3px;
            background-color: #fff;
            transition: background-color 0.3s;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Create an Account</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="registrationForm">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile No." maxlength="10" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="userRegistration">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="text-muted">Have an account? <a href="user_login.php">Log In</a></p>
                <a href="index.php" class="btn btn-home">Go to Home</a>
            </div>
        </div>
    </div>
    <!-- JavaScript validation -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("registrationForm").addEventListener("submit", function(event) {
                var mobile = document.querySelector("input[name='mobile']").value;
                if (mobile.length !== 10 || isNaN(mobile)) {
                    event.preventDefault(); // Prevent form submission
                    alert("Phone number should be exactly 10 digits and contain only numbers.");
                }
            });
        });
    </script>
</body>
</html>
