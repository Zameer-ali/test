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
            <tr><td><input type="submit" value="Go" name="submit"></td></tr>
        </form>
    </table>
            <?php
                if(isset($_POST['submit'])){
                    $text=$_POST['text'];
                    $str="";
                    $A="";
                    $E="";
                    $I="";
                    $O="";
                    $U="";
                    $a="";
                    $e="";
                    $ii="";
                    $o="";
                    $u="";
                    $vowels=0;
                    $consonants=0;
                    for ($i=0; isset($text[$i]); $i++){
                        if($text[$i]=='A'){
                            $A.="position of A: ".$i."<BR>";
                        }
                        else if($text[$i]=='E'){
                            $E.="position of E: ".$i."<BR>";
                        }
                        else if($text[$i]=='I'){
                            $I.="position of I: ".$i."<BR>";
                        }
                        else if($text[$i]=='O'){
                            $O.="position of O: ".$i."<BR>";
                        }
                        else if($text[$i]=='U'){
                            $U.="position of U: ".$i."<BR>";
                        }
                        if($text[$i]== 'a'){
                            $a.="position of a: ".$i."<BR>";
                        }
                        else if($text[$i]== 'e'){
                            $e.="position of e: ".$i."<BR>";
                        }
                        else if($text[$i]== 'i'){
                            $ii.="position of i: ".$i."<BR>";
                        }
                        else if($text[$i]== 'o'){
                            $o.="position of o: ".$i."<BR>";
                        }
                        else if($text[$i]== 'u'){
                            $u.="position of u: ".$i."<BR>";
                        }
                        if($text[$i]!=" "){
                            if($text[$i]== "A" || $text[$i]=="a" || $text[$i]=="E" || $text[$i]=="e" || $text[$i]=="I" || $text[$i]=="i" || $text[$i]=="O" || $text[$i]=="o" || $text[$i]=="U" || $text[$i]=="u" ){
                                $vowels++;
                            }
                            else{
                                $consonants++;
                            }

                        }
                    }
                    
                    echo "<h3>vowels:".$vowels."</h3>";
                    echo "<h3>consotants:".$consonants."</h3>";
                    echo "<h3>".$a."</h3>"??"";
                    echo "<h3>".$e."</h3>"??"";
                    echo "<h3>".$ii."</h3>"??"";
                    echo "<h3>".$o."</h3>"??"";
                    echo "<h3>".$u."</h3>"??"";
                    echo "<h3>".$A."</h3>"??"";
                    echo "<h3>".$E."</h3>"??"";
                    echo "<h3>".$I."</h3>"??"";
                    echo "<h3>".$O."</h3>"??"";
                    echo "<h3>".$U."</h3>"??"";
                    
                }
            ?>
</body>
</html>