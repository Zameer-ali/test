<?php
session_start();
    if(isset($_SESSION['dell'])){
        $_SESSION['dell']['quantity']++;
    }else{
        $_SESSION['dell']=array('name'=>'Dell 7886e','price'=>17000,'quantity'=>1,);
    }
    header('location:laptops.php?message= Dell 7886e add to cart successfully');
?>