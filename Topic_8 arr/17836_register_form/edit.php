
<!DOCTYPE html>
<html>      
<head>
  <title>Edit Record</title>
</head>
<body>
  <?php 
      if (isset($_REQUEST['edit'])) {
      if (isset($_REQUEST['ID1'])) {
          $array=[];
            if(isset($_REQUEST['count']))
            {
                for ($i=1; $i<=$_REQUEST['count'];  $i++) { 
                    $array[$_REQUEST['ID'.$i]] = 
                    [
                        'name'         =>$_REQUEST['name'.$i],
                        'f_name'        =>$_REQUEST['f_name'.$i],
                        'surname'       =>$_REQUEST['surname'.$i],
                        'department'    =>$_REQUEST['department'.$i],
                        'select'    =>$_REQUEST['select'.$i]??'',
                    ];
                }
            }?>

               <table border=0 align=center>
               <form action="view.php" method="post">
          <?php foreach ($array as $key => $value) { 
            if ($value['select']) { ?>
                    <h1 align=center>Register Form</h1>
            <tr>
                <td>ID:</td>
                <td><input type="text" name="ID" value="<?php echo $key;?>" readonly ></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="<?php echo $value['name'];?>"></td>
            </tr>
            <tr>
                <td>Father's Name:</td>
                <td><input type="text" name="f_name" value="<?php echo $value['f_name'];?>"></td>
            </tr>
            <tr>
                <td>Surname:</td>
                <td><input type="text" name="surname" value="<?php echo $value['surname'];?>" ></td>
            </tr>
            <tr>
                <td>Department:</td>
                <td>
                    <select name="department" >
                        <option <?php echo $value['department']=='BSIT'?'selected':'';?> >BSIT</option>
                        <option <?php echo $value['department']=='BSCS'?'selected':'';?>>BSCS</option>
                        <option <?php echo $value['department']=='ENGLISH'?'selected':'';?>>ENGLISH</option>
                        <option <?php echo $value['department']=='BBA'?'selected':'';?>>BBA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="update_record" value="update">
                    <input type="submit" name="update_record" value="check record" ></td>
            </tr>           
            <?php } else { 
                $count=1;
                
                    ?>

                    <input type="hidden" name="ID<?php echo $count;?>" value="<?php echo $key??'';?>">
                    <input type="hidden" name="name<?php echo $count;?>" value="<?php echo $value['name']??'';?>">
                    <input type="hidden" name="f_name<?php echo $count;?>" value="<?php echo $value['f_name']??'';?>">
                    <input type="hidden" name="surname<?php echo $count;?>" value="<?php echo $value['surname']??'';?>">
                    <input type="hidden" name="department<?php echo $count;?>" value="<?php echo $value['department']??'';?>">

                    <?php 
                    $count++;
                 ?>
            <input type="hidden" name="count" value="<?php echo $count-1 ?>">
    
            
              <?php
            
            
        }
    }
    echo"</form>";
    echo"</table>";
          
        }else {?>
            <h1>NO Record Found</h1>
            <a href="view.php">Go Back </a>
       <?php }}
?>
</body>
</html>