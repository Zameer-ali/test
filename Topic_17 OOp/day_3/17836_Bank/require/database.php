<?php 
	
	require_once("database_setting.php");

	class Bank_Account{
		public $hostname 		= NULL;
		public $username 		= NULL;
		public $password 		= NULL;
		public $database_name 	= NULL;
		public $connection 		= NULL;
		public $query 			= NULL;
		public $result 			= NULL;
		
		public function __construct($hostname,$username,$password,$database_name){

			$this->hostname = $hostname;
			$this->username = $username;
			$this->password = $password;
			$this->database_name = $database_name;
			
			mysqli_report(FALSE);
			$this->connection = mysqli_connect($this->hostname,$this->username,$this->password,$this->database_name);

			if(mysqli_connect_errno()){
				die("<p>Database Connection Problem : Error No: ". mysqli_connect_errno()  ." Error Message : ".mysqli_connect_error()."</p>");
			}
		}


		public function user_Details($account){
			$this->query = "SELECT * FROM user_info WHERE acount_no = $account";
			$this->result = mysqli_query($this->connection,$this->query);
			return $this->result;
		}
		public function Deposit($account, $amount){
			$select =  "SELECT B_balance FROM user_info WHERE acount_no = $account";
			$p_balance = mysqli_query($this->connection,$select);
			$Balance=mysqli_fetch_assoc($p_balance);
				$newBlnc= $Balance['B_balance']+$amount;
			$this->query =  "UPDATE user_info SET B_balance=$newBlnc WHERE acount_no = $account";
			$this->result = mysqli_query($this->connection,$this->query);
			return $this->result;	
		}
		public function Register($name, $email,$phone_no,$acount_no,$amount){
			$this->query =  "INSERT INTO user_info VALUES(NULL,'".$name."','".$email."','".$phone_no."','".$acount_no."','".$amount."')";
			$this->result = mysqli_query($this->connection,$this->query);
			return $this->result;	
		}


		public function withDraw($account, $amount){
			$select =  "SELECT B_balance FROM user_info WHERE acount_no = $account";
			$p_balance = mysqli_query($this->connection,$select);
			$Balance=mysqli_fetch_assoc($p_balance);
			if(!($Balance['B_balance']<=0)){
				if ($Balance['B_balance']>=$amount) {
					$newBlnc= $Balance['B_balance']-$amount;
				}
			}
			$this->query =  "UPDATE user_info SET B_balance=$newBlnc WHERE acount_no = $account";
			$this->result = mysqli_query($this->connection,$this->query);
			return $this->result;
		}


	}

?>











