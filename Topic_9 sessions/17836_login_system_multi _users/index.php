<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <style>
        body{
            /* background-color:blue; */
            background:url(https://t3.ftcdn.net/jpg/03/55/60/70/360_F_355607062_zYMS8jaz4SfoykpWz5oViRVKL32IabTP.jpg) no-repeat ;
            background-size:cover;
        }
        input[type='password'],input[type='text']{
            width: 100%;
            font-size:30px;
            margin:10px
            
            }
        input[type="submit"]{
            width:120px;
            height:40px;
            background-color:lightgreen;
            font-size:20px;
            border-radius:20px;
        }
        input[type="submit"]:hover{
           
            background-color:lightblue;
            cursor: pointer;
        }
        .label{
            font-size:30px
        }
        
        div{
            box-shadow: 0px 0px 8px 10px #888888;
            width:40%;
            padding:30px;
            margin-top:13%;
        }
    </style>
</head>
<body >
    <center>
        <?php 
         session_start();
         if(isset($_SESSION['user'])){
            if ($_SESSION['user']['role']=='admin') {
                header('location:admin.php');die;
            }
            else if ($_SESSION['user']['role']=='teacher') {
                header('location:teacher.php');die;
            }
            else if ($_SESSION['user']['role']=='student') {
                header('location:student.php');die;
            }
        }    
        ?>
        <div>
        
        <form action="process.php" method="post">
            <h1>Login Page</h1>
            <h3><?php echo $_GET['message']??''?></h3>
            <table>
                <tr>
                    <td  class="label">Username:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td class="label">Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan=2 align=right> <input type="submit" name="submit" value="Login"></td>
                </tr>
            </table>
        </form>
        </div>
    </center>
</body>
</html>