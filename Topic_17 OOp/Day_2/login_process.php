<?php 
	
	require_once("require/database_setting.php");
	require_once("require/database.php");
	$database = new Database($hostname,$username,$password,$database_name);
	$result =   $database->login_process($_POST['email'], $_POST['Password']);
	if($result->num_rows){
		echo "Login Successfully";
	}
	else{
		echo "Invalid Email Or Password";
	}

?>