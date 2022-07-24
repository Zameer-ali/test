<?php
mysqli_report(false);
 $connection=mysqli_connect('localhost','root','','email_system');
 if(!$connection){
    echo 'Database Error'.mysqli_connect_error();
 }
?>