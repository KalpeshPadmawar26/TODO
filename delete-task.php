<?php
	$task = $_POST['delete-button'];
	require("connect.php");
	if($conn->query("DELETE FROM tasks WHERE TaskID='$task'")===TRUE)
	{
	echo "Successfully deleted";
	}
	else
	{
	echo "Error: Query Failed <br>" . $conn->error;
	}
	
	header('Refresh: 1; url=index.php');
?>