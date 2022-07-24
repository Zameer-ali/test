<?php
session_start();
require_once('../connection.php');
if (isset($_REQUEST['update'])) {
    $user_id=$_REQUEST['user_id'];
    $name=$_REQUEST['first_name'];
    $l_name=$_REQUEST['last_name'];
    $u_cnic=$_REQUEST['cnic'];
    $u_phone=$_REQUEST['phone_no'];
    $update_query="UPDATE users SET first_name=?,last_name=?,cnic=?,phone_no=? WHERE user_id=?";
    $stmt = mysqli_prepare($connection,$update_query);
    mysqli_stmt_bind_param($stmt,"ssssi",$name,$l_name,$u_cnic,$u_phone,$user_id);
    $result = mysqli_stmt_execute($stmt);
  if($result)
  {
      header("location:./Dashboard.php?message=Record_ID ($user_id) Update successfully!");die();
  }
  else
  {
      header("location:./Dashboard.php?error_message='".mysqli_error($connection)."'");die;
  } 
}
?>