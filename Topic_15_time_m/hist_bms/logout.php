<?php 

	session_start();
	require_once("require/connection.php");
	if(isset($_SESSION['user']))
	{ 
		
		$logs_id=$_SESSION['user']['logs_id'];
		echo $query="UPDATE logs SET logout=Now() where logs_id='".$logs_id."'";
			mysqli_query($connection,$query);
		session_destroy();
		header("location:index.php?msg=Logout Successfull!...&color=red");
	}
?>