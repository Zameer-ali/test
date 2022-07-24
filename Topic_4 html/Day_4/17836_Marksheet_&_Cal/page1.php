<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet and Calculator</title>
</head>
<body>
    <table align='center' cellspacing="0" border="1">
        <form action="page2.php" method="post" >
            <h1 align="center">Marksheet</h1>
            <tr>
                <td>Subject 1:</td>
                <td><input type="number" name="sub1" ></td>
            </tr>
            <tr>
                <td>Subject 2:</td>
                <td><input type="number" name="sub2" ></td>
            </tr>
            <tr>
                <td>Subject 3:</td>
                <td><input type="number" name="sub3" ></td>
            </tr>
            <tr>
                <td>Subject 4:</td>
                <td><input type="number" name="sub4" ></td>
            </tr>
            <tr>
                <td>Subject 5:</td>
                <td><input type="number" name="sub5" ></td>
            </tr>
            <tr>
                
                <td colspan="100%" align='right'><input type="submit" value="submit" name='submit'></td>
            </tr>
        </form>
    </table>
    <table align='center' cellspacing="0" border="1">
        <form action="page2.php" method="post" >
            <h1 align="center">Calculator</h1>
            <tr>
                <td>Number 1:</td>
                <td><input type="number" name="num1" ></td>
            </tr>
            <tr>
                <td>Number 2:</td>
                <td><input type="number" name="num2" ></td>
            </tr>
            <tr>
                <td>Operator:</td>
                <td><input type="text" name="operator" ></td>
            </tr>
           
            <tr>
                <td colspan="100%" align='right'><input type="submit" value="submit" name='submit'></td>
            </tr>
        </form>
    </table>
</body>
</html>