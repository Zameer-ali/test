<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignment</title>
</head>
<body>
    <div>
    <?php
        
       $arr=[1,3,4,5,6,7,8];
       $arr2=[1,3,5,3,6,8];
       $array=[];
       $intersect=[];

       for ($i=0; isset($arr[$i]); $i++) {
           for ($j=0; isset($arr2[$j]); $j++) {

               if ($arr[$i]==$arr2[$j]) {
                   $array[]=$arr[$i];
                }
            }
            
        }
        // for ($i=0; $array[$i]; $i++) { 
        //     for ($j=0; $array[$j]; $j++) { 
        //         if ($array[$i]!= $array[$j]) {
        //             $intersect[]=$array[$i];
        //         }
        //     }   
        // }
       
           

        
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    
    ?>
    </div>
</body>
</html>