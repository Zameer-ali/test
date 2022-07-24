<?php
session_start();
require_once('connection.php');
if(isset($_SESSION['user']) && $_SESSION['user']['role_id']==1){
    header('location:admin.php?message=welcome !');die;
    
} elseif(isset($_SESSION['user']) && $_SESSION['user']['role_id']==2){
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
    <?php echo "<pre><b>";  
     print_r($_SESSION);
    echo "</b></pre>";  ?>
</body>
</html>