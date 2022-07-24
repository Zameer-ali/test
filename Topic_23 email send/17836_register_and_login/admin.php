<?php
session_start();
require_once('connection.php');
if(isset($_SESSION['user']) && $_SESSION['user']['role_id']==1){
  
} elseif(isset($_SESSION['user']) && $_SESSION['user']['role_id']==2){
   header('location:user.php?message=welcome !');die;
} else{
    header('location:index.php?message=login first');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        a{
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header style="text-align: center;background-color:blue;color:white">
        <?php
         if (isset($_REQUEST['message'])) {
            echo "<h1 style=display:inline> ".$_REQUEST['message']." ".$_SESSION['user']['first_name']."</h1>";
        }
        ?>
            <a href="logout.php" style="color:white">logout</a>
    </header>
    <h2 style="text-align: center;">Users Table</h2>
    <table align="center" border="1" width=900 cellspacing=0 cellpadding=10 style="background-color: cyan;">
        <tr>
            <td colspan="6" style="color:green " align="center"><?php 
    if (isset($_REQUEST['msg'])) {
        echo "<p>".$_REQUEST['msg']."</p>";
    }
    ?></td>
        </tr>
        <tr style="background-color:gray;color:aliceblue">
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td>Cnic</td>
            <td>phone No</td>
            <td>Status</td>
        </tr>
        <?php 
        $select_query = "Select * From users where user_id!='".$_SESSION['user']['user_id']."'";
        $result =  mysqli_query($connection, $select_query);
        if($result->num_rows){
            $i=1;
            while($data = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?=$i++?></td>
                        <td><?=$data['first_name']." ".$data['last_name']?></td>
                        <td><?=$data['email']?></td>
                        <td><?=$data['cnic']?></td>
                        <td><?=$data['phone_no']?></td>
                        <td><?PHP
                            if($data['status']==1){
                                ?>
                                <a href="status_process.php?action=deactivate&id=<?=$data['user_id']?>&email=<?=$data['email']?>">Deactivate user</a>
                                <?php
                            }else{
                                    ?>
                                    <a href="status_process.php?action=activate&id=<?=$data['user_id']?>&email=<?=$data['email']?>">Activate user</a>
                                    <?php
                        }
                        ?></td>
                    </tr>
                <?php
            }
        }
        ?>

    </table>
</body>
</html>