<?php
echo "Dear sir i can't understand the assignment so i use two method to solve assignment "."</br>";
echo "Method No:1"."</br>";
$bill=150;
if($bill >=1 && $bill<=100){
    $a=$bill*5;
   $result=$a;
   echo "Units are <= 100   bill is:".$a."<br/>";
   }
 else if($bill>=101 && $bill<=200 ){
    $bill=$bill-100;
    $result=100*5;
    $result2=$bill*10;
    echo "Units are >=101 t0 <=200 bill is:".$result+$result2."<br/>";
}
 else if($bill>=201 && $bill<=300 ){
    $bill=$bill-100;
    $result=100*5;
    $bill=$bill-100;
    $result2=100*10;
    $result3=$bill*15;
    echo "Units are >=201 t0 <=300  bill is:".$result+$result2+$result3."<br/>";
}
else if($bill>=300){
    $bill=$bill-100;
    $result=100*5;
    $bill=$bill-100;
    $result2=100*10;
    $bill=$bill-100;
    $result3=100*15;
    $result4=$bill*25;
    echo "Units are >=301 t0 till last   bill is:".$result+$result2+$result3+$result4."<br/>";
}
else{
    echo "please give correct amount"."<br/>";
} 
echo "<br/><br/><br/><br/><br/><br/><br/> Method 2 <br/>";
$Units = 150;
if($Units >= 1 && $Units <=100){
    echo " Total Units:".$Units."<br>" ."Bill:".$Units*5;
}
else if($Units >= 101 && $Units <=200){
    echo " Total Units:".$bill."<br>" ."Bill:".$Units*10;}
else if($Units >= 201 && $Units <=300){
    echo " Total Units:".$bill."<br>" ."Bill:".$Units*15;
}
else if($Units > 301){
    echo " Total Units:".$Units."<br>" ."Bill:".$Units*25;
}
else{
    echo "please give correct amount"."<br/>";
} 

?>