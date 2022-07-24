<?php
$arr1 = [1,2,6,3,4,5,4,3,5,1];
$arr2 = [1,3,4,5,6,7];
$arr3 = [];
       for ($i=0; isset($arr1[$i]); $i++) {
           for ($j=0; isset($arr2[$j]); $j++) {

               if ($arr1[$i]==$arr2[$j]) {
                   $arr3[]=$arr1[$i];
                }
            }
            
        }
        echo "<pre>";
        print_r($arr3);
        echo "</pre>";
    
?>