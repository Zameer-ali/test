<?php
session_start();
require_once('../connection.php');

if (isset($_SESSION['user'])) {
    if($_SESSION['user'][7]==1){
    }else if($_SESSION['user'][7]==2){
        header('location:../user/Dashboard.php');die;
    }
}else{
header('location:index.php');die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
            font-size: 20px;
            background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSo1QJ-2URJylPZf4ovdd1gVjSeGBL9OF76CPXdugKaQxe-FBv4gYashScQE_9Ibyj9PxI&usqp=CAU) no-repeat;
            background-size: cover;
        }
        .header{
            background-color: whitesmoke;
            height: 50px;
        }
        h1{
            display: inline;
            /* padding: 10px; */
            margin: 30px;
            
        }
        .edit_btn{
            
            padding: 7px 15px;
            /* margin: 10px 10px; */
            background-color: green;
            cursor: pointer;
            font-weight: bold;
            color: white; 
        }
        .btn{
            float: right;
            padding: 7px 30px;
            margin: 7px 10px;
            background-color: green;
            cursor: pointer;
            
        }
        .btn:hover,.edit_btn:hover{
          
            background-color: blue;

        }
        .btn a{
            font-weight: bold;
            color: white;
            text-decoration: none;
        }
        table{
            background-color: lightblue;
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
        table tr td{
            padding: 10px;
        }
        table tr th{
            background-color: green;
            color: white;
        }
        h3,form{
            display: inline-block;
            text-align: center;
        }
        .edit_details{
            text-align: center;
        }
       
    </style>
</head>
<body>
<div class="header">
        <h1 align=center> <?= ucfirst($_SESSION['user'][1]." ".$_SESSION['user'][2])?></h1>
        <button class="btn">
            <a href="../logout.php">logout</a>
        </button>
        <button class="btn">
            <a href="./Dashboard.php">View Users</a>
        </button>
    </div>
    <table align="center" width=800 border="0" cellspacing=0>

         <tr>
            <th>User_ID</th>
            <th>Name</th>
            <th>LogIn</th>
            <th>Logout</th>
        </tr>
        <?php 
       
        $logs="../logs/all_logs";
        $file=fopen($logs,'r');
        while ($data=fgets($file)) {
            echo $data;
        }
        ?>
       
    </table>
</body>
</html>