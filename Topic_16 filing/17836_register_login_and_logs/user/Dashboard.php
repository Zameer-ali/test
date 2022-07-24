<?php
session_start();
if (isset($_SESSION['user'])) {
    if($_SESSION['user'][7]==2){
    }else if($_SESSION['user'][7]==1){
        header('location:../admin/Dashboard.php');die;
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
    <title>Admin-Dashboard</title>
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
            
            padding: 7px 30px;
            margin: 10px 10px;
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
        }
        table tr td{
            padding: 10px;
        }
        h3,form{
            display: inline-block;
            text-align: center;
        }
        .edit_details{
            text-align: center;
        }
        .input_control{
            width: 300px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 align=center> <?= $_SESSION['user'][1]." ".$_SESSION['user'][2]?></h1>
        <button class="btn">
            <a href="../logout.php">logout</a>
        </button>
    </div>
        <?php 
            if (isset($_REQUEST['message'])) {?>
                <p style="color:green;font-weight:bold;text-align:center"><?=$_REQUEST['message']?></p>
           <?php }
        ?>
        <div class="edit_details">
            <h3 >User Details</h3>
            <?php if(isset($_REQUEST['edit_btn'])){?>
                <form method="POST">
                <button class="edit_btn" type="submit" name="cancel">Cancel</button>
            </form>
           <?php }else{ ?>
            <form method="POST">
                <button class="edit_btn" type="submit" name="edit_btn">Edit</button>
            </form>
            <?php } ?>
        </div>
        <?php 
            if(isset($_REQUEST['edit_btn'])){?>
            <table align="center" width=600 border="0" cellspacing=0>
                <form action="update_process.php" method="post">
                     <tr>
                        <td>Name:</td>
                        <td><input type="text" name="first_name" id="first_name" class="input_control" value="<?= $_SESSION['user'][1]?>" ></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><input type="text" name="last_name" id="last_name" class="input_control" value="<?= $_SESSION['user'][2]?>"></td>
                    </tr>
                   
                    <tr>
                        <td>Cnic:</td>
                        <td><input type="text" name="cnic" id="cnic" class="input_control" value="<?= $_SESSION['user'][5]?>"></td>
                    </tr>
                    <tr>
                        <td>Phone No:</td>
                        <td><input type="text" name="phone_no" id="phone_no" class="input_control" value="<?= $_SESSION['user'][6]?>"></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="right"><input class="edit_btn" type="submit" value="Update" name="update"></td>
                    </tr>
                    </form>
            </table>
           <?php }else{?>
            <table align="center" width=600 border="0" cellspacing=0>
                
                <tr>
                    <td>User_ID:</td>
                    <td><?= $_SESSION['user'][0]?></td>
                </tr>
                <tr>
                    <td>Full Name:</td>
                    <td><?= $_SESSION['user'][1]." ".$_SESSION['user'][2]?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?= $_SESSION['user'][3]?></td>
                </tr>
                <tr>
                    <td>Cnic:</td>
                    <td><?= $_SESSION['user'][5]?></td>
                </tr>
                <tr>
                    <td>Contact NO:</td>
                    <td><?= $_SESSION['user'][6]?></td>
                </tr>
            </table>

           <?php }
        ?>
</body>
</html>