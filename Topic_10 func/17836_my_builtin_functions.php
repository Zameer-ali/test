<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built in Functions</title>
    <style>
        div{
            border:1px solid black;
            margin-top:5%;
            margin-left:auto;
            margin-right:auto;
            width: 50%;
            text-align:center;  
            background:black;
            color:white;    
            font-size:20px;
            padding:20px;
        }
    </style>
</head>
<body>
        <?php
        // lower to upper case=====================================================================================
        echo"<div>";
        echo"<h1>LowerCase to UpperCase</h1>";
        function my_strtoupper($String){
            $CAPITAL="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $small="abcdefghijklmnopqrstuvwxyz";
        $store="";
        for($i=0; isset($String[$i]); $i++){
        for($j=0;$j<=25;$j++){
        
            if($String[$i]==$CAPITAL[$j]){
                $store .=$String[$i];
            }
            else if($String[$i]==$small[$j]){
                $store .=$CAPITAL[$j];
            }
        }
        
        }
        echo "<h3>".$store."</h3>";
        }
        my_strtoupper('ZaMrr');
        echo"</div>";

        // implode function======================================================================================
        echo"<div>";
        echo"<h1>Implode Function</h1>";
        function my_implode($array){
       $text='';
       for ($i=0; isset($array[$i]); $i++) {
           $text.=$array[$i]." ";
       }
        echo $text;
        } 
        my_implode(['a','quick','brown',]);
        echo"</div>";

        // explode function=======================================================================================
        echo"<div>";
        echo"<h1>Explode Function</h1>";
        function my_explode($string){
       $text='';
       for ($i=0; isset($string[$i]); $i++) {
       }
       $string[$i]=" ";
        for ($i=0; isset($string[$i]); $i++) {
             
            if ($string[$i]!=' ') {
               $text.=$string[$i];
            }else{
                
                $arr[]=$text;
                $text='';  
                
            }

        }
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
        } 
        my_explode('zamer ali tunio');
        echo"</div>";
        // StrLength===============================================================================================
        echo"<div>";
        echo"<h1>String length</h1>";
        function my_strlng($string){
            for ($i=0; isset($string[$i]); $i++) { 
               
            }
            echo "length of String ".$i;
        }
        my_strlng('a wuick broh');
        echo"</div>";
         // strrev====================================================================================================
         echo"<div>";
         echo"<h1>String Reverse</h1>";
         function my_strrev($text){
            $str="";
            for ($i=0; isset($text[$i]); $i++){
                if($i==0){
                    continue;
                }
                $str .= $text[-$i];
            }
            echo "<h3>".$str.$text[0]."<h3>";
         }
         my_strrev('a quick brown fox');
         echo"</div>";
        // range ====================================================================================================
           echo"<div>";
           echo"<h1>Range Function</h1>";
           function my_range($value1,$value2,$step){
              
                   for ($i=$value1; $i < $value2; $i+=$step) { 
                       echo $i." ";
                   }
               
           }
           my_range(2,8,3);
           echo"</div>";


        ?>
</body>
</html>