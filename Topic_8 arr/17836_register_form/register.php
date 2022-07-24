        <?php 
        $ID = rand(1000,9000);
            $array = [];

         if (isset($_REQUEST['submit'])) {

            if(isset($_REQUEST['count']))
            {
                for ($i=1; $i<=$_REQUEST['count'];  $i++) { 
                    $array[$_REQUEST['ID'.$i]] = 
                    [
                        'name'         =>$_REQUEST['name'.$i],
                        'f_name'        =>$_REQUEST['f_name'.$i],
                        'surname'       =>$_REQUEST['surname'.$i],
                        'department'    =>$_REQUEST['department'.$i] 
                    ];
                }
            }

            $array[$_REQUEST['ID']] = 
            [
                'name'          =>$_REQUEST['name'],
                'f_name'        =>$_REQUEST['f_name'],
                'surname'       =>$_REQUEST['surname'],
                'department'    =>$_REQUEST['department'] 
            ];

            echo "<pre>";
            
            echo "</pre>";
        }
         if (isset($_REQUEST['add_new_record'])) {

            if(isset($_REQUEST['count']))
            {
                for ($i=1; $i<=$_REQUEST['count'];  $i++) { 
                    $array[$_REQUEST['ID'.$i]] = 
                    [
                        'name'         =>$_REQUEST['name'.$i],
                        'f_name'        =>$_REQUEST['f_name'.$i],
                        'surname'       =>$_REQUEST['surname'.$i],
                        'department'    =>$_REQUEST['department'.$i] 
                    ];
                }
            }

            

            echo "<pre>";
          
            echo "</pre>";
        }
      
        ?> 
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

        <form action="" method="post">
            <tr>
                <td>ID:</td>
                <td><input type="text" name="ID" value="<?php echo $ID?>" readonly ></td>
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
                        <option selected>BSCS</option>
                        <option>ENGLISH</option>
                        <option>BBA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="add">
                    <input type="submit" name="check_record" value="check record" formaction="view.php" ></td>
            </tr>

            <?php
                if(!empty($array))
                {

                $count=1;
                foreach($array as $key=> $value){
                    ?>
                    <input type="hidden" name="ID<?php echo $count;?>" value="<?php echo $key??'';?>">
                    <input type="hidden" name="name<?php echo $count;?>" value="<?php echo $value['name']??'';?>">
                    <input type="hidden" name="f_name<?php echo $count;?>" value="<?php echo $value['f_name']??'';?>">
                    <input type="hidden" name="surname<?php echo $count;?>" value="<?php echo $value['surname']??'';?>">
                    <input type="hidden" name="department<?php echo $count;?>" value="<?php echo $value['department']??'';?>">
                    <?php 
                    $count++;
                } ?>

            <input type="hidden" name="count" value="<?php echo $count-1 ?>">
            <?php } ?>
        </form>
            
      

    </table>
</body>
</html>