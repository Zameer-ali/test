<?php 
	
	require_once("require/database_setting.php");
	require_once("require/database.php");

	$Bank_Account = new Bank_Account($hostname,$username,$password,$database_name);
	
	if(isset($_REQUEST['Deposit'])){
		$result =   $Bank_Account->Deposit($_POST['account_no'], $_POST['amount']);
		$amount= $_POST['amount'];
		header("location:Deposit.php?message=$amount Deposite successfully");die;
	}
	if(isset($_REQUEST['withDraw'])){
		$result =   $Bank_Account->withDraw($_POST['account_no'], $_POST['amount']);
		$amount= $_POST['amount'];
		header("location:withdraw.php?message=$amount WithDraw successfully");die;
	}

	if(isset($_REQUEST['Register'])){
		$result =   $Bank_Account->Register($_POST['name'],$_POST['email'],$_POST['phone_no'],$_POST['account_no'], $_POST['amount']);
		var_dump($result);
		if ($result) {
			header("location:index.php?message= Account Created Successfully");
		}else{
			header("location:register.php?message= Account not Created");
		}

	}
	if(isset($_REQUEST['user_info'])){
		$result =   $Bank_Account->user_Details($_POST['account_no']);
		$user_details=mysqli_fetch_assoc($result);
		if ($user_details) {
			?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>user Details</title>
			<style>
				table{
					font-size: large;
					font-weight: bold;
				}
				table td{
						color: red;
				}
			</style>
		</head>
		<body>
			<a href="index.php">Go to Home</a>
			<center>

				<table>
					<tr>
						<th>Full Name:</th>
						<td><?= $user_details['full_name']?></td>
					</tr>
					<tr>
						<th>Email:</th>
						<td><?= $user_details['email']?></td>
					</tr>
					<tr>
						<th>Phone No:</th>
						<td><?= $user_details['phone_no']?></td>
					</tr>
					<tr>
						<th>Account No:</th>
						<td><?= $user_details['acount_no']?></td>
					</tr>
					<tr>
						<th>Balance:</th>
						<td><?= $user_details['B_balance']?></td>
					</tr>

				</table>
			</center>
		</body>
		</html>
	<?php
		}else{
			header("location:index.php?message=Unknown user");die;

		}
		 }



?>