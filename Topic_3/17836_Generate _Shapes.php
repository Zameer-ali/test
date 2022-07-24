<?php
// $str='';
// for($a="A";$a<='Y';$a++){
//     $str .=' '.$a;
//     echo $str."<br>";
     
// }


// $str='';
// for($a=1;$a<=50;$a++){
//     $str .=' '.$a;
//     echo $str."<br>";    
// }

// $str='';
// for($a=1;$a<=20;$a++){
//     $str .=' '."*";
//     echo $str."<br>";    
// }
$str='';
for($a=1;$a<=10;$a++){
    $str .=' '.$a;
    echo $str;
    for($j=1;$j<=$a;$j++){
        $result=$a*$j;
        $result+=$result;
        echo '=  '.$result."<br>";
        break;
    
    }  
}

?>