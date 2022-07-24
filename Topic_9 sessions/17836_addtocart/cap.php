<?php
session_start();
    if(isset($_SESSION['cap'])){
        $_SESSION['cap']['quantity']++;
    }else{
        $_SESSION['cap']=array('name'=>'cap','price'=>300,'quantity'=>1);
    }
    header('location:sports.php?message= cap add to cart successfully');
?>