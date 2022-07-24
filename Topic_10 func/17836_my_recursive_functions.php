<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>

<?php   
        // here is range function and last argument is number where you start from
        function my_range($num1,$num2,$step,$result){
            
                if($num1 < $num2){
                    echo "$result<br>";
                    return my_range($num1+1,$num2,$step,$result+=$step);	
                }else{
                    return "Result:$result<br>";
                }

            }
        my_range(10,100,2,10);
            echo "<hr/>";
        // Even and odd function 
        function even($start,$end,$status){
            
                if($start < $end){
                    echo "$status<br>";
                    return even($start+1,$end,$status+=2);	
                }else{
                    return "Result:$status<br>";
                }

            }
        even(11,100,11);	

        
   
?> 
    
</body>
</html>