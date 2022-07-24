<?php
session_start();
    if(isset($_SESSION['elite_book'])){
        $_SESSION['elite_book']['quantity']++;
    }else{
        $_SESSION['elite_book']=array('name'=>'elite book','price'=>20000,'quantity'=>1);
    }
    header('location:laptops.php?message= elite book add to cart successfully');
?>