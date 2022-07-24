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
        $array=['hidaya','trust','hist','jamshoro'];
        $no= count($array);
        --$no;
       
        for ($i=0; isset($array[$i]); $i++) { 
            if ($array[$i]==$_REQUEST['text']) {
                echo 'value '. $array[$i]." found at :".$i." position";
                break;
            }else{
                if ($i==$no) {
                    echo 'not found';
                }
            }

        }
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    ?>
    </div>
</body>
</html>