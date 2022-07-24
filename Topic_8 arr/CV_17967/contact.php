
<?php 

session_start();

if (isset($_REQUEST['save'])){

	


	  $_SESSION['name'] =$_REQUEST['name'];		
 	  $_SESSION['father'] =$_REQUEST['father'];
	  $_SESSION['gender']  =$_REQUEST['gender'];
	  $_SESSION['country'] =$_REQUEST['country'];


	

}

?>

<!-- <?

session_start();

	
if (isset($_REQUEST['next'])){


 	$_SESSION['email']= $_REQUEST['email'];
	$_SESSION['phone'] = $_REQUEST['phone'];
 	$_SESSION['address'] =$_REQUEST['address'];

	

	echo $_SESSION['email'] ;
	echo $_SESSION['phone'] ;
 	echo $_SESSION['address'];
} 

?> -->

<!DOCTYPE html>
<html>
<head>
	<title>::Contact::</title>
</head>
<body>
	<center>
	<form method="POST" action="">
		<table border="2" align="`center" width="20%">
			<tr>
				<th colspan="5" align="center"> Contact
					
				</th>
			</tr>
			
			<tr>
				 
				<td colspan="5">
					E-mail:
					<input type="email" name="email" value="">
					
				</td>

			</tr>
			<tr>
				 
				<td colspan="5">
					Phone:
					<input type="number" name="phone" value="">
					
				</td>

			</tr>

			<tr>
				<td colspan = "5"> Address: 
	 
					<input type = "text" name ="address" value ="">
	
				</td>
			</tr>


	<td colspan = "5" align = "center">
	<input style="width: 30%" type = "Submit" name ="next" value="Next" />



	<input style="width: 30%" type = "Submit" name ="back" value="Back" formaction="personal.php" />
	</td>
	</tr>
		</table>
		
	</form>
	</center>

</body>
</html>





	
