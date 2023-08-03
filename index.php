<!DOCTYPE html>
<html>
<head>
	<title>To-Do List</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div id="Title" class="header">
		<h1 class="heading">To-Do List</h1>

		<div  class="contant">
			<form action="add-task.php" method="post" id="f1">
				<table id="t1">
				
						<tr>
							<td><input type ="text" name="new-task" placeholder="task Details" autocomplete="off" /></td>
							<td><input type="submit" value="Add to List"></td>
						</tr>
				</table>
			</form>

			<form action="delete-task.php" method="post" class="form_ele" id="f2">
				<table id="t2">
					<tr>
						<td><input type ="text" name="delete-button" placeholder="Task Id To Delete" autocomplete="off"/></td>
						<td><input type="submit" value="Delete from List"></td>
					</tr>	
				</table>
			</form>
		</div>
		

	</div>

	<div class = "wrap">
     <div class ="task-list">
		<ul style="list-style-type:none">
<?php


	require("connect.php");

	$query = mysqli_query($conn, "SELECT * FROM tasks");
	$numrows = mysqli_num_rows($query);

	if($numrows>0)
	{
		while($row = mysqli_fetch_assoc($query))
		{
			$task_id = $row['TaskID'];
			$task_name = $row['Task'];

		echo '<li id="list">
				<table class="out">
					<tr>
						<td>'.$task_id.'</td>
						<td> '.$task_name.'</td>
					</tr>
				       
		
			</li>';
		}
	}
?>
	</ul>
     </div>
	</form>
	</div>
</body>
</html>