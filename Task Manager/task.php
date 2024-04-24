<?php 	
	session_start(); 
	if(isset($_SESSION['email'])){
		include('includes/connection.php');
?>
<!DOCTYPE html>
<html>

<body>
	<h3 style="color: black;">Your Task List</h3><hr><br>
	<table class="table" style="background-color: whitesmoke;width: 75vw;">
		<tr>
			<th>S.No</th>
			<th>Task ID</th>
			<th>Description</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<?php
			$sno = 1; 
			$query1 = "SELECT COUNT(*) as count FROM tasks WHERE uid = $_SESSION[uid]";
		    $query_run1 = mysqli_query($connection, $query1);
		    $row_count = mysqli_fetch_assoc($query_run1)['count'];
			if($row_count >= 1){ 
		    	$query = "SELECT * FROM tasks WHERE uid = $_SESSION[uid]";
		    	$query_run = mysqli_query($connection, $query);
		    	while($row = mysqli_fetch_assoc($query_run)){
		?>
		    		<tr>
		    			<td><?php echo $sno; ?></td>
						<td><?php echo $row['tid']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><?php echo $row['start_date']; ?></td>
						<td><?php echo $row['end_date']; ?></td>
						<td><?php echo $row['status']; ?></td>
						<td><a href="update_status.php?id=<?php echo $row['tid']; ?>">Update</a></td>
					</tr>
					<?php
					$sno++;
		    	}
			} else {
				echo "<tr><td colspan='7'>No tasks found for this user.</td></tr>";
			}
		?>
	</table>
</body>
</html>
<?php 
	}
	else {
		header('Location:user_login.php');
	}
 ?>
