<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HIST>BMS>Login</title>
</head>
<body bgcolor="skyblue">
	<center>
		<h1>Login Page</h1>
		<hr />
		<?php 
			require_once("session.php");
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
			<legend>Login Here....</legend>
			<form action="login_process.php" method="POST">
				<table style="width:100%">
					<tr>
						<th>Email:</th>
						<td>
							<input type="email" name="email" required style="width:70%" placeholder="Enter email">
						</td>
					</tr>
					<tr>
						<th>Password:</th>
						<td>
							<input type="password" name="user_password" required style="width:70%" placeholder="Enter password">
						</td>
					</tr>
					<tr>
						<th></th>
						<td>
							<input type="submit" name="login" value="Login" style="width:30%">
						</td>
					</tr>

				</table>
			</form>
		</fieldset>
		<p>Don't Have An Account
			<a href="register.php">Register Here...</a>
		</p>
	</center>
</body>
</html>