<?php 


	require_once("session.php");
	require_once("../require/connection.php");

	if(isset($_POST['add_post']))
	{
		extract($_POST);
		$query  = "Insert Into posts(post_by_user_id,post_title,post_summary,post_description) values(?,?,?,?)";

		$stmt = mysqli_prepare($connection,$query);


		$user_id =  $_SESSION['user']['user_id'];
		mysqli_stmt_bind_param($stmt,"isss",$user_id,$post_title,trim($post_summary),trim($post_des));

		if(mysqli_stmt_execute($stmt))
		{
			$id = mysqli_insert_id($connection);
			header("location:index.php?msg=Post (".$id.") Has Been added&color=green");
		}
		else
		{
			header("location:index.php?msg=Post Has Not Been add&color=red");
		}


	}

	if(isset($_POST['edit_post']))
	{
		extract($_POST);
		$query  = "Update posts set post_title=?,post_summary=?,post_description=? where post_id=?";

		$stmt = mysqli_prepare($connection,$query);


		$id =  (int) $post_id;
		mysqli_stmt_bind_param($stmt,"sssi",$post_title,trim($post_summary),trim($post_des),$id);

		if(mysqli_stmt_execute($stmt))
		{
			header("location:index.php?msg=Post (".$id.") Has Been Updated&color=green");
		}
		else
		{
			header("location:index.php?msg=Post Has Not Been Updated&color=red");
		}


	}

	if(isset($_GET['delete_post']))
	{
		$id = (int) $_GET['delete_post'];

		$query  = "Delete From posts where post_id=?";

		$stmt = mysqli_prepare($connection,$query);
		
		mysqli_stmt_bind_param($stmt,"i",$id);

		if(mysqli_stmt_execute($stmt))
		{
			header("location:index.php?msg=Post (".$id.") Has Been Deleted&color=green");
		}
		else
		{
			header("location:index.php?msg=Post Has Not Been Deleted&color=red");
		}

	}


?>













