<?php 
	
	require_once("require/database_setting.php");
	require_once("require/database.php");

	$database = new Database($hostname,$username,$password,$database_name);
	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";*/
if (isset($_REQUEST['login'])) {
	$result =   $database->login_process($_POST['email'], $_POST['Password']);
	
	/*echo "<pre>";
	var_dump($result);
	echo "</pre>";*/

	if($result->num_rows){
		echo "Login Successfully";
	}
	else{
		echo "Invalid Email Or Password";
	}
}
if(isset($_REQUEST['ch_pass'])){
	$result =   $database->login_process($_POST['email'], $_POST['old_pass']);

	if($result->num_rows){
		$change =   $database->ch_pass_process($_POST['email'], $_POST['new_pass']);
		if ($change) {
			header("location:index.php?message=Password Change Succesfully");die;
		}else{
			header("location:index.php?message=password not change");die;
		}
	}
	else{
		header("location:index.php?message=Invalid User");die;
	}
}
if(isset($_REQUEST['forgot_pass'])){
		$update =   $database->forgot_pass_process($_POST['email'], $_POST['Password']);
		header("location:index.php?message=Password Update Succesfully");die;
}

if(isset($_REQUEST['Register'])){
	 $register =   $database->register_process($_POST['name'],$_POST['email'], $_POST['Password'],$_POST['gender']);
	 if ($register) {
		header("location:index.php?message=user register Succesfully");die;
	}else{
		header("location:register.php?message=User not registered");die;
	}
	
}

?>