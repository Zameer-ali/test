<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['email'])){

        header('location:dashboard.php');
    } else{
        header('location:index.php');
    }
        if(isset($_REQUEST['submit'])){
            $name='Zameer Ali Tunio';
            $email='abc@gmail.com';
            $pass='1234';
            if($_REQUEST['password']==$pass && $_REQUEST['email']==$email){
                $_SESSION['name']=$name;
                $_SESSION['email']=$email;
                header('location:dashboard.php');
            }else{
                header('location:index.php?message=Invalid User');

            }
        }
    ?>
</body>
</html>