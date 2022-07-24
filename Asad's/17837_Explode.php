<!DOCTYPE html>
<html lang="en">
<head>
    <title>Explode</title>
</head>
<body>
    <form action="" method="POST" >
        <input type="text" name="text" value="<?php echo $_POST['text']??''?>">
        <input type="submit" name="submit" value="Explode">
    </form>
</body>
</html>

<?php

    if(isset($_POST['submit'])){
        $string=$_POST['text'];
        $string_array=[];
        $text='';
        for ($i=0; isset($string[$i]); $i++) {
        }
        // $i =0;  
        $string[$i]=" ";
        for ($i=0; isset($string[$i]); $i++) {
            
            if ($string[$i]!=' ') {
                $text.=$string[$i];
            }else{
                $string_array[]=$text;
                $text='';      
            }
            
        }
        // $string[$i]=" ";
        echo "<pre>";
        print_r($string_array);
        echo "</pre>";
    }
?>