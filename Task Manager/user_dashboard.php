<?php
    session_start();
    if(isset($_SESSION['email'])){
    include('./includes/connection.php');
    if(isset($_POST['submit_leave'])){
        $query = "insert into leaves values(null,$_SESSION[uid],'$_POST[subject]','$_POST[message]','No Action')";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
          echo "<script type='text/javascript'>
              alert('Form submitted successfully....');
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
    if(isset($_POST['create_task'])){
        $query = "insert into tasks values(null,$_POST[id],'$_POST[description]','$_POST[start_date]','$_POST[end_date]','Not Started')";
          $query_run = mysqli_query($connection,$query);
        if($query_run){
          echo "<script type='text/javascript'>
              alert('Task created successfully....');
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
<html>
    <head>
        <title>User Dashboard</title>
        <!-- jQuery file -->
        <script src="includes/juqery_latest.js"></script>
        <!-- Bootstrap files -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS file -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/527a10858c.js" crossorigin="anonymous"></script>
        <style>
            body {
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                background-color: #FAFAFA;
            }
            #header {
                background-color: #FFFFFF;
                border-bottom: 1px solid #DBDBDB;
                padding: 16px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            #header h3 {
                margin: 0;
                font-weight: 600;
                color: #262626;
            }
            #header h3 i {
                margin-right: 10px;
            }
            #left_sidebar {
                background-color: #FFFFFF;
                border-right: 1px solid #DBDBDB;
                padding: 16px;
                width: 25%;
                height: 100vh;
                position: fixed;
                top: 0;
                left: 0;
            }
            #left_sidebar a {
                display: block;
                padding: 10px;
                margin-bottom: 10px;
                text-align: center;
                text-decoration: none;
                color: #262626;
                font-weight: 600;
                border-radius: 4px;
            }
            #left_sidebar a:hover {
                background-color: #F5F5F5;
            }
            #right_sidebar {
                margin-top-20%;
                padding: 5px;
                margin-left: 20%;
            }
            #right_sidebar h4 {
                margin-top: 0;
                margin-bottom: 16px;
                font-weight: 600;
                color: #262626;
            }
            #right_sidebar ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
            }
            #right_sidebar li {
                line-height: 2em;
                font-size: 1.2em;
                color: #262626;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#manage_task").click(function(){
                $("#right_sidebar").load("task.php");
                });
            });

            $(document).ready(function(){
                $("#apply_leave").click(function(){
                $("#right_sidebar").load("leaveForm.php");
                });
            });

            $(document).ready(function(){
                $("#view_leave").click(function(){
                $("#right_sidebar").load("leave_status.php");
                });
            });

            $(document).ready(function(){
                $("#u_del").click(function(){
                $("#right_sidebar").load("manage.php");
                });
            });
            $(document).ready(function(){
                $("#u_new").click(function(){
                $("#right_sidebar").load("u_create.php");
                });
            });
        </script>
    </head>
    <body>
        <!-- Header code starts here -->
        <div class="row" id="header">
            <div class="col-md-12">
                <div class="col-md-4" style="display: inline-block;">
                    <h3>Task Management System</h3>
                </div>
                <div class="col-md-6" style="text-align: right;display: inline-block;">
                    <b>Email: </b><?php echo $_SESSION['email']; ?>
                    <span style="margin-left:25px;"><b>Name: </b><?php echo $_SESSION['name']; ?></span>
                </div>
            </div>
        </div>
        <!-- Header code ends -->
        <div class="row">
            <div id="left_sidebar" class="col-md-2">
                <a href="user_dashboard.php" type="button" id="logout_link">Dashboard</a>
                <a type="button" id="u_new">Create task</a>
                <a type="button" id="u_del">Delete task</a>
                <a type="button" id="manage_task">Update task</a>
                
                <!--<a type="button" id="apply_leave">Apply leave</a>
                <a type="button" id="view_leave">Leave status</a>-->
                <a type="button" href="logout.php" id="logout_link">Logout</a>
            </div>
            <div id="right_sidebar" class="col-md-10">
                <h4>Hello :)</h4>
                <ul style="list-style-type: none;">
                    <li>Focus on Goals</li>
                    <li>Complete tasks in time</li>
                </ul>
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