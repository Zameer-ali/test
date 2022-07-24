
<?

session_start();

	
if (isset($_REQUEST['Next'])){


	 $_SESSION['school'] ;
	 $_SESSION['date'] ;
	 $_SESSION['end'] ;
	 $_SESSION['broad'] ;
	 $_SESSION['grade'] ;


}
	


?>


<!DOCTYPE html>
<html>
<head>
	<title>::School::</title>
</head>
<body>
	<center>
	<form method="POST" action="inter.php">
		<table border="2" align="`center" width="20%">
			<tr>
				<th colspan="5" align="center"> School
					
				</th>
			</tr>
			
			<tr>
				 
				<td colspan="5">
					School Name :
					<input type="text" name="school" value="">
					
				</td>

			</tr>
			<tr>
				 
				<td colspan="5">
					Start Dare :
					<input type="date" name="date" value="">
					
				</td>
			</tr>

			<tr>

				<td colspan="5">
					End Dare :
					<input type="date" name="end" value="">
					
				</td>

			</tr>

			<tr>
	<td colspan="5">Board 
	<input type = "text" name="broad" value></td>
</tr>
	<tr>
                     <td>Grade:</td>
	<td>
                       <select name="grade">
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





	
