<?php 
session_start();

if(!isset($_SESSION['user']))
{
	header("location:../index.php?msg=First Login Please!...&color=red");
}

if(isset($_SESSION['user']['role_id']) && $_SESSION['user']['role_id'] !=  1)
{
	header("location:../index.php");
}

?>