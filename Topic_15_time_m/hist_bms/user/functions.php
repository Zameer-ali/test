<?php 
	
	
	require_once("../require/connection.php");
	
	function getAllPosts()
	{	
		global $connection;
		$query = "SELECT * FROM posts ORDER BY `posts`.`post_id` DESC";
		$result = mysqli_query($connection,$query);
		return $result;
	}

	function getUserName($id){
		global $connection;
		$query = "SELECT `users`.`full_name` FROM `users` WHERE `users`.`user_id` = ".$id;
		$result = mysqli_query($connection,$query);
		$data = mysqli_fetch_assoc($result);
		return $data['full_name'];

	}

	function getPostById($id){
		global $connection;
		$query = "SELECT * FROM `posts` WHERE `posts`.`post_id` = ".$id;
		$result = mysqli_query($connection,$query);
		$data = mysqli_fetch_assoc($result);
		return $data;

	}

	

	



?>