<?php
session_start();
if(isset($_SESSION['page2'])){
	$_SESSION['page2']++;
}else{
	$_SESSION['page2']=1;
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>page 2</title>
 	<style type="text/css">
 		a{
 			color: black;
 			display: block;
 			text-align: center;
 			border: 1px solid green;
 			text-decoration: none;
 			width: 100px;
 			margin: 10px;
 			padding: 10px;
 			margin-left: auto;
 			margin-right: auto
 		}
 		a:hover{
 			color: blue;
 			background-color: lightgreen;
 			text-decoration: none;
 		}

 	</style>
 </head>
 <body>
 	<a href="page1.php">page 1</a>
 	<a href="page3.php">page 3</a>
 	<a href="page4.php">page 4</a>
 	<a href="page5.php">page 5</a>
 	<a href="page6.php">page 6</a>
 </body>
 </html>