<?php
session_start();
    if(isset($_SESSION['sherwani'])){
        $_SESSION['sherwani']['quantity']++;
    }else{
        $_SESSION['sherwani']=array('name'=>'sherwani','price'=>1000,'quantity'=>1,);
    }
    header('location:clothes.php?message= sherwani add to cart successfully');
?>