<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trim the String</title>
    <style>
		table{
			font-weight:bolder;   
		}
		input[type=submit]{
            font-weight:bolder;
            padding:5px 30px;
            float:right;
            background-color:blue;
            border-radius:10px;
            color:white;
            cursor: pointer;
        }
		textarea[name]{
            font-weight:bolder;
        }
		h3{
			text-align:center
		}
	</style>
</head>
<body >
    <table align="center" border=1>
        <form action="" method="post">
            <tr>
            <tr><td><textarea  name="text" id="" cols="30" rows="10"><?php echo $_POST['text']??""?></textarea></td></tr>
            <tr><td><input type="submit" value="trim" name="submit"></td></tr>
            </tr>
        </form>
    </table>
            <?php
                if(isset($_POST['submit'])){
                     $text=$_POST['text'];
                    $left_trim="";
                    $right_trim="";
                    $trim="";
                    for ($i=0; isset($text[$i]); $i++){
                        if($text[$i]==" "){
                        }else{
                            for($j=$i;isset($text[$j]);$j++){
                                $left_trim.=$text[$j];
                            }
                            break;
                        }
                    }
                    for ($i=1; isset($left_trim[-$i]); $i++){
                        
                        if($left_trim[-$i]==" "){
                            
                        }else{
                            for($j=$i;isset($left_trim[-$j]);$j++){
                                $right_trim.=$left_trim[-$j];
                            }
                            break;
                        }
                    }
                    for ($i=0; isset($right_trim[$i]); $i++) {                         
                    }
                    --$i;                
                    for ($j=$i;isset($right_trim[$j]); $j--){
                        
                        if($j<0){
                            break;
                        }
                       $trim .= $right_trim[$j];
                   
                    }
                    echo "<h3>".$trim."<h3>";
                    var_dump($text);
                    var_dump($trim);
                }
            ?>
</body>
</html>