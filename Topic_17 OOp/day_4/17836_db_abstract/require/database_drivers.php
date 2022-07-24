<?php 

	abstract class DataBaseDrivers{
		abstract public function connection_open($hostname,$username,$password,$database);
		abstract public function execute_query($query);
		abstract public function connection_close();
	}



?>