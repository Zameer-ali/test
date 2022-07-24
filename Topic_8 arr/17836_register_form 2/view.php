
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
</head>
<body>
    <table border=1>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Surname</th>
            <th>Department</th>
        </tr>
        <?php foreach($_SESSION as $key => $value){ ?>
            <tr>
                <td><input type="checkbox" name="check"></td>
                <td><?php echo $key ?></td>
                <td><?php echo $value['name']?></td>
                <td><?php echo $value['f_name']?></td>
                <td><?php echo $value['surname']?></td>
                <td><?php echo $value['department']?></td>
            
            </tr>
           <?php } ?>
    </table>
</body>
</html>