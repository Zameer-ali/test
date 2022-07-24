<?php
session_start();
require_once('connection.php');
if (isset($_REQUEST['submit'])) {
    $user_name=$_REQUEST['user_name'];
    $password=$_REQUEST['password'];
    if(!($user_name=='' or $password=='')){
        $select_query = "Select * From users where email='".$user_name."' AND password='".$password."'";
        $result =  mysqli_query($connection, $select_query);
        if($result->num_rows){
            $data = mysqli_fetch_assoc($result);
            if($data['status']==1){
                $_SESSION['user']=$data;
                if($data['role_id']==1){
                    header('location:admin.php?message=welcome !');die;
                }else{
                    header('location:user.php?message=welcome !');die;
                }
            }else{
                header('location:index.php?message=<li>Contact Admin Your Account is deactivated!</li>');die;
            }
                            $_SESSION['user']=$data;
         }else{
             header('location:index.php?message=<li>UserName and Password not matched!</li>');die;
         }
    }else{
        header('location:index.php?message=<li>Please Enter UserName and Password!</li>');die;
    }
}
?>