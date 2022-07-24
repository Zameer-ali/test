<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Form Control Dynamically</title>
</head>
<body>
    <table border='1' align='center' width='500' cellspacing='1' cellpadding='1'>
        <h1 align='center'>Generate Form Control Dynamically</h1>
       <?php for($i=1;$i<=$_REQUEST['hidden'];$i++){ ?>
        <tr>
            <td><?php echo $i; ?>.Name:</td>
            <td><?php echo $_REQUEST['name'.$i] ?></td>
        
            <td>Gender:</td>
            <td><?php echo $_REQUEST['gender'.$i] ?></td>
        
            <td>Country:</td>
            <td><?php echo $_REQUEST['country'.$i] ?></td>
        </tr>
        
        <?php }?>
       
    </table>
</body>
</html>
