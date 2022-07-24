<?php
echo "Switch MARKSHEET";
echo "<br>";
$computer = 46;
$Networking = 68;
$Software = 30;
$Hardware = 80;
$OS = 69;

$Obtain_Marks = $Networking+$computer+$Software+$Hardware+$OS;
$total = 500;
$percentage = $Obtain_Marks/$total*100;

echo "Total Marks = ".$total;
echo "<br>";
echo "Obtain Marks = ".$Obtain_Marks;
echo "<br>";
echo "Percentage = ".$percentage;

echo "<br>";
switch(true){
                case $computer<40 || $Networking<40 || $Software<40||$Hardware<40||$OS<40 :
                    echo 'You are Fail';
                break;
   
                case ($percentage >= 40 && $percentage <= 49): 
                    echo "your Grade is = D";
                break;
                case ($percentage >= 50 && $percentage <= 59):
                    echo "your Grade is = C";
                break;
                case ($percentage >= 60 && $percentage <= 69):
                    echo "your Grade is = B";
                break;
                case ($percentage >= 70 && $percentage <= 79):
                    echo "your Grade is = A";
                break;
                case ($percentage >= 80 && $percentage <= 99):
                    echo "your Grade is = A+";
                break;
    default:
         echo"Error.";
    break;
    
}
?>