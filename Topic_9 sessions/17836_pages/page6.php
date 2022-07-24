
 <!DOCTYPE html>
 <html>
 <head>
 	<title>page 6</title>
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
	 <center>
	 <?php
	session_start();
	
		echo "page 1: visit=";
		echo $_SESSION['page1'] ?? 0;
		echo "<br> page 2: visit=";
		echo $_SESSION['page2']??0;
		echo "<br> page 3: visit=";
		echo $_SESSION['page3']??0;
		echo "<br> page 4: visit=";
		echo $_SESSION['page4']??0;
		echo "<br> page 5: visit=";
		echo $_SESSION['page5']??0;
	
 ?>
	 </center>
 	<a href="page1.php">page 1</a>
 	<a href="page2.php">page 2</a>
 	<a href="page3.php">page 3</a>
 	<a href="page4.php">page 4</a>
 	<a href="page5.php">page 5</a>
 </body>
 </html>