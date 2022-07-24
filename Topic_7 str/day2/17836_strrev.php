<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse the String</title>
    <style>
		table{
			font-weight:bolder;

            
		}
		input[type=submit]{font-weight:bolder;padding:5px 30px;float:right;background-color:blue;border-radius:10px;color:white;cursor: pointer;}
		textarea[name]{font-weight:bolder;}
		h3{
			text-align:center
		}
	</style>
</head>
<body >
    <table align="center" border=1>
        <form action="" method="post">
            <tr><td><textarea  name="text" id="" cols="30" rows="10"><?php echo $_POST['text']??""?></textarea></td></tr>
            <tr><td><input type="submit" value="submit" name="submit"></td></tr>
        </form>
    </table>
            <?php
                if(isset($_POST['submit'])){
                    $text=$_POST['text'];
                    $str="";
                    for ($i=0; isset($text[$i]); $i++){
                        if($i==0){
                            continue;

                        }
                        $str .= $text[-$i];
                    }
                    echo "<h3>".$str.$text[0]."<h3>";
                    
                }
            ?>
</body>
</html>