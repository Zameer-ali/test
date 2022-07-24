<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.::Pagination Assignment::.</title>
	<style type="text/css">
		.table_post tr th {
		   padding: 10px;
		   background-color: skyblue;
		   color: white;
		}
		.pagination{
			width: 40%;
			font-size: 25px;
			background-color: gray;
			border: 2px solid blue;
		
		}
		.active {
			text-align: center;   
            background-color: lightblue;
            color: red;
            font-size: 40px;
        }
        
	</style>
</head>
<body>
<?php 
require_once("connection.php");
require_once("functionspagination.php");
?>
	<center>
		<h1>Pagination (Assignment)</h1>
		<hr />
		<h3>
			<span style="clear:both;"></span>
			</p>
		</h3>
		<hr/>
		<?php 
				if(isset($_GET['msg']))
				{
					?>
						<p style="font-size: 20px;font-weight: bold;">
							<span style="color:<?php echo $_GET['class']; ?>">
								<?php echo $_GET['msg']; ?>
							</span>
						</p>
					<?php
				}
			if(isset($_GET['edit_post_id']))
			{
				getEditPostFormByPostId($_GET['edit_post_id']);
			}else
			{
				getAddPostForm();
			}		
		?>
		<hr />
		<table border="1" width="85%" class="table_post">
			<tr>
				<th>Post Title</th>
				<th>Post Summary</th>
				<th>Post Description</th>
				<th>Post Added By</th>
				<th>Actions</th>
			</tr>
			<?php
            $per_page = 3;       
            if (isset($_REQUEST["page"])) {    
                   $_REQUEST["page"];    
            }    
            else {    
              $_REQUEST["page"]=1;    
            }    
           ?>    
         <div class="pagination">    
          <?php  
            $query = "SELECT COUNT(*) FROM posts";     
            $result = mysqli_query($connection, $query);     
            $row = mysqli_fetch_row($result);     
            $total_records = $row[0];          
            $total_pages = ceil($total_records / $per_page);     
            $Links = "";       
            if($_REQUEST["page"]>=2){   
                echo "<a href='pagination2.php?page=".($_REQUEST["page"]-1)." '>  Prev </a>";   
            }       
            for ($i=1; $i<=$total_pages; $i++) {   
              if ($i == $_REQUEST["page"]) {   
                  $Links .= "<a class='active' href='pagination2.php?page="  
                                                    .$i."'>".$i." </a>";   
              }               
              else  {   
                  $Links .= "<a href='pagination2.php?page=".$i."'>   
                                                             ".$i." </a>";     
              }   
            };     
            echo $Links;   
      
            if($_REQUEST["page"] < $total_pages){   
                echo "<a href='pagination2.php?page=".($_REQUEST["page"]+1)." '>  Next </a>";   
            }   
          ?>    
          </div> 
           <?php
           $start_from = ($_REQUEST["page"]-1) * $per_page;  
            $query = "SELECT * FROM `posts` ORDER BY `posts`.`post_id` DESC LIMIT $start_from, $per_page";
	     	$result = mysqli_query($connection,$query);  
				if($result->num_rows > 0)
				{
					while($post = mysqli_fetch_assoc($result)){
					?>
					<tr>
						<td align="center"><?php echo ucfirst($post['post_title']); ?></td>
						<td><?php echo $post['post_summary']; ?></td>
						<td><?php echo $post['post_description']; ?></td>
						<td align="center"><?php echo getUserNameByUserId($post['post_by_user_id'])
						 ?></td>
						 <td>
						 	<a href="pagination2.php?edit_post_id=<?php echo $post['post_id']; ?>">
						 		Edit Post
						 	</a>
						 	 <a href="post_process.php?delete_post_id=<?php echo $post['post_id']; ?>">
						 		Delete Post
						 	</a>
						 	<a href="javascript:void(0)" onclick="deletep(<?php echo $post['post_id']; ?>)">Delete</a>
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
								<h2>Posts Not Avaiables</h2>
							</td>
						</tr>
		        	<?php
				}
			?>
		</table>
	</center>
<script type="text/javascript">
	function deletep(id){
		$flag = confirm("Do You Want This Post Delete");
		if($flag)
		{	
			window.location.href = "post_process.php?delete_post_id="+id+" ";
		}
	} 
</script>
</body>
</html>