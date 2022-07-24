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
            <input type="hidden" name="name" value="<?php echo $_POST['name']?>">
            <input type="hidden" name="fname" value="<?php echo $_POST['fname']?>">
            <input type="hidden" name="gender" value="<?php echo $_POST['gender']?>">
            <input type="hidden" name="country" value="<?php echo $_POST['country']?>">
            <input type="hidden" name="phone" value="<?php echo $_POST['phone']?>">
            <input type="hidden" name="email" value="<?php echo $_POST['email']?>">
            <input type="hidden" name="address" value="<?php echo $_POST['address']?>">
        </form>
    </table>
</body>
</html>