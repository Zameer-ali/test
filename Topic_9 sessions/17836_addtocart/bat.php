<?php
session_start();
    if(isset($_SESSION['bat'])){
        $_SESSION['bat']['quantity']++;
    }else{
        $_SESSION['bat']=array('name'=>'Bat','price'=>200,'quantity'=>1);
    }
    header('location:sports.php?message= Bat add to cart successfully');
?>