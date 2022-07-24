<?php

// $op2 = "blabla";

// function foo($op1)

// {

//     echo $op1;

//     echo $op2;

// }

// foo("hello");

// function foo($msg)

// {

//     echo "$msg";

// }

// $var1 = "foo";

// $var1("will this work");

// function a()

// {
    
//     echo 'I am a';
//     function bbb()
//     {
//         echo 'I am karim';
//     }


// }

// a();
// // a();

// function sum($num1, $num2)

// {

//     $total = $num1 + $num2;

//     echo "chr($total)"; 

// }

// $var1 = 's'.'u'.'m';

// $var1(5, 44);    

// function sum($x, $y)

// {

//     $z = $x + $y;

//     return $z;

// }

// echo "5 + 10 = " . sum(7,13) . "<br>";

// echo "7 + 13 = " . sum(2,4) . "<br>";

// echo "2 + 4 = " . sum(5,10);

// function addFive($num)

// {

//     $num += 5;

// }

// function addSix(&$num)

// {

//     $num += 6;

// }

// $orignum = 10;

// addFive($orignum );

// echo "Original Value is $orignum<br />";

// addSix( $orignum );

// echo "Original Value is $orignum<br />";

// function do($myString)

// {

//     echo strpos($myString, "donkey",0);

// }

// do("The donkey looks like a horse.");

// $title = "O'malley wins the heavyweight championship!";

// echo ucwords($title);

// function A1($x)

// {

//     switch($x)

//     {

//     case 1: 

//         //this statement is the same as if($x == 1)

//         echo 'Case 1 was executed.';

//         break;

//     case 2: 

//         //this statement is the same as if($x == 2)

//         echo 'Case 2 was executed.';

//         break;

//     case 3: 

//         //this statement is the same as if($x == 3)

//         echo 'Case 3 was executed.';

//         break;

//     case 4: 

//         //this statement is the same as if($x == 4)

//         echo 'Case 4 was executed.';

//         break;

//     default: 

//         //this statement is the same as if $x does not equal the other conditions

//         echo 'Default was executed.';

//         break;



//     }

// }

// A1(9);

// function TV($string)

// {

//     echo "my favourite TV show is ".$string;

//     function b()

//     {

//         echo " I am here to spoil this code";

//     }

// }

// function b()

// {

//     echo " I am here to spoil this code";

// }

// TV('zameerva');
// b();

// function TV($string)

// {

//     echo "my favourite TV show is ".$string;

//     function b()

//     {

//         echo " I am here to spoil this code";

//     }

// }

// function b()

// {

//     echo " I am here to spoil this code";

// }

// b();

// TV("Sherlock");

// function TV($string)

// {

//     echo "my favourite TV show is ".$string;

//     function b()

//     {

//         echo " I am here to spoil this code";

//     }

// }

// a("Sherlock");

// // b();
// function calc($num1, $num2)

// {

//     $total = $num1 * $num2; 

// }

// $result = calc(42, 0);

// echo $result;  //nothing will be printed because it is null; 


// function calc($num1, $num2)

// {

//     $total = $num1 * $num2;

//     return $total; //0

// }

// $result = calc(42, 0);

// echo $result;    

// $var = 10;

// function one()

// {

//     echo $var;

// }

// one();

// function mine($m)

// {

//     if ($m < 0)

//         echo "less than 0";

//     if ($m >= 0)

//         echo "Not True";

// }

// mine(0);
// $x = 75;

// $y = 25; 

// function addition()

// {

//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

// }

// addition();

// echo $z;
// function test($int)

// {

//     if ($int == 1)
//         echo "This Works";

//     if ($int == 2)
//         echo "This Too Seems To Work";

// }

// test(1);

// TEST(2);
// function one($string)

// {

//     echo "I am ". $String;

// }

// one("Batman");
// function string($title)

// {

//     // $title = ucwords($title);

//     echo ucfirst($title);

// }

// string("you went full retard");
// function movie($int)

// {

//     $movies = array("Fight Club", "Kill Bill", "Pulp Fiction");

//     echo "You Do Not Talk About ". $movies[$integer];

// }

// movie(0);
// function start($string)

// {

//     if ($string < 45)

//         return 20;

//     else

//         return 40;

// }

// $t = start(90);

// if ($t < 20)

// {

//     echo "Have a good day!";

// }

// else

// {

//     echo "Have a good night!";

// }
// function email()

// {

//     $email = 'user@yahoo.com';

//     $new = strstr($email, '@');

//     echo $new;

// }

// email();

?>