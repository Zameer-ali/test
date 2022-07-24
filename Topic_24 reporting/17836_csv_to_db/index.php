<?php
 $con=mysqli_connect('localhost','root','','dummy_data');
 $file=fopen('import.csv','r');

$result=mysqli_query($con,"SELECT * from dummy");
if ($result->num_rows) {
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>csv file</title>
        </head>
        <body>
            <table align="center" bgcolor="cyan" cellspacing=0 cellpadding=10 border="1">
                <tr>
                    <td colspan="4" align="center"><a href="process.php"> Download file</a></td>
                </tr>
                <tr bgcolor="gray">
                    <td>#</td>
                    <td>Product</td>
                    <td>Name</td>
                    <td>NO</td>
                </tr>
                <?php
                    while($data=mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?= $data['id']?></td>
                            <td><?= $data['product']?></td>
                            <td><?= $data['name']?></td>
                            <td><?= $data['no']?></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </body>
        </html>
    <?php
}else{
    echo "record not found retry!";
    while($data=fgetcsv($file)){
        $result="INSERT INTO dummy(product,name,no ) Value('".$data[1]."','".$data[2]."','".$data[3]."')";
        mysqli_query($con,$result);
    }
}

?>