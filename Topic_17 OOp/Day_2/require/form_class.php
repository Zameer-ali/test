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
					</table>
					</form>
				</fieldset>
			</div>
		<?php	
		}

	}


	/*$Form = new Form();
	$Form->set_method("POST");
	$Form->action = "#";
	$Form->Login_Form();*/




?>