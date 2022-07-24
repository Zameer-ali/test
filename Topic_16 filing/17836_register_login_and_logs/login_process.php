<?php
session_start();

require_once('connection.php');
if (isset($_REQUEST['submit'])) {
    $user_name=$_REQUEST['user_name'];
    $password=$_REQUEST['password'];
    
    if(!($user_name=='' or $password=='')){
        $flag=true;
       $select_query = "Select email,password,user_id,first_name,last_name,cnic,phone_no,role_id From users where email=? and password=?";
       $stmt =  mysqli_prepare($connection,$select_query);
       mysqli_stmt_bind_param($stmt,"ss",$user_name,$password);
       mysqli_stmt_execute($stmt);
       mysqli_stmt_bind_result($stmt,$u_email,$u_pass,$user_id,$u_first_n,$u_l_n,$cnic,$phone,$role_id);
       $test=mysqli_stmt_fetch($stmt);
        if($test){
            $_SESSION['user']=array($user_id,$u_first_n,$u_l_n,$u_email,$u_pass,$cnic,$phone,$role_id);
            $flag=false;
            $logs="./logs/".$u_first_n."_".$user_id;
            
            $file=fopen($logs,'a');
            $date="<tr><td>$user_id</td><td>$u_first_n $u_l_n</td><td>".date("d-F-Y h:i:s a")."</td>";
            fwrite($file,$date);
            $all=fopen('./logs/all_logs','a');
            fwrite($all,$date);
            if($role_id==1){
                header('location:./admin/Dashboard.php');die;
            }else if($role_id==2){
                header('location:./user/Dashboard.php');die;
            }
        } else {
            header('location:index.php?message=<li>UserName and Password not matched!</li>');die;
        }
    }else{
        header('location:index.php?message=<li>Please Enter UserName and Password!</li>');die;
    }
}
?>