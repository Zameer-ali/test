<?php 

	require_once("connection.php");

	function getAllPosts()
	{
		global $connection;
		$query = "SELECT * FROM `posts` ORDER BY `posts`.`post_id` DESC";
		$result = mysqli_query($connection,$query);
		return $result;
	}
	function getPostDataByPostId($post_id)
	{
		global $connection;
		$query = "SELECT * FROM `posts` WHERE `posts`.`post_id` = ".$post_id;
		$result = mysqli_query($connection,$query);
		$data = mysqli_fetch_assoc($result);
		return $data;

	}

	function getUserNameByUserId($user_id)
	{   
		$user_id=1;
		global $connection;
		$query = "SELECT `users`.`full_name` FROM `users` WHERE `users`.`user_id` = ".$user_id;
		$result1 = mysqli_query($connection,$query);
		$data = mysqli_fetch_assoc($result1);
		return $data['full_name'];
	}


	function getAddPostForm()
	{
		?>
			<fieldset style="width:60%">
			<legend>Add Post</legend>
			<form action="post_process.php" method="POST">
				<table style="width:100%">
					<tr>
						<th>Post Title :</th>
						<td> <input type="text" name="post_title" required style="width:80%"></td>
					</tr>
					<tr>
						<th>Post Summary :</th>
						<td> 
							<textarea name="post_summary" cols="57" rows="5" required>
								
							</textarea>
						</td>
					</tr>
					<tr>
						<th>Post Description :</th>
						<td> 
							<textarea name="post_des" cols="57" rows="7" required>
								
							</textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="add_post" value="Add Post">
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
		<?php

	}


	function getEditPostFormByPostId($post_id)
	{
		$data = getPostDataByPostId($post_id);
		//print_r($data);

		?>
			<fieldset style="width:60%">
			<legend>Edit Post</legend>
			<form action="post_process.php" method="POST">
				<input type="hidden" name="post_id" value="<?php echo $data['post_id']; ?>">
				<table style="width:100%">
					<tr>
						<th>Post Title :</th>
						<td> <input type="text" name="post_title" required style="width:80%" value="<?php echo $data['post__title']; ?>" ></td>
					</tr>
					<tr>
						<th>Post Summary :</th>
						<td> 
							<textarea name="post_summary" cols="57" rows="5" required>
								<?php echo $data['post_summary']; ?>
							</textarea>
						</td>
					</tr>
					<tr>
						<th>Post Description :</th>
						<td> 
							<textarea name="post_des" cols="57" rows="7" required>
								<?php echo $data['post_description']; ?>
							</textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="edit_post" value="Edit Post">
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
		<?php

	}
	


?>