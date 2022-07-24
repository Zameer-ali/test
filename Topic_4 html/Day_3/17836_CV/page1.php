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
    <table align='center' border='1' width='500'>
        <form action="page2.php" method="post">
            <h2 align='center'>Personal Details</h2>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" size="50"></td>
            </tr>
            <tr>
                <td>Father's Name:</td>
                <td><input type="text" name="fname" size="50"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td> male<input type="radio" name="gender" value="male" checked> female<input type="radio" name="gender" value="female" ></td>
            </tr>
            <tr>
                <td>Country:</td>
                <td> <select name="country">
                    <option >Pakistan</option>
                    <option >USA</option>
                    <option >Europe</option>
                </select></td>
            </tr>
            <tr>
            <td align="right" colspan="100%"> <input type="submit" value="submit" name="submit"></td>
            </tr>
        </form>
    </table>
</body>
</html>