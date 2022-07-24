<?php
mysqli_report(false);
 $connection=mysqli_connect('localhost','root','','chat_room');
 if(!$connection){
    echo 'Database Error'.mysqli_connect_error();
 }
?>