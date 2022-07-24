<?php
//     $str='';
// for( $i=1;$i<=1;$i++){
//     for($j=10;$j>=0;$j--){
//         $str .=" ".$j;
//         echo $str."<br>";
//     }
// }
    $str='';
for( $i=10;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        $str .=" "."&nbsp";
    }
    echo $str."*".'<br>';
    $str='';
    
}
?>