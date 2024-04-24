<!DOCTYPE html>
<html>
<head>
    <title>ETMS</title>
    <!-- jQuery file -->
    <script src="includes/juqery_latest.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <style>
        /* Additional CSS for horizontal scroll bar */
        .button-container {
            white-space: nowrap;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            padding: 10px 0;
            border-radius: 10px;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .button-container .btn {
            margin-right: 10px;
            padding: 0.2rem 0.5rem;
            font-size: 1rem; /* Smaller font size */
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .button-container .btn:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
            transform: translateY(-5px);
        }

        /* Dynamic Background with Twinkling Stars */
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: 'Montserrat', sans-serif; /* Using Google Font - Montserrat */
            position: relative;
            background: linear-gradient(45deg, #3498db, #9b59b6); /* Retaining previous background colors */
            background-size: 200% 200%;
            animation: gradientBG 15s ease infinite;
        }

        /* Keyframes for background animation */
        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Center the content */
        #home_page {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 30vh;
            background-color: rgba(255, 255, 255, 0.1); /* Transparent background */
            border-radius: 10px;
            padding: 20px;
        }

        /* Style the heading */
        #home_page h3 {
            color: #fff;
            font-size: 1.5rem; /* Larger font size */
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Style the buttons */
        .btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1rem; /* Smaller font size */
            margin: 0 0.05rem;
            transition: background-color 0.3s ease-in-out;
        }

        .btn:hover {
            background-color: #45a049;
        }

        /* Add a margin to the top of the page */
        body {
            margin-top: 3rem;
        }

        /* Additional style for the registration link */
        #registration-link {
            color: #fff;
            font-size: 0.8rem;
            text-decoration: none;
            margin-top: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Provided CSS for twinkling stars background */
        *{
            margin: 0px;
            padding: 0px;
        }

        body{
            font-family: 'Montserrat', sans-serif;
        }

        .context {
            width: 100%;
            position: absolute;
            top:50vh;
        }

        .context h1{
            text-align: center;
            color: #fff;
            font-size: 50px;
        }

        .area{
            background: #4e54c8;  
            background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);  
            width: 100%;
            height:100vh;
        }

        .circles{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .circles li{
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.2);
            animation: animate 25s linear infinite;
            bottom: -150px;
        }

        .circles li:nth-child(1){
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }

        .circles li:nth-child(2){
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .circles li:nth-child(3){
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }

        .circles li:nth-child(4){
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .circles li:nth-child(5){
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }

        .circles li:nth-child(6){
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }

        .circles li:nth-child(7){
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }

        .circles li:nth-child(8){
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }

        .circles li:nth-child(9){
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }

        .circles li:nth-child(10){
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }

        @keyframes animate {
            0%{
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }

            100%{
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }
        }
    </style>
</head>
<body>
    <!-- Stars -->
    <div class="circles">
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-4 m-auto" id="home_page">
            <center><h3 style="color: #fff;">Login Type</h3><br>
            <div class="button-container">
                <a href="user_login.php" class="btn btn-success">User Login</a>
                <a href="admin/admin_login.php" class="btn btn-info">Admin Login</a>
            </div>
            <a href="register.php" id="registration-link">New User Registration?</a> <!-- New registration link -->
            </center>
        </div>
    </div>
</body>
</html>
