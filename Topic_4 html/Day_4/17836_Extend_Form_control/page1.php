<?php 
if(isset($_REQUEST['submit'])){
    print_r($_REQUEST);
    $number=$_POST['number'];
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Form Control Dynamically</title>
</head>
<body>
    <table border='1' align='center' width='500' cellspacing='10' cellpadding='1'>
        <form method='post'  action="page2.php">
        <h1 align='center'>Generate Form Control Dynamically</h1>
       
        <tr>
            <td><label for="number">Input Number:</label></td>
        </tr>
        <tr>
            <td><label >Input should be number</label></td>
        </tr>
        <tr>
            <td><input type="text" name="number" size="65"></td>
        </tr>
        <tr>
            <td><input type="submit" name='submit' value="submit" align='center' ></td>
        </tr>
        </form>
    </table>
</body>
</html>
