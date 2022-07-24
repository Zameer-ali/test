<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HIST >> BMS >> Author</title>
</head>
<body bgcolor="skyblue">
<?php 
		require_once("session.php");
		require_once("functions.php");
		$posts = getAllPosts();
	?>
	<center>
		<h1>HIST >> BMS >> Author</h1>
		<hr />
		<h3>Welcome <?php echo $_SESSION['user']['full_name']; ?>
				<a href="../logout.php" style="float: right;">Logout Here</a>
				<span style="clear: both;"></span>
			</h3>

		<hr />
		<?php 
			require_once("session.php");
			if(isset($_GET['msg']))
			{
				?>
					<h4 style="color:<?php echo $_GET['color']; ?>">
						<?php echo $_GET['msg']; ?>
					</h4>
				<?php
			}

			if(isset($_GET['edit_post_id']))
			{
				getEditPostFormByPostId($_GET['edit_post_id']);
			}
			else
			{
				getAddPostForm();
			}
		?>

		<hr />
		<table border="1" width="100%" class="posts_show_table">
				<tr>
					<th>Post ID</th>
					<th>Post Title</th>
					<th>Post Summary</th>
					<th>Post Description</th>
					<th>Post Added By</th>
					<th>Actions</th>
				</tr>
				<?php 
					 
					if($posts->num_rows > 0)
					{
						while($post = mysqli_fetch_assoc($posts))
						{
							?>
								<tr>
									<td style="text-align: center;">
										<?php 
										echo $post['post_id']; 
										?>	
									</td>
									<td style="text-align: center;">
										<?php 
										echo ucfirst($post['post_title']); 
										?>	
									</td>
									<td style="width:30%">
										<?php 
										echo $post['post_summary']; 
										?>	
									</td>
									<td style="width:30%">
										<?php 
										echo $post['post_description']; 
										?>	
									</td>
									<td style="text-align: center;">
										<?php 
										echo ucfirst(getUserName($post['post_by_user_id'])); 
										?>	
									</td>
									<td>

										
										 
										<a href="index.php?edit_post_id=<?php echo $post['post_id'];?>">Edit Post</a>
										<br />
										<a href="post_process.php?delete_post=<?php echo $post['post_id'];?>">Delete Post</a>

										<br />
										<a href="javascript:void(0)" onclick="deletep(<?php echo $post['post_id'];?>)">Delete Confirm</a>
											
											
										
									</td>
								</tr>
							<?php 
						}

					}
					else
					{
						?>
							<tr>
								<td colspan="4" align="center">
									<h3>NO Posts</h3>
								</td>
							</tr>
						<?php 
					}

				?>
		</table>
	</center>
	<script type="text/javascript">
		
		function deletep(id)
		{
			var flag = confirm("Do You Want Delete This Post");
			if(flag)
			{
				window.location.href="post_process.php?delete_post="+id+" ";
			}	
			
		}
	</script>
	</center>
</body>
</html>