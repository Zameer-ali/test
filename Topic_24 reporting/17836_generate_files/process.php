<?php 
$con=mysqli_connect('localhost','root','','dummy_data');
$result=mysqli_query($con,"SELECT * from dummy");

if ($_REQUEST['action']=='csv_libr') {
    include("excelwriter/excelwriter.inc.php");
    $fileName = "excel_library.xls";
    $excel = new ExcelWriter($fileName);
    while($data=mysqli_fetch_assoc($result)){
        $excel->writeLine($data, array('text-align'=>'center', 'backbround_color'=> 'cyan'));
    }
    $excel->close();
    header('location:index.php');die;
    
}else
if ($_REQUEST['action']=='word_file') {
    header("Content-type: application/vnd-ms-word");  
header("Content-Disposition: attachment; filename=word_file.doc");
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
}
elseif ($_REQUEST['action']=='excel_file') {
header("Content-type: application/vnd-ms-excel");  
header("Content-Disposition: attachment; filename=excel_file.xls");
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
}
elseif ($_REQUEST['action']=='csv_file') {
$file=fopen('export.csv','w');
while($data=mysqli_fetch_assoc($result)){
    fputcsv($file,$data);
}
header('location:index.php');die;
}
elseif ($_REQUEST['action']=='text_file') {
header("Content-type: application/text");  
header("Content-Disposition: attachment; filename=text_file.txt");
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
}

if ($result->num_rows) {
    ?>
            <table align="center" bgcolor="cyan" cellspacing=0 cellpadding=10 border="1">   
                <tr bgcolor="gray"  style="color: white;">
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
    <?php
}else{
    echo "record not found!";
}
?>