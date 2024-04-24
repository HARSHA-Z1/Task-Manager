<?php
    session_start();
    if(isset($_SESSION['email'])){
    include('../includes/connection.php');
    if(isset($_POST['submit_leave'])){
        $query = "insert into leaves values(null,1,'$_POST[subject]','$_POST[message]')";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
          echo "<script type='text/javascript'>
              alert('Form submitted successfully....');
            window.location.href = 'user_dashboard.php';  
          </script>";
        }
        else{
          echo "<script type='text/javascript'>
              alert('Error...Plz try again.');
              window.location.href = 'user_dashboard.php';
          </script>";
        }
    }

    if(isset($_POST['create_task'])){
        $query = "insert into tasks values(null,$_POST[id],'$_POST[description]','$_POST[start_date]','$_POST[end_date]','Not Started')";
          $query_run = mysqli_query($connection,$query);
        if($query_run){
          echo "<script type='text/javascript'>
              alert('Task created successfully....');
            window.location.href = 'admin_dashboard.php';  
          </script>";
        }
        else{
          echo "<script type='text/javascript'>
              alert('Error...Plz try again.');
              window.location.href = 'admin_dashboard.php';
          </script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- jQuery file -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/527a10858c.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #FAFAFA;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        #header {
            background-color: #fff;
            border-bottom: 1px solid #dbdbdb;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        #header h3 {
            margin: 0;
            font-weight: 600;
            font-size: 1.2rem;
        }
        #left_sidebar {
            background-color: #fff;
            border-right: 1px solid #dbdbdb;
            padding: 20px;
            width: 250px;
            height: calc(100vh - 62px);
            position: fixed;
            top: 62px;
            left: 0;
            overflow-y: auto;
        }
        #left_sidebar a {
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            color: #262626;
            text-decoration: none;
            transition: background-color 0.2s ease-in-out;
        }
        #left_sidebar a:hover {
            background-color: #f5f5f5;
        }
        #right_sidebar {
            padding: 20px;
            margin-left: 250px;
            height: calc(100vh - 62px);
            overflow-y: auto;
        }
        #right_sidebar h4 {
            margin-top: 0;
            font-weight: 600;
            font-size: 1.2rem;
        }
        #right_sidebar ul {
            list-style-type: none;
            padding: 0;
            line-height: 2.5em;
            font-size: 1.1rem;
        }
        #right_sidebar li {
            margin-bottom: 10px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#create_task").click(function(){
                $("#right_sidebar").load("create_task.php");
            });
        });

        $(document).ready(function(){
            $("#manage_task").click(function(){
                $("#right_sidebar").load("manage_task.php");
            });
        });

        $(document).ready(function(){
            $("#view_leave").click(function(){
                $("#right_sidebar").load("view_leave.php");
            });
        });
    </script>
</head>
<body>
    <div id="header">
        <h3> Task Management System</h3>
    </div>
    <div id="left_sidebar">
        <a type="button" id="create_task">Create Task</a>
        <a type="button" id="manage_task">Manage Task</a>
        <!--<a type="button" id="view_leave">Leave applications</a>-->
        <a type="button" href="../logout.php" id="logout_link">Logout</a>
    </div>
    <div id="right_sidebar">
        <h4>Hello :)</h4>
        <ul>
            <li>Assign tasks uniformly</li>
            <li>Montior the tasks</li>
        </ul>
    </div>
</body>
</html>
<?php  
}
else{
    header('Location:admin_login.php');
}
?>