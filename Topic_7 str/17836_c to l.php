<!DOCTYPE html>
<html>
<head>
	<title>assignment</title>
	<style>
		table{
			font-weight:bolder;
		}
		input[type=submit]{font-weight:bolder;padding:5px 30px;float:right;background-color:blue;border-radius:10px;color:white;cursor: pointer;}
		input[type]{font-weight:bolder;}
		h3{
			text-align:center
		}
	</style>
</head>
<body>

<form method="Post">
	<table border="1" align=center>
	<tr><td>Enter Text: <input type="text" name="name" value="<?php echo $_REQUEST['name']??' '?>" ></td> 
	<td> <input type="submit" name="submit" value="Go"></td></tr>
</table>
</form>

<?php
if(isset($_REQUEST['submit']))
{
	
	$CAPITAL="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$small="abcdefghijklmnopqrstuvwxyz";
$nam= $_REQUEST['name'];
$store="";
for($i=0; isset($nam[$i]); $i++){
for($j=0;$j<=25;$j++){

	if($nam[$i]==$CAPITAL[$j]){
		$store .=$small[$j];
	}
	else if($nam[$i]==$small[$j]){
		$store .=$CAPITAL[$j];
	}
}

}
echo "<h3>".$store."</h3>";
}
?>
</body>
</html>