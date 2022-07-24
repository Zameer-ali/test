<!DOCTYPE html>
<html lang="en">
<head>
    <title>Linear Search</title>
</head>
<body>
    <form action="" method="POST" >
        <input type="text" name="text" id="" value="<?php echo $_POST['text']??''?>">
        <input type="submit" name="submit" value="Search">
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){

    $sentence = ["Hidaya", "Institute", "of", "Science", "and", "Technology"];
    $text = $_POST['text'];
    $index= count($sentence);
    --$index;
       
    for ($i=0; isset($sentence[$i]); $i++) { 

        if ($sentence[$i]== $text) {
            echo "The '". $text." ' is found at :".$i." index.";
            break;
        }elseif($i == $index){
            echo 'not found';
        }
    }
    echo "<pre>";
    print_r($sentence);
    echo "</pre>";

}
?>