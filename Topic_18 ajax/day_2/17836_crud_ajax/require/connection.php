<?php
mysqli_report(false);
 $connection=mysqli_connect('localhost','root','','crud_ajax');
 if(!$connection){
    echo 'Database Error'.mysqli_connect_error();
 }
?>