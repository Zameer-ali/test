<!DOCTYPE html>
<html>
<head>
	<title>assignment</title>
	<style>
		table{
			font-weight:bolder
		}
		input[type]{font-weight:bolder}
		input[type=submit]{font-weight:bolder;padding:10px 20px;float:right;background-color:blue;border-radius:10px;color:white;cursor: pointer;}
		textarea[type]{font-weight:bolder;font-size:20px}
	</style>
</head>
<body>

<form method="Post">
	<table border="1" align="center" >
	<tr>
		<td>find <input type="text" name="find" value="<?php echo $_REQUEST['find']??''?>"  size="29"></td> 
		<td>replace <input type="text" name="replace" value="<?php echo $_REQUEST['replace']??''?>" size="29"></td>
	</tr>
	<tr>
		<td  colspan="2"><textarea type="text" name="name" cols="45" rows="10"><?php echo $_REQUEST['name']??''?></textarea></td> 
	</tr>
	<tr>
		<td colspan="2"> <input type="submit" name="submit" value="Submit"></td>
	</tr>
</table>
</form>

<?php
if(isset($_REQUEST['submit'])){
$nam= $_REQUEST['name'];
$find= $_REQUEST['find'];
$replace= $_REQUEST['replace'];

$store="";
for($i=0; isset($nam[$i]); $i++){
	if($nam[$i]==$find[0]){
		$nam[$i]=$replace[0];
	}
	//  $store .=$nam[$i];
}
echo "<h3 align='center'>Before replace: ".$_REQUEST['name']."</h3>";
echo "<h3 align='center'>after replace: ".$nam."</h3>";
}
?>
</body>
</html>