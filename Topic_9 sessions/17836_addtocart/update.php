<?php
    session_start();
    if (isset($_REQUEST['update'])) {
        $_SESSION[$_REQUEST['hidden']]['quantity']=$_REQUEST['quantity'];
        
    }
    header('location:cart.php?message=update successfull');
?>