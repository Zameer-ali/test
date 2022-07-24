<!DOCTYPE html>
<html>
<head>
	<title>class work</title>
</head>
<body>

<form method="Post">
	<table border="1">
	<tr><td>Enter Text: <input type="text" name="name" value="<?php echo $_REQUEST['name']??' '?>" ></td> 
	<td> <input type="submit" name="submit" value="Go"></td></tr>
</table>
</form>

<?php
if(isset($_REQUEST['submit']))
{
$nam= $_REQUEST['name'];
$count="";
for($i=0; isset($nam[$i]); $i++){

if($nam[$i]!='A' && $nam[$i]!='a'){
	$count .=$nam[$i];
}

}
echo $count;
}
?>
</body>
</html>