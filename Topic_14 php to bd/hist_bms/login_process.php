<?php 
	session_start();
	require_once("require/connection.php");

	if(isset($_POST['login']))
	{
		//print_r($_POST);
		extract($_POST);

		$query = "SELECT * FROM `users` WHERE `users`.`email` = ? AND `users`.`user_password` = ?";

		$stmt = mysqli_prepare($connection,$query);

		mysqli_stmt_bind_param($stmt,"ss",$email,$user_password);
		mysqli_stmt_execute($stmt);

		//Way 1
		// mysqli_stmt_bind_result($stmt,$user_id,$role_id,$full_name,$email,$user_password,$gender);
		// mysqli_stmt_fetch($stmt);
		// echo $user_id;
		
		//Way 2
		$data = mysqli_stmt_get_result($stmt);
		if($data->num_rows > 0)
		{

			$user_data = mysqli_fetch_assoc($data);
			$_SESSION['user'] = $user_data;
			if($user_data['role_id'] ==  1)
			{
				header("location:admin/index.php");
			}
			else if($user_data['role_id'] ==  2)
			{
				header("location:author/index.php");
			}
			else if($user_data['role_id'] ==  3)
			{
				header("location:user/index.php");
			}

		}
		else
		{

			header("location:index.php?msg=Login Failed!...&color=red");

		}






	}

?>