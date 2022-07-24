<?php
session_start();
require_once('connection.php');
if(!isset($_SESSION['user'])){
    header('location:login.php');die;
}
if (isset($_REQUEST['submit'])) {
    $user_name=$_REQUEST['user_name'];
    $password=$_REQUEST['password'];
    if(!($user_name=='' or $password=='')){
        $flag=true;
        $select_query = "Select * From users_data";
        $result =  mysqli_query($connection, $select_query);
        while($data = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        if($data['email']==$user_name && $data['password']==$password){
                            $_SESSION['user']=$data;
                            $flag=false;
                            header('location:welcome.php?message=welcome !');die;
                        }
                       
        }
        if ($flag) {
            header('location:login.php?message=<li>UserName and Password not matched!</li>');die;
        }
    }else{
        header('location:login.php?message=<li>Please Enter UserName and Password!</li>');die;
    }
}
?>