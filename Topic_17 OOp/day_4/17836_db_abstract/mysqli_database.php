<?php 

	require_once("require/database_settings.php");
	require_once("require/database_drivers.php");
	
	class Database extends DataBaseDrivers{
		protected $hostname = NULL;
		protected $username = NULL;
		protected $password = NULL;
		protected $database = NULL;
		protected $connection = NULL;
		protected $query      = NULL;
		protected $result      = NULL;

		public function connection_open($hostname,$username,$password,$database)
		{

			$this->hostname = $hostname;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;

			mysqli_report(FALSE);
			$this->connection  =  mysqli_connect($this->hostname,$this->username,$this->password,$this->database);
		
			if(mysqli_connect_errno()){
				die("Database Connection Problem: Error Code : ".mysqli_connect_errno()." Error Message ".mysqli_connect_error());
			}
		}

		public function execute_query($query){
			$this->query = $query;
			$this->result =  mysqli_query($this->connection, $this->query);
			return $this->result;
		}

		public function connection_close(){
			mysqli_close($this->connection);
		}
	}



	$databaseObj = new Database();
	$databaseObj->connection_open($hostname,$username,$password,$database);		
	$result  =  $databaseObj->execute_query("SELECT * FROM users u , roles r WHERE u.role_id = r.role_id;");
	$databaseObj->connection_close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>OOP Database Abstract</title>
</head>
<body>
	<?php 

		if($result->num_rows){
		?>	
		<center>
			<table border="1">
				<thead>
					<tr>
						<th>User ID</th>
						<th>Role ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Gender</th>
						<th>Role</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					while($row = mysqli_fetch_assoc($result))
					{
					?>
					<tr>
						<td><?php echo $row['user_id']; ?></td>
						<td><?php echo $row['role_id']; ?></td>
						<td><?php echo $row['full_name']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['user_password']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['role']; ?></td>
						
					</tr>
					<?php 
					} 
					?>	
				</tbody>

			</table>
		</center>
		<?php
		}else{
		?>
			<p style="color:red">No Records Found..!</p>	
		<?php	
		}
















	?>










</body>
</html>