<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extend4ed Multiply Table</title>
</head>
<body>
    <H1 align='center'>Extended Multiply Table</H1>
    <table align='center' border='1 ' cellspacing="0">
                      <?php $Number=100; ?>
                    <tr>
                        <?php for($i=1;$i<=$Number;$i++){?>
                            <td align='center'>
                                <?php for($j=1;$j<=5;$j++){?>
                                    <?php echo "$i"."*"."$j"."=".$i*$j."<br>";?>
                                <?php }?>
                            </td> 
                       <?php if($i%5==0){
                         echo "</tr ><tr>";   
                        }?>
                        <?php } ?>

                    </tr>
                     
      
       
    </table>
</body>
</html>