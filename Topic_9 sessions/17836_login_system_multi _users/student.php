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
            /* color:white; */
            float:left;
        
        }
        h1{
            margin-left:100px;
        }
        h3{
            margin-top:35px;
            margin-left:900px;
        }
        button{
            margin-top:35px;margin-bottom:20px;
            margin-left:30px;
            background-color:white;
            color:white;
        }
        button:hover{
            background-color:lightblue;
        }
        button a{
            text-decoration:none;
            color:black;
            font-size:20px;
            padding:10px;

        }

    </style>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['user'])){
        if ($_SESSION['user']['role']=='admin') {
            header('location:admin.php');die;
        }
        else if ($_SESSION['user']['role']=='teacher') {
            header('location:teacher.php');die;
        }
        
    }  else{
        header('location:index.php?message=login first');
    }
        ?>
        <div style="background-color:white;">
            <h1>student dashboard </h1>
            <h3><?php echo ucfirst($_SESSION['user']['username'])??'' ?></h3>
             <button><a href="logout.php">logout</a> </button>
        </div>

</body>
</html>