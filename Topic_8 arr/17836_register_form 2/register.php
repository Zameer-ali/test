<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>

    <table border=0 align=center>
        <h1 align=center>Register Form</h1>
        <?php
            
        $ID=rand(1000,9000);
     
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
         if (isset($_REQUEST['submit'])) {
            $_SESSION[$_REQUEST['ID']]=['name'=>$_REQUEST['name'],'f_name'=>$_REQUEST['f_name'],'surname'=>$_REQUEST['surname'],'department'=>$_REQUEST['department'] ];
            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";
          
        }
        ?> 
        <form action="" method="post">
            <tr>
                <td>ID:</td>
                <td><input type="text" name="ID" value="<?php echo "ID_".$ID; ?>" readonly ></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" ></td>
            </tr>
            <tr>
                <td>Father's Name:</td>
                <td><input type="text" name="f_name" ></td>
            </tr>
            <tr>
                <td>Surname:</td>
                <td><input type="text" name="surname" ></td>
            </tr>
            <tr>
                <td>Department:</td>
                <td>
                    <select name="department" >
                        <option>BSIT</option>
                        <option>BSCS</option>
                        <option>ENGLISH</option>
                        <option>BBA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Add">
                    <input type="submit" value="Check Record" formaction="view.php" ></td>
            </tr>

            


        </form>
            
      

    </table>
</body>
</html>