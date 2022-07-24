<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
    echo $_SESSION['phone']=$_POST['phone'];  
    $_SESSION['email']=$_POST['email'];  
    $_SESSION['address']=$_POST['address'];  
    }
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV builder</title>
</head>
<body>
    <h1 align='center'>CV Builder</h1>
    <table align='center' border='1' width='75%' cellspacing="0" cellpadding="4">
        <form action="page4.php" method="post">
            <h2 align='center'>Professional Info</h2>
            <tr>
                <td>Name of School:</td>
                <td><input type="text" name="NoS" ></td>
                <td>School Start Date:</td>
                <td><input type="date" name="schSdate" ></td>
                <td>School End Date:</td>
                <td><input type="date" name="schEdate" ></td>
            </tr>
            <tr>
            <td>Name of College:</td>
                <td><input type="text" name="NoC" ></td>
                <td>College Start Date:</td>
                <td><input type="date" name="colSdate" ></td>
                <td>College End Date:</td>
                <td><input type="date" name="colEdate" ></td>
            </tr>
            <tr>
            <td>Name of University:</td>
                <td><input type="text" name="NoU" ></td>
                <td>University Start Date:</td>
                <td><input type="date" name="uniSdate" ></td>
                <td>University End Date:</td>
                <td><input type="date" name="uniEdate" ></td>
            </tr>
            <tr>
            <td>Summary:</td>
                <td colspan="100%"><textarea name="summary" cols="109" rows="3"></textarea></td>
            </tr>
           
            
            <tr>
                <td align="right" colspan="100%"> <input type="submit" value="submit" name="submit"></td>
            </tr>
           
        </form>
    </table>
</body>
</html>