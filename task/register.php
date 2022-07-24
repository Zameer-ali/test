<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register page</title>
</head>
<body>
    <center>    
        <fieldset>
            <?php
                if(isset($_REQUEST['message'])){
                    echo $_REQUEST['message'];
                }
            ?>
            <legend>Register</legend>
            <form action="process.php" method="Post">
                <table>
                    <tr>
                        <td>User Name</td>
                        <td>
                            <input type="text" name="user_name">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="email" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <td>reference id(optional)</td>
                        <td>
                            <input type="text" name="reference_by" >
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Register" name="register">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                           <a href="login.php">login</a>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </center>
</body>
</html>