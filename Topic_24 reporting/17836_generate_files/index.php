<?php
 $con=mysqli_connect('localhost','root','','dummy_data');
$result=mysqli_query($con,"SELECT * from dummy");
if ($result->num_rows) {

    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Generate Files</title>
        </head>
        <body>
            <table align="center" bgcolor="cyan" cellspacing=0 cellpadding=10 border="1">
                <tr>
                    <td colspan="4" align="center"><a href="process.php?action=csv_libr"> Download Excel library file</a></td>
                </tr>
                <tr>
                    <td colspan="4" align="center"><a href="process.php?action=word_file"> Download Word file</a></td>
                </tr>
                <tr>
                    <td colspan="4" align="center"><a href="process.php?action=excel_file"> Download Excel file</a></td>
                </tr>
                <tr>
                    <td colspan="4" align="center"><a href="process.php?action=csv_file"> Download CSV file</a></td>
                </tr>
                <tr>
                    <td colspan="4" align="center"><a href="process.php?action=text_file"> Download Text file</a></td>
                </tr>
                <tr bgcolor="gray" style="color: white;">
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
    
}

?>