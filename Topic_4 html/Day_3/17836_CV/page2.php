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
        <form action="page3.php" method="post">
            <h2 align='center'>Contact Details</h2>
            <tr>
                <td>Contact NO:</td>
                <td><input type="text" name="phone" size="51"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" size="51"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea type="textarea" name="address" cols="51" rows="2" ></textarea></td>
            </tr>
            
            <tr>
            <td align="right" colspan="100%"> <input type="submit" value="submit" name="submit"></td>
            </tr>
            <input type="hidden" name="name" value="<?php echo $_POST['name']?>">
            <input type="hidden" name="fname" value="<?php echo $_POST['fname']?>">
            <input type="hidden" name="gender" value="<?php echo $_POST['gender']?>">
            <input type="hidden" name="country" value="<?php echo $_POST['country']?>">
        </form>
    </table>
</body>
</html>