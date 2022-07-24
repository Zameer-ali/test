<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-size: 20px;
            background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSo1QJ-2URJylPZf4ovdd1gVjSeGBL9OF76CPXdugKaQxe-FBv4gYashScQE_9Ibyj9PxI&usqp=CAU) no-repeat;
            background-size: cover;
        }
        span{
            color:red;
        }
        ul li{
            color:red
        }
        form{
            width: 35%;
            margin:10% auto;
            padding: 60px;
            background-color: whitesmoke;
        }
        .input_control{
            width: 125%;
            font-size: 18px;
        }
        legend{
            font-weight: bolder;
            font-size: 20px;
        }
        input[type=submit]{
            background-color: blue;
            font-size: 20px;
            color: white;
            padding: 3px 10px;
            cursor: pointer;
        }
        a{
            text-decoration: none;
            color: blue;
        }
        a:hover{
            color: red;
        }
    </style>
</head>
<body>
<form action="login_process.php" method="POST" >
            <fieldset >
                <legend>Login Form</legend>
                <table cellspacing=8  >
                    <?php
                        if (isset($_REQUEST['message'])) {?>
                            <tr>
                                <td colspan=2>
                                    <ul>
                                        <?= $_REQUEST['message'] ?>
                                    </ul>
                                </td>
                            </tr>
                      <?php  } ?>
                    
                    <tr>
                        <td>Email:<span>*</span></td>
                        <td><input type="text" name="user_name" id="email" class="input_control"></td>
                    </tr>
                    <tr>
                        <td>Password:<span>*</span></td>
                        <td><input type="password" name="password" id="password" class="input_control"></td>
                    </tr>
                   
                    <tr>
                        <td colspan="2"><input type="submit" value="submit" name="submit"></td>
                    </tr>
                    <tr>
                        <td ><a href="register.php">Don't Have Account</a></td>
                    </tr>
                    
                </table>
            </fieldset>
        </form>

    </h1>
</body>
</html>