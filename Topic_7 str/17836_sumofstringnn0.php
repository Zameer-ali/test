<!DOCTYPE html>
<html>
<head>
	<title>assignment</title>
	<style>
		table{
			font-weight:bolder;
		}
		input[type=submit]{font-weight:bolder;padding:10px 20px;float:right;background-color:blue;border-radius:10px;color:white;cursor: pointer;}
		textarea[type]{font-weight:bolder;font-size:20px}
		h3{
			text-align:center
		}
	</style>
</head>
<body>

<form method="Post">
	<table border="1" align=center>
	<tr><td><textarea type="text" name="name" value="" cols="25" rows="4" ><?php echo $_REQUEST['name']??''?></textarea></td> </tr>
</tr><td> <input type="submit" name="submit" value="Submit"></td></tr>
</table>
</form>

<?php
if(isset($_REQUEST['submit'])){
$nam= $_REQUEST['name'];
$sum=0;
for($i=0; isset($nam[$i]); $i++){
    if($nam[$i]>=0 && $nam[$i]<=9){

         $sum+=$nam[$i];
    }
}

}
?>
<?php if(isset($_REQUEST['submit'])){ ?>
<h3>Sum of all String Numbers: <?php echo $sum; ?></h3>
<?php } ?>
</body>
</html>