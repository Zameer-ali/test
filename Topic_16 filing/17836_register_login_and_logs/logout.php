<?php 

	session_start();
	require_once("connection.php");
	print_r($_SESSION);
	if(isset($_SESSION['user']))
	{ 
		
		$logs="./logs/".$_SESSION['user'][1]."_".$_SESSION['user'][0];
		$file=fopen($logs,'a');
		$date="<td>".date("d-F-Y h:i:s a")."</td></tr>\r\n";
		fwrite($file,$date);
		$all=fopen('./logs/all_logs','a');
        fwrite($all,$date);
		session_destroy();
		header("location:index.php?msg=Logout Successfull!...&color=red");
	}
?>