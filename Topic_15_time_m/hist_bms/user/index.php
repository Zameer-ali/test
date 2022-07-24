<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HIST >> BMS >> User</title>
</head>
<body bgcolor="skyblue">
	<?php 
		require_once("session.php");
	?>
	<center>
		<h1>HIST >> BMS >> User</h1>
		<hr />
		<h3>Welcome <?php echo $_SESSION['user']['full_name']; ?>
				<a href="../logout.php" style="float: right;">Logout Here</a>
				<a href="../logs_history.php" style="float: right; margin-right:5px">Logs History</a>
				<span style="clear: both;"></span>
			</h3>

		<hr />
		<?php 
			require_once("functions.php");
			$posts = getAllPosts();
			// print_r($posts);
		
			if($posts->num_rows > 0)
			{
				while($post = mysqli_fetch_assoc($posts))
				{
					?>
					<div style="width:80%;background-color: gray;padding: 10px;margin: 10px;color:white;border: 2px solid red;border-radius: 20px;">
						<h2><?php echo ucfirst($post['post_title']); ?></h2>
						<p style="text-align:left;"><b style="color:black;">Post Summary:</b><?php echo $post['post_summary']; ?></p>
						<a href="detail_post.php?post_id=<?php echo $post['post_id']; ?>" style="">Read More</a>
					</div>
					<?php
				}

				

			}else{
				?>
				<div style="width:100%;background-color: navy;padding: 10px;margin: 10px;color:white">
					<h2>No Posts!.......</h2>
				</div>
				<?php
			}
		?>

		
	</center>
</body>
</html>