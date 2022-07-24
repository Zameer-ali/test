<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <style>
        form{
            padding: 10%;
        }
        body{
            background: url(https://t3.ftcdn.net/jpg/03/55/60/70/360_F_355607062_zYMS8jaz4SfoykpWz5oViRVKL32IabTP.jpg) no-repeat ;
            background-size: cover;
        }
        fieldset{
            padding: 3%;
            /* background-color:lightblue ; */
            /* width: 30%; */
            font-size: 20px;
            color: black;
            border: 10px solid green;
        }
        div{
            margin-top: 7%;
            padding: 5%;
            box-shadow: 0px 0px 15px 8px gray;
            width: 50%;


        }
        input[name=password],input[type=text]{
            width: 100%;
            font-size: 20px;
            border-radius: 10px;
            margin:5px
        }
        input[type=submit]{
            float: right;
            font-size: 17px;
            background-color: blue;
            color: white;
            padding: 4px 10px;
            border-radius: 10px;
            
        }
        input[type=submit]:hover{
           
            color: white;
            cursor: pointer;
            
            
        }
    </style>
</head>
<body>

    
            <?php function Login($method,$action){?>
                <fieldset>
                    <legend>Login Form</legend>
                    <form action="<?php echo $action?>" method="<?php echo $method?>">
                        <table>
                            <tr>
                                <td>UserName:</td>
                                <td><input type="text" name="username" placeholder="Enter UserName"></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="password" placeholder="Enter Password"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Login" name="login"></td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            <?php }
            ?>

            <?php function Register($method,$action){?>
                <fieldset>
                    <legend>Register Form</legend>
                    <form action="<?php echo $action?>" method="<?php echo $method?>">
                        <table>
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" name="name" placeholder="Enter Name"></td>
                            </tr>
                            <tr>
                                <td>Father's Name:</td>
                                <td><input type="text" name="f_name" placeholder="Enter Father's Name"></td>
                            </tr>
                            <tr>
                                <td>UserName:</td>
                                <td><input type="text" name="username" placeholder="Enter UserName"></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="password" placeholder="Enter Password"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Register" name="register"></td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            <?php } ?>

        
    

</body>
</html>