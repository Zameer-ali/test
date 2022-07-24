<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body{
            /* background-color:blue; */
            background:url(https://i.pinimg.com/originals/23/a7/58/23a758c2fea8d4d1fc503efcdf9c90e1.jpg) no-repeat ;
            background-size:cover;
        }
        h3,h1{
            color:white;
            float:left;
        
        }
        h1{
            margin-left:100px;
        }
        h3{
            margin-top:35px;
            margin-left:400px;
        }

    </style>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['email'])){

    } else{
        header('location:index.php?message=login first');
    }
        ?>
    <h1>dashboard</h1>
    <h3><?php echo $_SESSION['name']??'' ?></h3>
    <h3><?php echo $_SESSION['email']??'' ?></h3>
</body>
</html>