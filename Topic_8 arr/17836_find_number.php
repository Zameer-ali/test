<?php
$arr1 = [1,2,
    array(1, 3, 'a', 4),
    array(2, 4, 'A', 3),
];

$count = 0;

foreach ($arr1 as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $sub_key => $sub_value) {
            if ($sub_value >= 0 && $sub_value <= 9) {
                echo "[$key] $sub_value at Position $sub_key.<br />";
                $count ++;
            }
        }
    }else{
        echo "$value at Position $key.<br />";
                $count ++;
    }
}
echo "total occurrence:".$count;
 ?>