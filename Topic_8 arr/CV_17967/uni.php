<?

session_start();

	
if (isset($_REQUEST['Next'])){


	$_SESSION['collage']= $_REQUEST['collage'];
	$_SESSION['date2'] = $_REQUEST['date2'];
 	$_SESSION['end2'] =$_REQUEST['end2'];
 	 $_SESSION['broad1'] =$_REQUEST['broad1'];
	 $_SESSION['cpn']=$_REQUEST['cpn'];


}
	
?>






<!DOCTYPE html>
<html>
<head>
	<title>::University::</title>
</head>
<body>
	<center>
	<form method="POST" action="conector.php">
		<table border="2" align="`center" width="20%">
			<tr>
				<th colspan="5" align="center"> University
					
				</th>
			</tr>
			
			<tr>
				 
				<td colspan="5">
					University Name :
					<input type="text" name="uni" value="">
					
				</td>

			</tr>
			<tr>
				 
				<td colspan="5">
					Start Dare :
					<input type="date" name="date2" value="">
					
				</td>
			</tr>

			<tr>

				<td colspan="5">
					End Dare :
					<input type="date" name="end2" value="">
					
				</td>

			</tr>

			<tr>
	<td colspan="5">University 
				<input type = "text" name="broad2" value=""  >
			</td>
</tr>
	<tr>
                     <td colspan="5">Grade/CPN : 
                     	<input type = "text" name="cpn" value=""  >
                     </td>
                     </tr>
                     

             
	<td colspan = "5" align = "center">
	<input style="width: 30%" type = "Submit" name ="Next" value="Save" />



	<input style="width: 30%" type = "Submit" name ="back" value="Back" formaction="personal.php" />
	</td>
	</tr>
		</table>
		
	</form>
	</center>

</body>
</html>





	
