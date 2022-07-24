<?php 

	require_once("require/connection.php");

	if(isset($_POST['register']))
	{
		extract($_POST);
		//print_r($_POST);

		$query = "Insert Into users(role_id,full_name,email,user_password,gender) values(?,?,?,?,?)";

		$stmt = mysqli_prepare($connection,$query);

		$role = (int) $role;
		mysqli_stmt_bind_param($stmt,"issss",$role,$full_name,$email,$user_password,$gender);

		if(mysqli_stmt_execute($stmt))
		{
			header("location:register.php?msg=Account Has Been Registered&color=green");
		}
		else
		{
			header("location:register.php?msg=Account Has Not Been Registered&color=red");
		}



	}


?>