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
        select{
             padding:3px 10px;
             float:right;
             margin-top:3px;
             font-weight:bold
        }

	</style>
</head>
<body >
    <table align="center" border=1>
        <form action="" method="post">
            <tr>
                <td>
                    Enter Decimal Number: 
               
                     <input type="text" name="number" value="<?php echo $_POST['number']??""?>">
                </td>
            </tr>
            <tr>
                <td>
                    
                    <input type="submit" value="process" name="submit">
                    <select name="options" >
                        <option>Ceil</option>
                        <option>Floor</option>
                        <option>Round</option>
                    </select>
                </td>
            </tr>
        </form>
    </table>
            <?php
                if(isset($_POST['submit'])){
                    if($_POST['options']=="Ceil"){
                        echo "<h3>Ceil: ".Ceil($_POST['number'])."</h3>";
                    }
                    else if($_POST['options']=="Floor"){
                        echo "<h3>Floor: ".Floor($_POST['number'])."</h3>";
                    }
                    else if($_POST['options']=="Round"){
                        echo "<h3>Round: ".Round($_POST['number'])."</h3>";
                    } 
                }
            ?>
</body>
</html>