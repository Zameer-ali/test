<?php 
$con=mysqli_connect('localhost','root','','dummy_data');
$result=mysqli_query($con,"SELECT * from dummy");
$file=fopen('export.csv','w');
while($data=mysqli_fetch_assoc($result)){
    fputcsv($file,$data);
}
header('location:index.php');die;




