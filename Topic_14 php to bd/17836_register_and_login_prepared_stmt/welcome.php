<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');die;
}
 if (isset($_REQUEST['message'])) {
     echo "<h1 align=center> ".$_REQUEST['message']." ".$_SESSION['user'][0]." ".$_SESSION['user'][1]."</h1>";
      
     echo "<pre><b>";  
      print_r($_SESSION);
     echo "</b></pre>";  
    }
?>