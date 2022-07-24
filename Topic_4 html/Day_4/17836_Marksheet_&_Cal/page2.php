
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet and Calculator</title>
</head>
<body>
    <?php 
    if(isset($_POST['sub1'])){
        $Obtain_marks=$_POST['sub1']+$_POST['sub2']+$_POST['sub3']+$_POST['sub4']+$_POST['sub5'];
        $percentage=$Obtain_marks/500*100;
        $total_marks=500;
        $Grade="";
        if($percentage<40){
            $Grade="Your are fail";
        }
        else if($percentage>=40 && $percentage<=49){
            $Grade="E";
        }
        else if($percentage>=50 && $percentage<=59){
            $Grade="D";
        }
        else if($percentage>=60 && $percentage<=69){
            $Grade="C";
        }
        else if($percentage>=70 && $percentage<=70){
            $Grade="B";
        }
        else if($percentage>=80 && $percentage<=100){
            $Grade="A";
        }else{
            $Grade="Wrong number";
        }
    }
    if(isset($_POST['operator'])){
        
        $result="";
        if($_POST['operator']=="+"){
            $result=$_POST['num1']+$_POST['num2'];
        }
        else if($_POST['operator']=="-"){
            $result=$_POST['num1']-$_POST['num2'];
        }
        else if($_POST['operator']=="/"){
            $result=$_POST['num1']/$_POST['num2'];
        }
        else if($_POST['operator']=="*"){
            $result=$_POST['num1']*$_POST['num2'];
        }
        else if($_POST['operator']=="%"){
            $result=$_POST['num1']%$_POST['num2'];
        }
       else{
            $result="Error";
        }
    }
    ?>
    <H1 align='center'>Marksheet</H1>
    <H2 align='center'>Total Marks:<?php  echo isset($_POST['sub1']) ? $total_marks : ""; ?></H2>
    <H2 align='center'>Obatin Marks:<?php  echo isset($_POST['sub1']) ? $Obtain_marks : ""; ?></H2>
    <H2 align='center'>Percentage:<?php  echo isset($_POST['sub1']) ? $percentage : ""; ?></H2>
    <H2 align='center'>Grade:<?php  echo isset($_POST['sub1']) ? $Grade : ""; ?></H2>
        <hr/>
    <h1 align='center'>Calculator</h1>
    <H2 align='center'>Number 1:<?php  echo isset($_POST['num1']) ? $_POST['num1'] : ""; ?></H2>
    <H2 align='center'>Number 2:<?php  echo isset($_POST['num2']) ? $_POST['num2'] : ""; ?></H2>
    <H2 align='center'>Operator:<?php  echo isset($_POST['operator']) ? $_POST['operator'] : ""; ?></H2>
    <H2 align='center'>Answer:<?php  echo isset($_POST['operator']) ?$result: ""; ?></H2>
</body>
</html>