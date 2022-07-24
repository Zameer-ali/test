<?php
session_start();
    if(isset($_SESSION['suit'])){
        $_SESSION['suit']['quantity']++;
    }else{
        $_SESSION['suit']=array('name'=>'suit','price'=>3000,'quantity'=>1);
    }
    header('location:clothes.php?message= suit add to cart successfully');
?>