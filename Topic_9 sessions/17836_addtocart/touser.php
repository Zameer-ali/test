<?php
session_start();
    if(isset($_SESSION['touser'])){
        $_SESSION['touser']['quantity']++;
    }else{
        $_SESSION['touser']=array('name'=>'touser','price'=>2000,'quantity'=>1);
    }
    header('location:clothes.php?message= touser add to cart successfully');
?>