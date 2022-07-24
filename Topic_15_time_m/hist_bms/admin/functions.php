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

	function getAddPostForm()
	{
		?>
			<fieldset style="width:60%">
			<legend>Add Post</legend>
			<form action="post_process.php" method="POST">
				<table style="width:100%">
					<tr>
						<th>Post Title:</th>
						<td>
							<input type="text" name="post_title" required style="width:70%" placeholder="Enter post title">
						</td>
					</tr>
					<tr>
						<th>Post Summary:</th>
						<td>
							<textarea name="post_summary" required cols="50" rows="4" placeholder="Enter post summary"></textarea>
						</td>
					</tr>
					<tr>
						<th>Post Description:</th>
						<td>
							<textarea name="post_des" required cols="50" rows="6" placeholder="Enter post description"></textarea>
						</td>
					</tr>
					<tr>
						<th></th>
						<td>
							<input type="submit" name="add_post" value="Add Post" style="width:30%">
						</td>
					</tr>

				</table>
			</form>
		</fieldset>

		<?php
	}


	function getEditPostFormByPostId($id)
	{
		$data = getPostById($id);
		// print_r($data);

		?>
			<fieldset style="width:60%">
			<legend>Edit Post</legend>
			<form action="post_process.php" method="POST">
				<input type="hidden" name="post_id" value="<?php echo $id;?>">
				<table style="width:100%">
					<tr>
						<th>Post Title:</th>
						<td>
							<input type="text" name="post_title" required style="width:70%" placeholder="Enter post title" value="<?php echo $data['post_title'];?>">
						</td>
					</tr>
					<tr>
						<th>Post Summary:</th>
						<td>
							<textarea name="post_summary" required cols="50" rows="4" placeholder="Enter post summary"><?php echo $data['post_summary'];?></textarea>
						</td>
					</tr>
					<tr>
						<th>Post Description:</th>
						<td>
							<textarea name="post_des" required cols="50" rows="6" placeholder="Enter post description"><?php echo $data['post_description'];?></textarea>
						</td>
					</tr>
					<tr>
						<th></th>
						<td>
							<input type="submit" name="edit_post" value="Edit Post" style="width:30%">
						</td>
					</tr>

				</table>
			</form>
		</fieldset>

		<?php
	}

	



?>