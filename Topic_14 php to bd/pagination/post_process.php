<?php 
	require_once("connection.php");
	if(isset($_POST['add_post']))
	{
		extract($_POST);
		$query = "INSERT INTO posts(post_by_user_id,post__title,post_summary,post_description) values(?,?,?,?)";
		$stmt = mysqli_prepare($connection,$query);
        mysqli_stmt_bind_param($stmt,"isss",$role,$post_title,trim($post_summary),trim($post_des));

		if(mysqli_stmt_execute($stmt))
		{
			$id =  mysqli_insert_id($connection);
			header("location:pagination2.php?msg=Post(".$id.") Has Been Added&class=green");
		}
		else
		{
			header("location:pagination2.php?msg=Post Account Has Not Been Added&class=red");
		}

	}


	//edit_post
	if(isset($_POST['edit_post']))
	{
		extract($_POST);

		$query = "Update posts set post__title = ?, post_summary=?,post_description=? where post_id = ?";

		$stmt = mysqli_prepare($connection,$query);

		mysqli_stmt_bind_param($stmt,"sssi",$post_title,trim($post_summary),trim($post_des),$post_id);

		if(mysqli_stmt_execute($stmt))
		{
			
			header("location:pagination2.php?msg=Post(".$post_id.") Has Been Updated&class=green");
		}
		else
		{
			header("location:pagination2.php?msg=Post Account Has Not Been Updated&class=red");
		}

	}


	//Delete Post
	if(isset($_GET['delete_post_id']))
	{

		$post_id =  (int) $_GET['delete_post_id'];

		$query = "Delete From posts where post_id = ?";

		$stmt = mysqli_prepare($connection,$query);

		mysqli_stmt_bind_param($stmt,"i",$post_id);

		if(mysqli_stmt_execute($stmt))
		{
			
			header("location:pagination2.php?msg=Post(".$post_id.") Has Been Deleted&class=green");
		}
		else
		{
			header("location:pagination2.php?msg=Post Account Has Not Been Deleted&class=red");
		}

	}
?>