<?php 
	
	require_once("require/database_setting.php");

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


		public function select($columns,$table){
			$this->query =  "SELECT $columns FROM $table";
			
			$this->result = mysqli_query($this->connection,$this->query);

			return $this->result;
		}


	}

	$obj = new Database($hostname,$username,$password,$database_name);
	// $result =   $obj->select("*" , "users");	
	$result =   $obj->select("user_id , full_name" , "users");	
	// $result =   $obj->select("*" , "posts");	
	
	/*echo "<pre>";
	// var_dump($result);
	print_r($result);
	echo "</pre>";*/

	/*while($row = mysqli_fetch_assoc($result)){
		echo "<pre>";
		// var_dump($result);
		print_r($row);
		echo "</pre>";		
	}*/

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OOP Database</title>
</head>
<body>
	<div align="center">
		<table border="1">
			<tr>
				<td>ID</td>
				<td>FullName</td>
			</tr>

			<?php
			while($row = mysqli_fetch_assoc($result)){
			?>
				<tr>
					<td><?php echo $row['user_id']; ?></td>
					<td><?php echo $row['full_name']; ?></td>
				</tr>
			<?php		
			} 
			?>


		</table>
	</div>
</body>
</html>










