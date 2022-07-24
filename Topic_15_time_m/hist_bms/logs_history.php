<?php 
	session_start();
    require_once("require/connection.php");

	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs History</title>
</head>
<body>
    <table align="center" width=500 border="1"cellspacing=0>
        <tr>
            <th>Logs_id</th>
            <th>user</th>
            <th>Login</th>
            <th>Logout</th>
        </tr>
        <?php
        $user_id=$_SESSION['user']['user_id'];
        if ($user_id==1) {
            $query = "SELECT * FROM logs  ORDER BY `logs`.`logs_id` DESC";
        }else{
            $query = "SELECT * FROM logs where user_id=$user_id ORDER BY `logs`.`logs_id` DESC";
        }
		$result = mysqli_query($connection,$query);
        if($result->num_rows > 0)
					{
						while($data = mysqli_fetch_assoc($result))
						{
                            
							?>
                            <tr>
                                <th><?= $data['logs_id']?></th>
                                <th><?php 
                                if($data['user_id']==1){
                                    echo "Admin";
                                }else if($data['user_id']==2){
                                    echo "User"; 
                                }else if($data['user_id']==3){
                                    echo "Author"; 
                                } ?></th>
                                <td><?= $data['login']?></td>
                                <td><?= $data['logout']?></td>
                            </tr>
                            <?php 
						}

					}
       
					
        ?>
    </table>
</body>
</html>