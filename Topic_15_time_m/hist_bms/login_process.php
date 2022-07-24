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
				$query="INSERT into logs(logs_id ,login,   logout,  user_id  ) Values('null',Now(),'null','1')";
				mysqli_query($connection,$query);
				$_SESSION['user']['logs_id']=mysqli_insert_id($connection);
				header("location:admin/index.php");
			}
			else if($user_data['role_id'] ==  2)
			{
				$query="INSERT into logs(logs_id ,login,   logout,  user_id  ) Values('null',Now(),'null','2')";
				mysqli_query($connection,$query);
				$_SESSION['user']['logs_id']=mysqli_insert_id($connection);
				header("location:author/index.php");
			}
			else if($user_data['role_id'] ==  3)
			{
				echo $query="INSERT into logs(logs_id ,login,   logout,  user_id  ) Values('null',Now(),'null','3')";
				mysqli_query($connection,$query);
				$_SESSION['user']['logs_id']=mysqli_insert_id($connection);
				header("location:user/index.php");
			}

		}
		else
		{

			header("location:index.php?msg=Login Failed!...&color=red");

		}






	}

?>