<?php  
	session_start();
	if(isset($_SESSION['email'])){
	include('./includes/connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h3 style="color: black;">Create a New Task</h3><hr><br>
	<div class="row">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="form-group">
					<select name="id" class="form-control">
						<option>-Select-</option>
						<?php  
					                ?>
					                <option value="<?php echo $_SESSION['uid']; ?>"><?php echo $_SESSION['name']; ?></option>
					            <?php
					            
					        
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Description:</label>
					<textarea class="form-control" rows="3" cols="50" name="description" placeholder="Mention the task"></textarea>
				</div>
				<div class="form-group">
					<label>Start date:</label>
					<input type="date" class="form-control" name="start_date" />
				</div>
				<div class="form-group">
					<label>End date:</label>
					<input type="date" class="form-control" name="end_date" placeholder="Start date" />
				</div>
				<input type="submit" class="btn btn-warning" name="create_task" value="Create" placeholder="End date" />
			</form>
		</div>
	</div>
</body>
</html>
<?php  
}
else{
    header('Location:admin_login.php');
}
?>