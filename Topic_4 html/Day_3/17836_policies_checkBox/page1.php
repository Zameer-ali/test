<!-- <?php print_r($_POST); ?> -->
<?php if(isset($_REQUEST['submit'])){
    if(isset($_REQUEST['stipend']) && isset($_REQUEST['discipline'])&& isset($_REQUEST['attendance']) && isset($_REQUEST['agree'])){
        echo "Your are selected";
    } else{
        $page2='page2.php';        
    }
    } ?>


<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policies Using CheckBox</title>
</head>
<body>
    <table border="1" align="center" width="300" cellspacing="0" cellpadding="3">
         <!-- if the result is fail then first time it will not work and then click next time thats work when interpreter read the action the submit is null and then next time he read the value is  true so next time work  -->
        <form  method="post" action="<?php if(isset($_REQUEST['submit'])){echo $page2;}?>">
            <h1 align='center'>Policies Using CheckBox</h1>
            <tr>
                <td>1.</td>    
                <td>Stipend:</td>
                <td><input type="checkbox" name="stipend" value="stipend" ></td>
            </tr>
            <tr>

                <td>2.</td>
                <td>Discipline:</td>
                <td><input type="checkbox" name="discipline" value="discipline"></td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Attendance:</td>
                <td><input type="checkbox" name="attendance" value="attendance"></td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Assignment:</td>
                <td><input type="checkbox" name="assignment" value="assignment"></td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Agree:</td>
                <td><input type="checkbox" name="agree" value="agree"></td>
            </tr>
            <tr>
                
                <td colspan="100%" align="right"> <input type="submit" value="submit" name="submit"></td>
            </tr>
        </form>
    </table>
</body>
</html>