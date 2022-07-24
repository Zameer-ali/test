<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <center>    
        <fieldset>
            <?php
                if(isset($_REQUEST['message'])){
                    echo $_REQUEST['message'];
                }
            ?>
            <legend>Login</legend>
            <form action="process.php" method="get">
                <table>
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
                        <td colspan="2">
                            <input type="submit" value="Login" name="login">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </center>
</body>
</html>