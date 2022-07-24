<?php
session_start();
require_once('require/connection.php');
 if(isset($_SESSION['user'])){
    $query="UPDATE users SET status=0 WHERE user_id='".$_SESSION['user']['user_id']."'";
    $result=mysqli_query($connection,$query); 
    if($result){
        session_destroy();
        header('location:index.php?message=Logout Successfull &color=red');die;
    } 
}else{
    header('location:index.php?message=Login first&color=red');die;
}
?>