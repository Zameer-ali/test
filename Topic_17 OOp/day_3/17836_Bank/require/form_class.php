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

		public function user_details(){
			?>
				<div align="center">
					<fieldset style="width: 50%;">
						<legend >User Details Form</legend>
						<form action="<?php echo $this->get_action(); ?>" method="<?php echo $this->method; ?>">
						<?php
						if(isset($_REQUEST['message'])){
							echo"<b style='color:red'>". $_REQUEST['message']."</b>";
						}
					?>
						<table>
							<tr>
								<td>Accont No:</td>
								<td><input type="number" name="account_no" / required></td>
							</tr>
							
							<tr>
								<td colspan="2">
									<input type="submit" name="user_info" value="User Details">
								</td>
							</tr>
							<tr>
									<td colspan="2">
										<a href="deposit.php">Deposit</a>
									</td>
							</tr>
							<tr>
								<td colspan="2">
									<a href="withdraw.php">WithDraw</a>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<a href="register.php">Create Account</a>
								</td>
							</tr>
							
						</table>
						</form>
					</fieldset>
				</div>
			<?php	
			}

		public function withDraw(){
		?>
			<div align="center">
				<fieldset style="width: 50%;">
					<legend >WithDraw Form</legend>
					<form action="<?php echo $this->get_action(); ?>" method="<?php echo $this->method; ?>">
					<?php
						if(isset($_REQUEST['message'])){
							echo"<b style='color:red'>". $_REQUEST['message']."</b>";
						}
					?>
					<table>
						<tr>
							<td>Accont No:</td>
							<td><input type="number" name="account_no" / required></td>
						</tr>
						<tr>
							<td>Amount:</td>
							<td><input type="number" name="amount" / required></td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" name="withDraw" value="withDraw">
							</td>
						</tr>
						<tr>
								<td colspan="2">
									<a href="deposit.php">Deposit</a>
								</td>
						</tr>
						<tr>
								<td colspan="2">
									<a href="index.php">User Info</a>
								</td>
						</tr>
						
					</table>
					</form>
				</fieldset>
			</div>
		<?php	
		}
		public function Deposit(){
			?>
				<div align="center">
					<fieldset style="width: 50%;">
						<legend >Deposit Form</legend>
						<form action="<?php echo $this->get_action(); ?>" method="<?php echo $this->method; ?>">
						<?php
						if(isset($_REQUEST['message'])){
							echo"<b style='color:red'>". $_REQUEST['message']."</b>";
						}
					?>
						<table>
							<tr>
								<td>Accont No:</td>
								<td><input type="number" name="account_no" / required></td>
							</tr>
							<tr>
								<td>Amount:</td>
								<td><input type="number" name="amount" / required></td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="submit" name="Deposit" value="Deposit">
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<a href="withdraw.php">WithDraw</a>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<a href="index.php">User Info</a>
								</td>
						</tr>
						</table>
						</form>
					</fieldset>
				</div>
			<?php	
			}
			public function Register(){
				?>
					<div align="center">
						<fieldset style="width: 50%;">
							<legend >Register Form</legend>
							<form action="<?php echo $this->get_action(); ?>" method="<?php echo $this->method; ?>">
							<?php
								if(isset($_REQUEST['message'])){
									echo"<b style='color:red'>". $_REQUEST['message']."</b>";
								}
							?>
							<table>
								<tr>
									<td>Name:</td>
									<td><input type="text" name="name" / required></td>
								</tr>
								<tr>
									<td>Email:</td>
									<td><input type="email" name="email" / required></td>
								</tr>
								<tr>
									<td>Phone No:</td>
									<td><input type="text" name="phone_no" / required></td>
								</tr>
								<tr>
									<td>Accont No:</td>
									<td><input type="number" name="account_no" / required></td>
								</tr>
								<tr>
									<td>Amount for deposit(Optional):</td>
									<td><input type="number" name="amount" /></td>
								</tr>
								<tr>
									<td colspan="2">
										<input type="submit" name="Register" value="Register">
									</td>
								</tr>
								<tr>
										<td colspan="2">
											<a href="index.php">User Info</a>
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