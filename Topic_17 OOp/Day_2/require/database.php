<?php 
	
	//require_once("database_setting.php");

	class Database{
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


		public function login_process($email, $password){
			$this->query =  "SELECT * FROM users WHERE email = '".$email."' && user_password = '".$password."' ";
		
			$this->result = mysqli_query($this->connection,$this->query);

			return $this->result;
		}


	}

?>











