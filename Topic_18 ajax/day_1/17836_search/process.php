<?php 
    require_once('$connection.php');
   

    if(isset($_REQUEST['action']) && $_REQUEST['action'] == "show_detail"){
        $cnic=$_REQUEST['cnic'];
         $query=mysqli_query($connection,"SELECT * FROM users WHERE cnic='".$cnic."'");
        
         $result=mysqli_fetch_assoc($query);
        
         if($query->num_rows) {
             extract($result);
             ?>
             <!DOCTYPE html>
             <html lang="en">
             <head>
                 <meta charset="UTF-8">
                 <meta http-equiv="X-UA-Compatible" content="IE=edge">
                 <meta name="viewport" content="width=device-width, initial-scale=1.0">
                 <title>Document</title>
                 <style>
                    table tr td,th{
                        /* color: #808080; */
                        font-size: 20px;
                    }
                 </style>
             </head>
             <body>
                 <table border="0" >
                        <h2 algin=center>Record Found</h2>
                     <tr>
                         <td colspan="2">
                             <img src="images/<?= $img ?>" width="150" alt="">
                         </td>
                        
                     </tr>
                     <tr>
                         <th>Name: </th>
                         <td><?= $name?></h3></td>
                     </tr>
                     <tr>
                         <th>Cnic: </th>
                         <td><?= $cnic?></h3></td>
                     </tr>
                     <tr>
                         <th>Email: </th>
                         <td><?= $email?></h3></td>
                     </tr>
                     <tr>
                         <th>Phone No: </th>
                         <td><?= $phone?></h3></td>
                     </tr>
                 </table>
                 
             </body>
             </html>
        <?php } else { ?>
                <h3 style="color:red;text-align:center">Record not Found!</h3>
		<?php } 
	}
?>