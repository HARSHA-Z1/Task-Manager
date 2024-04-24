<?php 
    session_start();
    include('includes/connection.php');   
    if(isset($_POST['userlogin'])){
        $query = "select email,password,name,uid from users where email = '$_POST[email]' AND password = '$_POST[password]'";
        $query_run = mysqli_query($connection,$query);
        if(mysqli_num_rows($query_run)){
            $_SESSION['email'] = $_POST['email'];
            while($row = mysqli_fetch_assoc($query_run)){
                $_SESSION['name'] = $row['name'];
                $_SESSION['uid'] = $row['uid'];
            }
            echo "<script type='text/javascript'>
              window.location.href = 'user_dashboard.php';
            </script>";
        }
        else{
          echo "<script type='text/javascript'>
              alert('Please enter correct email and password.');
              window.location.href = 'user_login.php';
          </script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <!-- Bootstrap files -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #fafafa;
        }

        .login-container {
            width: 350px;
            padding: 40px 20px;
            background-color: #fff;
            border: 1px solid #dbdbdb;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-container h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #262626;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #dbdbdb;
            border-radius: 3px;
            background-color: #fafafa;
            outline: none;
            color: #262626;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: #3897f0;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .btn-login:hover {
            background-color: #2f80dc;
        }

        .btn-signup {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            text-align: center;
            color: #385185;
            text-decoration: none;
            font-weight: 600;
        }

        .btn-back-home {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            text-align: center;
            color: #262626;
            text-decoration: none;
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
    <div class="login-container">
        <h3>User Login</h3>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-login" name="userlogin" value="Log In">
            </div>
        </form>
        <a href="register.php" class="btn btn-signup">Don't have an account? Sign up</a>
        <a href="index.php" class="btn btn-home">Go to Home</a>
    </div>
</body>
</html>
