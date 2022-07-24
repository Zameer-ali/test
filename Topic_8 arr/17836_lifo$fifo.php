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

<form method="" action="#" onSubmit="">
	
    <?php
    
    $array=["Hidaya","trust","hidaya","institute","secience","technology"];
    
    $count=0;
    if(isset($_REQUEST['fifo'])){
    for($i=$count; isset($array[$i]); $i++){
       unset($array[$i]);
        $count++;
       break;
    }  
   
    }
    if(isset($_REQUEST['lifo'])){
    for($i=0; isset($array[$i]); $i++){
    }  
    unset($array[--$i]);
    }
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    ?>
    <input type="submit" name="fifo" value="FIFO">
    <input type="submit" name="lifo" value="LIFO">
</form>

</body>
</html>