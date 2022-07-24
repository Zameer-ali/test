<?php 
if(isset($_REQUEST['submit'])){
    $number=$_POST['number'];
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Form Control Dynamically</title>
</head>
<body>
    <table border='1' align='center' width='500' cellspacing='10' cellpadding='1'>
        <form method='post'  action="page3.php">
        <h1 align='center'>Generate Form Control Dynamically</h1>
       <?php for($i=1;$i<=$number;$i++){ ?>
        <tr>
            
            <td><?php echo $i; ?></<label for="">Name:</label></td>
            <td><input type="text" name="name<?php echo $i; ?>" size="55"></td>
        </tr>
        <tr>
            <td><label for="">Gender:</label></td>
            <td>male<input type="radio" name="gender<?php echo $i; ?>" size="55" value="male" >female<input type="radio" name="gender<?php echo $i; ?>" size="55" value="female" checked></td>
        </tr>
        <tr>
            <td><label for="">Country</label></td>
            <td>
                <select name="country<?php echo $i; ?>" >
                    <option>Pakistan</option>
                    <option>China</option>
                    <option>India</option>
                </select>
            </td>
        </tr>
        <tr>
            <input type="hidden" name="hidden" value="<?php echo $number;?>">
        </tr>
        
        <?php }?>
        <tr>
            <td><input type="submit" name='submit' value="submit" align='center' ></td>
        </tr>
        </form>
    </table>
</body>
</html>
