<!DOCTYPE html>
<html>
<head>
	<title>Age Calculator</title>
	<style type="text/css">
		fieldset{
			width: 40%;
			display: flex;
			margin-top: 100px;
			padding: 80px 10px;
			background-color: lightgrey;
		}
		input[type=date]{
			width:200px;
			font-weight: bold;
		}
		input[type=submit]{
			width:100px;
			padding: 10px 5px;
			cursor: pointer;
			background-color: blue;
			color: white;
			font-weight: bold;
			float: right;
		}
		form{
			width: 100%
		}
	</style>
</head>
<body>
	
	<center>
		<fieldset>
			<legend>Age Calculator</legend>
			<form method="Post">
				<table>
					<tr>
						<td>Enter Your Date fo Birth:</td>
						<td><input type="date" name="dob"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit" value="Calculate age"></td>
					</tr>
					<?php 
						if (isset($_REQUEST['submit'])) {
							$dob_date=strtotime($_REQUEST['dob']);
							$current_date=time();
							$dob=$current_date-$dob_date;
							$min=$dob/60;
							$hour=$min/60;

							$days=$hour/24;
							$month=$days/30-4;
							$year=(int)$month/12;
							$c_day=$days%30;
							$year=(int)$year;
							$c_month=(int) ($month%12) ;
							if ($year==0) {
								$c_month=(int) $month+4;
							}

								?>

							<tr>
								<td colspan="2" style="color:red;font-weight:bold">Your age is <?php echo $year." Years ".$c_month." Month ".$c_day." Days" ?> </td>
							</tr>
								<?php 
							if (!($year<0)) {
							}else{
								?>

							<tr>
								<td colspan="2" style="color:red;font-weight:bold">Please Enter Correct format or date </td>
							</tr>
								<?php 
							}
						}
					?>
				</table>
			</form>
		</fieldset>
	</center>
</body>
</html>