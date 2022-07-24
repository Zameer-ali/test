<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <pre>
        <?php 
            print_r($_SESSION['user_data']);
        ?>
        <table border="1">
            <tr>
                <td>Name</td>
                <td><?=$_SESSION['user_data']['user_name']?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?=$_SESSION['user_data']['user_email']?></td>
            </tr>
            <tr>
                <td>referece Id</td>
                <td><?=$_SESSION['user_data']['reference_id']?></td>
            </tr>
            <tr>
                <td>refereced_by Id</td>
                <td><?=$_SESSION['user_data']['referenced_by']?></td>
            </tr>
            <tr>
                <td>Total refered users</td>
                <td><?=$_SESSION['user_data']['refered_users']?></td>
            </tr>
        </table>
    </pre>


</body>
</html>