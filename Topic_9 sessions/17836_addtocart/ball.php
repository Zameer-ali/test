<?php
session_start();
    if(isset($_SESSION['ball'])){
        $_SESSION['ball']['quantity']++;
    }else{
        $_SESSION['ball']=array('name'=>'Ball','price'=>100,'quantity'=>1);
    }
    header('location:sports.php?message= Ball add to cart successfully');
?>