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

    <form action="" method="post" >
        <input type="text" name="text" id="" value="<?php echo $_REQUEST['text']??''?>">
        <input type="submit" name="submit" value="Search">
    </form>
    <?php
    if(isset($_REQUEST['submit'])){
        $string=$_REQUEST['text'];
       $arr=[];
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
    ?>
    </div>
</body>
</html>