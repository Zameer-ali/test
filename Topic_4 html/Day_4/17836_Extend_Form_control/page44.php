<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Form Control Dynamically</title>
</head>
<body>
    <table border='1' align='center' width='500' cellspacing='0' cellpadding='4'>
        <h1 align='center'>Generate Form Control Dynamically</h1>
        <form action="page3.php" method="post">
       <?php for($i=1;$i<=$_REQUEST['hidden'];$i++){ 
        if(isset($_POST['select'.$i])){?>
        
        <tr>
            <td><?php echo $i; ?>.Name:</td>
            <td><input type="text" name="name<?php echo $i; ?>" size="" value="<?php echo $_REQUEST['name'.$i] ?>"></td>

            <td>Gender:</td>
            <td><input type="text" name="gender<?php echo $i; ?>" size="" value="<?php echo $_REQUEST['gender'.$i] ?>"></td>

            <td>Country:</td>
            <td><input type="text" name="country<?php echo $i; ?>" size="" value="<?php echo $_REQUEST['country'.$i] ?>"></td>
        </tr>
        <?php } 
        else{?>

            <input type="hidden" name="name<?php echo $i;?>" value="<?php echo $_REQUEST['name'.$i] ?>">
            <input type="hidden" name="gender<?php echo $i;?>" value="<?php echo $_REQUEST['gender'.$i] ?>">
            <input type="hidden" name="country<?php echo $i;?>" value="<?php echo $_REQUEST['country'.$i] ?>">
       <?php }?>
        
        <?php }?>
        <tr>
            <td colspan='100%' align='right'><input type="submit" value="Update" name='submit'></td>
        </tr>
        
        <input type="hidden" name="hidden" value="<?php echo $_REQUEST['hidden'] ?>">
       </form>
    </table>
    
</body>
</html>
