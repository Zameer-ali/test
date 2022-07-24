<?php
echo "MARKSHEET";
echo "<br>";
// Mathematics Calculating System
$math = 56;
$mathPer = $math/100*100;
if($math < 39){
    echo "You are . your Mathematics % is = ".$mathPer;
}
if($math >= 40){
    echo "You are Pass. your Mathematics % is = ".$mathPer;
}
echo "<br>";

// English Marks Calculating System
$eng = 88;
$engPer = $eng/100*100;
if($eng < 40){
    echo "You are Fail. your English % is = ".$engPer;
}
if($eng >= 40){
    echo "You are Pass. your English % is = ".$engPer;
}
echo "<br>";

// Urdu Marks Calculating System
$ur = 43;
$urPer = $ur/100*100;
if($ur < 40){
    echo "You are Fail. your Urdu % is = ".$urPer;
}
if($ur >= 40){
    echo "You are Pass. your Urdu % is = ".$urPer;
}
echo "<br>";

// Science Marks Calculating System
$sc = 75;
$scPer = $sc/100*100;
if($sc < 40){
    echo "You are Fail. your Science % is = ".$scPer;
}
if($sc >= 40){
    echo "You are Pass. your Science % is = ".$scPer;
}
echo "<br>";

// S.Study Marks Calculating System
$ss = 96;
$ssPer = $ss/100*100;
if($ss < 40){
    echo "You are Fail. your S. Studty % is = ".$ssPer;
}
if($ss >= 40){
    echo "You are Pass. your S. Study % is = ".$ssPer;
}
echo "<br>";

// Total Marks Calculating System
$ObtainedMarks = $eng+$math+$ur+$sc+$ss;
$total = 500;
$percntge = $ObtainedMarks/$total*100;

echo "Total Marks = ".$total;
echo "<br>";
echo "Obtained Marks = ".$ObtainedMarks;
echo "<br>";
echo "Over all Percentage = ".$percntge;
echo "<br>";

if($percntge >= 40 && $percntge <= 49){
    echo "your Grade is = D";
}
if($percntge >= 50 && $percntge <= 59){
    echo "your Grade is = C";
}
if($percntge >= 60 && $percntge <= 69){
    echo "your Grade is = B";
}
if($percntge >= 70 && $percntge <= 79){
    echo "your Grade is = A";
}
if($percntge >= 80 && $percntge <= 99){
    echo "your Grade is = A+";
}

?>