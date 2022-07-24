<?php
session_start();
    if(isset($_SESSION['mac'])){
        $_SESSION['mac']['quantity']++;
    }else{
        $_SESSION['mac']=array('name'=>'Mac','price'=>30000,'quantity'=>1,);
    }
    header('location:laptops.php?message= Mac add to cart successfully');
?>