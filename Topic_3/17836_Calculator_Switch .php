<?php
echo "CALCULATOR in Switch";
echo"<BR>";
$num1 = 30;
$num2 = 15;
$oprtr = '+';

switch ($oprtr) {
    case $oprtr === '+':
        echo "The Operator is = +";
        echo"<br>";
        echo $num1." + ".$num2." Sum is = ".$num1+$num2;
    break;
    case $oprtr === '-':
        echo "The Operator is = -";
        echo"<br>";
        echo $num1." - ".$num2." Sum is = ".$num1-$num2;
    break;
    case $oprtr === '*':
        echo "The Operator is = *";
        echo"<br>";
        echo $num1." * ".$num2." Sum is = ".$num1*$num2;
    break;
    case $oprtr === '/':
        echo "The Operator is = /";
        echo"<br>";
        echo $num1." / ".$num2." Sum is = ".$num1/$num2;
    break;    
    default:
        echo "Error";        
    break;
}

?>