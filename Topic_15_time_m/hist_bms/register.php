<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HIST>BMS>Register</title>
</head>
<body bgcolor="skyblue">
	<?php
		require_once("require/connection.php");
		$query = "SELECT * FROM `roles` WHERE `roles`.`role_id` <> 1";
		$result = mysqli_query($connection,$query);
	?>
	<center>
		<h1>Register Page</h1>
		<hr />
		<?php 
			if(isset($_GET['msg']))
			{
				?>
					<h4 style="color:<?php echo $_GET['color']; ?>">
						<?php echo $_GET['msg']; ?>
					</h4>
				<?php
			}
		?>
		<fieldset style="width:60%">
			<legend>Register Here....</legend>
			<form action="register_process.php" method="POST">
				<table style="width:100%">
					<tr>
						<th>Full Name:</th>
						<td>
							<input type="text" name="full_name" required style="width:70%" placeholder="Enter full name">
						</td>
					</tr>
					<tr>
						<th>Email:</th>
						<td>
							<input type="email" name="email" required style="width:70%" placeholder="Enter Email">
						</td>
					</tr>
					<tr>
						<th>Password:</th>
						<td>
							<input type="password" name="user_password" required style="width:70%" placeholder="Enter password">
						</td>
					</tr>
					<tr>
						<th>Gender:</th>
						<td>
							<input type="radio" name="gender" value="Male" checked> Male 
							<input type="radio" name="gender" value="female" > Female 
						</td>
					</tr>
					<tr>
						<th>Select Role:</th>
						<td>
							<select style="width:70%" name="role">
								<?php 
									while($role = mysqli_fetch_row($result))
									{
										?>
											<option value="<?php echo $role[0]; ?>"><?php echo ucfirst($role[1]); ?></option>
										<?php
									}
								?>
							</select>
							
						</td>
					</tr>

					<tr>
						<th></th>
						<td>
							<input type="submit" name="register" value="Register" style="width:30%">
						</td>
					</tr>

				</table>
			</form>
		</fieldset>
		<p>Already You Have An Account
			<a href="index.php">Login Here...</a>
		</p>
	</center>
</body>
</html>