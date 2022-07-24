<?php
session_start();
if(isset($_SESSION['user'])){
    session_destroy();
    header('location:index.php?message=logout Successfully');
} else{
    header('location:index.php?message=login first');
}
?>