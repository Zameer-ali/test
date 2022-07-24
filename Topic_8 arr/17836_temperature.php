<!DOCTYPE html>
<html>
<head>
	<title>assignment</title>
	<style>
		table{
			font-weight:bolder;
		}
		input[type=submit]{font-weight:bolder;padding:10px 20px;background-color:blue;border-radius:10px;color:white;cursor: pointer;}
		
	</style>
</head>
<body>

<form method="Post">
	
    <?php
    $array=[78, 60, 62, 89, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    $sum=0;
    $max1=$array[0];
    $max2=$array[1];
    $max3=$array[2];
    $max4=$array[3];
    $max5=$array[4];
    $min1=$array[0];
    $min2=$array[1];
    $min3=$array[2];
    $min4=$array[3];
    $min5=$array[4];
    for($i=4; isset($array[$i]); $i++){
        
        if ($array[$i] > $max5 && $max5 < $max4) {
            $max5 = $array[$i];
        }
        else
        if ($array[$i] > $max4 && $max4 < $max3) {
            $max4 = $array[$i];
        }
        else
         if ($array[$i] > $max3 && $max3 < $max2) {
            $max3 = $array[$i];
        }
        else if ($array[$i] > $max2 && $max2 < $max1) {
            $max2 = $array[$i];
        }
         else if ($array[$i] > $max1 && $max1 < $max2) {
            $max1 = $array[$i];
        }
        if ($array[$i] < $min5 && $min5 > $min4) {
            $min5 = $array[$i];
        }
        else
        if ($array[$i] < $min4 && $min4 > $min3) {
            $min4 = $array[$i];
        }
        else
         if ($array[$i] < $min3 && $min3 > $min2) {
            $min3 = $array[$i];
        }
        else if ($array[$i] < $min2 && $min2 > $min1) {
            $min2 = $array[$i];
        }
         else if ($array[$i] < $min1 && $min1 > $min2) {
            $min1 = $array[$i];
        }
    }  
    for($i=0; isset($array[$i]); $i++){
        $sum+=$array[$i];
    }
    echo "average of temperature: ".$sum/$i;
    echo "Max five numbers:".$max1.",".$max2.",". $max3.",".$max4.",".$max5."<br>";
    echo "Max five numbers:".$min1.",".$min2.",". $min3.",".$min4.",".$min5."<br>";


    ?>

</form>

</body>
</html>