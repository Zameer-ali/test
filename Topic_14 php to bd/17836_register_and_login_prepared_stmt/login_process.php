<?php
session_start();
require_once('connection.php');
if (isset($_REQUEST['submit'])) {
    $user_name=$_REQUEST['user_name'];
    $password=$_REQUEST['password'];
    
    if(!($user_name=='' or $password=='')){
        $flag=true;
       $select_query = "Select email,password,first_name,last_name,cnic,phone_no ,address,country,gender From users_data where email=? and password=?";
       $stmt =  mysqli_prepare($connection,$select_query);
       mysqli_stmt_bind_param($stmt,"ss",$user_name,$password);
       mysqli_stmt_execute($stmt);
       mysqli_stmt_bind_result($stmt,$u_email,$u_pass,$u_first_n,$u_l_n,$cnic,$phone,$address,$country,$gender);
       $test=mysqli_stmt_fetch($stmt);
        if($test){
            $_SESSION['user']=array($u_first_n,$u_l_n,$u_email,$u_pass,$cnic,$phone,$address,$country,$gender);
            $flag=false;
            header('location:welcome.php?message=welcome !');die;
        } else {
            header('location:login.php?message=<li>UserName and Password not matched!</li>');die;
        }
    }else{
        header('location:login.php?message=<li>Please Enter UserName and Password!</li>');die;
    }
}
?>