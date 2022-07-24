<?php

	class Form{
		public $action = NULL;	
		public $method = NULL;	
	
		public function set_action($Action){
			$this->action = $Action;
		}

		public function get_action(){
			return $this->action;
		}

		public function set_method($Method){
			$this->method = $Method;
		}

		public function get_method(){
			return $this->method;
		}

		public function login_form(){
		?>
			<div align="center">
				<fieldset>
					<legend>Login Form</legend>
					<form action="<?php echo $this->get_action(); ?>" method="<?php echo $this->method; ?>">
					<?php
						if(isset($_REQUEST['message'])){
							echo"<b style='color:red'>". $_REQUEST['message']."</b>";
						}
					?>
					<table>
						<tr>
							<td>Email:</td>
							<td><input type="email" name="email" /></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="password" name="Password" /></td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" name="login" value="login">
							</td>
						</tr>
						<tr>
							<td><a href="forgot_pass.php">Forgot Password</a></td>
						</tr>
						<tr>

							<td><a href="changePass.php">Change Password</a></td>
						</tr>
						<tr>
							<td><a href="register.php">Register</a></td>
						</tr>
					</table>
					</form>
				</fieldset>
			</div>
		<?php	
		}

		public function register_form(){
			?>
				<div align="center">
					<fieldset>
						<legend>Register Form</legend>
						<form action="<?php echo $this->get_action(); ?>" method="<?php echo $this->method; ?>">
						<?php
							if(isset($_REQUEST['message'])){
								echo"<b style='color:red'>". $_REQUEST['message']."</b>";
							}
						?>
						<table>
							<tr>
								<td>Name:</td>
								<td><input type="text" name="name" /></td>
							</tr>
							<tr>
								<td>Email:</td>
								<td><input type="email" name="email" /></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td><input type="password" name="Password" /></td>
							</tr>
							<tr>
								<td>Gender:</td>
								<td>
									<input type="radio" name="gender" value='male' />Male
									<input type="radio" name="gender" value='female' />female
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="submit" name="Register" value="Register">
								</td>
							</tr>
							
						</table>
						</form>
					</fieldset>
				</div>
			<?php	
			}

		public function forgot_pass_form(){
			?>
				<div align="center">
					<fieldset>
						<legend>Forgot Password Form</legend>
						<form action="<?php echo $this->get_action(); ?>" method="<?php echo $this->method; ?>">
						<?php
							if(isset($_REQUEST['message'])){
								echo"<b style='color:red'>". $_REQUEST['message']."</b>";
							}
						?>
						<table>
							<tr>
								<td>Email:</td>
								<td><input type="email" name="email" /></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td><input type="password" name="Password" /></td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="submit" name="forgot_pass" value="Update">
								</td>
							</tr>
							
						</table>
						</form>
					</fieldset>
				</div>
			<?php	
			}
		public function change_password_form(){
			?>
				<div align="center">
					<fieldset>
						<legend>Change Password Form</legend>
						<form action="<?php echo $this->get_action(); ?>" method="<?php echo $this->method; ?>">
						<table>
							<tr>
								<td>Email:</td>
								<td><input type="email" name="email" /></td>
							</tr>
							<tr>
								<td>Old Password:</td>
								<td><input type="password" name="old_pass" /></td>
							</tr>
							<tr>
								<td>New Password:</td>
								<td><input type="password" name="new_pass" /></td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="submit" name="ch_pass" value="Change Password">
								</td>
							</tr>
							
						</table>
						</form>
					</fieldset>
				</div>
			<?php	
			}
	}

?>