<?php
session_start();
$connection=mysqli_connect('localhost','root','','task');
if(mysqli_connect_errno()){
    echo "database connection Error";
}
if (isset($_REQUEST['register'])) {
    extract($_REQUEST);
    if(!empty($reference_by)){
        $Select="SELECT * FROM users WHERE reference_id='".$reference_by."'";
        $data=mysqli_query($connection,$Select);
        if ($data->num_rows) {
            $user_data=mysqli_fetch_assoc($data);
            $count=$user_data['refered_users'];
            echo ++$count;

            $reference_id="ID".rand(10000,50000);
            $query="INSERT INTO users(user_name,user_email,password,reference_id,referenced_by) VALUES('".$user_name."','".$email."','".$password."','".$reference_id."','".$reference_by."')";
            $result=mysqli_query($connection,$query);
            
            echo $update="UPDATE users SET refered_users='".$count."'  WHERE reference_id='".$reference_by."'";
            mysqli_query($connection,$update);
            header("location:login.php?message=Register successfully");
        }else{
            header("location:register.php?message=referenced_by not available in our database");
        }
    }else{

        $reference_id="ID".rand(10000,50000);
        $query="INSERT INTO users(user_name,user_email,password,reference_id,referenced_by) VALUES('".$user_name."','".$email."','".$password."','".$reference_id."','".$reference_by."')";
        $result=mysqli_query($connection,$query);
        header("location:login.php?message=Register successfully");

    }

}
if(isset($_REQUEST['login'])){
    echo "j";
    extract($_REQUEST);
    echo $Select="SELECT * FROM users WHERE user_email='".$email."' AND password='".$password."' ";
    $data=mysqli_query($connection,$Select);
    if ($data->num_rows) {
        $user_data=mysqli_fetch_assoc($data);
        $_SESSION['user_data']=$user_data;
        header("location:dashboard.php");

    }else{
    header("location:login.php?message=Invalid user");
    }
}
?>