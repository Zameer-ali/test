<?php 
 
mysqli_report(false);
 $connection=mysqli_connect('localhost','root','','for_search');
 if (!$connection) {
     echo "Error:". mysqli_connect_error();
 }
?>