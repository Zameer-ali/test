
<?

session_start();

	
if (isset($_REQUEST['Next'])){




	 $_SESSION['collage']= $_REQUEST['collage'];
	$_SESSION['date1'] = $_REQUEST['date1'];
 	$_SESSION['end1'] =$_REQUEST['end1'];
 	 $_SESSION['broad1'] =$_REQUEST['broad1'];
	 $_SESSION['Grade'] =$_REQUEST['Grade'];
}
	


?>



<!DOCTYPE html>
<html>
<head>
	<title>::Collage::</title>
</head>
<body>
	<center>
	<form method="POST" action="uni.php">
		<table border="2" align="`center" width="20%">
			<tr>
				<th colspan="5" align="center"> Collage
					
				</th>
			</tr>
			
			<tr>
				 
				<td colspan="5">
					Collage Name :
					<input type="text" name="collage" value="">
					
				</td>

			</tr>
			<tr>
				 
				<td colspan="5">
					Start Dare :
					<input type="date" name="date1" value="">
					
				</td>
			</tr>

			<tr>

				<td colspan="5">
					End Dare :
					<input type="date" name="end1" value="">
					
				</td>

			</tr>

			<tr>
		<td colspan="5">Board 
				<input type = "text" name="broad1" value=""  >
		</td>
</tr>
	<tr>
                     <td>Grade:</td>
	<td>
                       <select name="Grade">
                     <option>Grade</option>
					 <option>A+</option>
					 <option>A</option>
	`				 <option>B</option>
					 <option>C</option>
					 <option>D</option>
                      </select>
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





	
