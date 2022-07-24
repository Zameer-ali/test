<?php session_start();
if (isset($_REQUEST['delete'])) {
	if(isset($_REQUEST['count']))
	{
				
                for ($i=1; $i<=$_REQUEST['count'];  $i++) { 
                    $array[$_REQUEST['ID'.$i]] = 
                    [
                        'name'          =>$_REQUEST['name'.$i],
                        'f_name'        =>$_REQUEST['f_name'.$i],
                        'surname'       =>$_REQUEST['surname'.$i],
                        'department'    =>$_REQUEST['department'.$i],
                        'select'		=>$_REQUEST['select'.$i]??'',
                    ];
                }
            }
			

          foreach ($array as $key => $value) {
          	if ($value['select']) {
          		unset($array[$key]);
          	}else{
          		$array[$key]=$value;
          		
          	}
          }
        }

  if (isset($_REQUEST['check_record'])) {
      
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

            
        }
  if (isset($_REQUEST['find'])) {
      
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

            
        }
		if (isset($_REQUEST['update_record'])) {
			echo "<pre>";
          
            echo "</pre>";
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

        }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>view</title>
</head>
<body>
	<form method="post">		
		 <table border="1" cellspacing="0" cellpadding="3" align="center">
		 	<h2 align="center">Record</h2>
		 	<tr>
		 		<th></th>
		 		<th>ID</th>
		 		<th>Name</th>
		 		<th>Father Name</th>
		 		<th>Surname</th>
		 		<th>Department</th>
		 	</tr>

		 	<?php
		 	if(!empty($array))
                {
                $count=1;
		 	 foreach($array as $key=> $value){ ?>
		 		<tr>
		 			<td><input type="checkbox" name="select<?php echo $count;?>"></td>
		 			<td><?php echo $key;?></td>
		 			<td><?php echo $value['name'];?></td>
		 			<td><?php echo $value['f_name'];?></td>
		 			<td><?php echo $value['surname'];?></td>
		 			<td><?php echo $value['department'];?></td>
		 		</tr>
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
				<tr>
					<td colspan="6" align="right">
					<input type="submit" name="add_new_record" value="Add New Record" formaction="register.php">
					<input type="submit" name="delete" value="Delete" formaction="view.php">
					<input type="submit" name="edit" value="Edit" formaction="edit.php"></td>
				</tr>
		 </table>
		 <table border=1 align=center style="margin-top:10%;">
			 <tr>
				 <td>
					 <input type="search" name="search_text">
				 </td>
				 <td>
					 <input type="submit" name="find" value="Search">
				 </td>
			 </tr>
		 </table>
	</form>
	<?php 
	if(isset($_REQUEST['find'])){ ?>
		<form method="post">		
			 <table border="1" cellspacing="0" cellpadding="3" align="center">
				 <?php
				 if(!empty($array))
					{
					$count=1;
					$flag=true;
				  foreach($array as $key=> $value){ 
					  if ($_REQUEST['search_text']==$key) {
						  $flag=false;
						  ?>
						  <h2 align="center">Record found</h2>
							 <tr>
							 <th></th>
							 <th>ID</th>
							 <th>Name</th>
							 <th>Father Name</th>
							 <th>Surname</th>
							 <th>Department</th>
							 </tr>
							 <tr>
								 <td><input type="checkbox" name="select<?php echo $count;?>"></td>
								 <td><?php echo $key;?></td>
								 <td><?php echo $value['name'];?></td>
								 <td><?php echo $value['f_name'];?></td>
								 <td><?php echo $value['surname'];?></td>
								 <td><?php echo $value['department'];?></td>
							 </tr>
							 <tr>
								<td colspan="6" align="right">
								<input type="submit" name="delete" value="Delete">
							</tr>
					 <?php } else {
						 ?>
				  	
					  <input type="hidden" name="ID<?php echo $count;?>" value="<?php echo $key??'';?>">
					 <input type="hidden" name="name<?php echo $count;?>" value="<?php echo $value['name']??'';?>">
					 <input type="hidden" name="f_name<?php echo $count;?>" value="<?php echo $value['f_name']??'';?>">
					 <input type="hidden" name="surname<?php echo $count;?>" value="<?php echo $value['surname']??'';?>">
					<input type="hidden" name="department<?php echo $count;?>" value="<?php echo $value['department']??'';?>">
					<input type="hidden" name="select<?php echo $count;?>" value="<?php echo $value['select']??'';?>">
					 <?php 
					 $count++;
					}}
					if ($flag) {
						echo '<h1 align=center>Record not Found</h1>';	 
					}} ?>
					
					<input type="hidden" name="count" value="<?php echo $count-1 ?>">
			 </table>
		</form>
	<?php }
	?>
</body>
</html>