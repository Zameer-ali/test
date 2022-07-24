<?php
    mysqli_report(MYSQLI_REPORT_OFF);
    $connection = mysqli_connect('localhost','root','','users');

	if(mysqli_connect_errno())
	{
        echo "Error Message : ".mysqli_connect_error();
		die("Database Connection Failure");
	}
    
?>