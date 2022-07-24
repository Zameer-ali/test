<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Following Into Functions</title>
    <style>
        div{
            border:1px solid black;
            margin-top:5%;
            margin-left:auto;
            margin-right:auto;
            width: 50%;
            text-align:center;  
            background:black;
            color:white;    
            font-size:20px;
            padding:20px;
        }
    </style>
</head>
<body>
<?php
// Sorting function
echo"<div>";
echo"<h1>Sorting</h1>";

$array=[122,23,41,12,11,32,22,12,40,344];
function mySorting($array){
    for($i = 0; $i < count($array); $i ++) {
        for($j = 0; $j < count($array)-1; $j ++){
            if($array[$j] > $array[$j+1]) {
                $arr = $array[$j+1];
                $array[$j+1]=$array[$j];
                $array[$j]=$arr;
            }       
        }
    }
    echo "<pre>";
    print_r($array);
    echo "<pre>";
}
mySorting($array);
echo"</div>";
// Calculator in Switch

echo"<div>";
echo"<h1>Marksheeet</h1>";

function MarksheetInSwitch($Subject1,$Subject2,$Subject3,$Subject4,$Subject5,){
    $Obtain_Marks = $Subject2+$Subject1+$Subject3+$Subject4+$Subject5;
$total = 500;
$percentage = $Obtain_Marks/$total*100;

echo "Total Marks = ".$total;
echo "<br>";
echo "Obtain Marks = ".$Obtain_Marks;
echo "<br>";
echo "Percentage = ".$percentage;

echo "<br>";
switch(true){
                case $Subject1<40 || $Subject2<40 || $Subject3<40||$Subject4<40||$Subject5
<40 :
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
}
MarksheetInSwitch(40,90,84,64,83);
echo "</div>";
echo "<div>";
    echo '<h1>Calculator in Switch</h1>';
    function CalculatorInSwitch($number_1,$number_2,$operator,){
        switch ($operator) {
            case $operator == '+':
                echo "Operator + <br/>";
                echo $number_1." + ".$number_2." = ".$number_1+$number_2;
            break;
            case $operator == '-':
                echo "Operator - <br/>";
                echo $number_1." - ".$number_2." = ".$number_1-$number_2;
            break;
            case $operator == '*':
                echo "Operator * <br/>";
                echo $number_1." * ".$number_2." = ".$number_1*$number_2;
            break;
            case $operator == '/':
                echo "Operator / <br/>";
                echo $number_1." / ".$number_2." = ".$number_1/$number_2;
            break;    
            default:
                echo "Please enter correct operator";        
            break;
        }
    }
    CalculatorInSwitch(2,3,'+');
echo "</div>";

echo "<div>";
    echo "<h1>Array Sum</h1>";
    function ArraySum($array){
        $sum=0;
        $string="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz ";
            
        for($i=0; isset($array[$i]); $i++){
            $sum+=$array[$i];
        }
        echo " <h3>Sum of Array: $sum</h3>";
    }
ArraySum([10,20,3,49,5,6,32]);
echo "</div>";


?>
</body>
</html>