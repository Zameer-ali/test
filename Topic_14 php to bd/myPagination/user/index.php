
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HIST>BMS>Admin</title>
	<style type="text/css">
		.post{
			width: 60%;
			margin: 10px;
			padding: 10px;
			background-color: skyblue;
			border: 2px solid red;
			border-radius: 10px;
		}
	</style>
</head>
<body>
<?php 
	require_once("functions.php");
?>
	<center>
		<h1>HIST BMS (User Penal)</h1>
		<hr />
		<h3>
			<a style="float: right;" href="../logout.php"><span >Logout Here..</span></a>
			<span style="clear:both;"></span>
			</p>
		</h3>
		<hr/>
		<?php 
				
				$query = "SELECT COUNT(*) as Total from posts";
				$result = mysqli_query($connection,$query);
				$data = mysqli_fetch_array($result);
				$total = $data['Total'];
				$perPage = 3;	
			
			if(isset($_REQUEST['page']))
			{

				$info=ceil($total/$perPage);
				for($i=0;$i<$info;$i++){
					?>
					<a href="index.php?page=<?php echo $i ?>"><?php echo $i+1 ?></a>
					<?php
					if($_REQUEST['page']==$info)
					{
						$_REQUEST['page']=0;
						$start=0;
						
					}else{
						
					}
					if ($_REQUEST['page']==0) {
						$_REQUEST['page']=0;
					} 
					
				}
				 $start = $perPage*$_REQUEST['page'];
			}

			else
			{
				$_REQUEST['page']=1;
				$start=0;
			}
			?>
		<a href="index.php?page=<?php echo $_REQUEST['page']+1?>">Next</a>
		<a href="index.php?page=<?php echo $_REQUEST['page']-1?>">pre</a>
		<hr/>
	
		<?php
			
			$query = "SELECT * FROM `posts` ORDER BY `posts`.`post_id` DESC limit $start,$perPage";
			$result = mysqli_query($connection,$query);
			$posts = $result;
			
			if($posts->num_rows > 0)
			{

				while($post = mysqli_fetch_assoc($posts)){
				
				?>
					<div class="post">
							<h1 style="text-align: left;"><?php echo ucfirst($post['post_title']); ?></h1>
							<h1 style="text-align: left;"><?php echo ucfirst($post['post_id']); ?></h1>
							<p style="text-align: left;"><b>Summary:</b><?php echo $post['post_summary']; ?></p>
							<a href="post_detail.php?post=<?php echo $post['post_id']; ?>">Read More</a>
					</div>
				<?php
				}
			}
			else
			{
				?>
				<div style="width: 80%;background-color: gray;padding: 10px;margin: 20px;">
					<h1>Post Not Avaiables</h1>
				</div>
				<?php
			}
		?>
	</center>

</body>
</html>