<?php 
    require_once('$connection.php');
   

    if(isset($_REQUEST['action']) && $_REQUEST['action'] == "show_detail"){
        
        
         if(isset($_REQUEST['searchData'])){
            $query=mysqli_query($connection,"SELECT * FROM users WHERE cnic LIKE '%".$_REQUEST['searchData']."%' ");
            if($query->num_rows) {
                echo "<ul style='list-style-type: none;'>";
                while($result=mysqli_fetch_assoc($query)){
                    extract($result);
                    ?>
                        <li
                         style="border:1px solid black;background-color:azure;color:blue;padding:10px;cursor:pointer;"
                          onclick="getInput(this)" getdd="<?=$cnic?>">
                          <?=$cnic?>
                        </li>
                    <?php
                    
                }
                echo "</ul>";
            }else{
                ?>
                <h3 style="color:red;text-align:center">Record not Found!</h3>
		<?php
            }
        }
         if(isset($_REQUEST['search'])){
             $search=$_REQUEST['search'];
            $query=mysqli_query($connection,"SELECT * FROM users WHERE cnic='".$search."'");
            $result=mysqli_fetch_assoc($query);
            if($query->num_rows) {
                extract($result);
                            ?>
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
                    
            <?php } else { ?>
                    <h3 style="color:red;text-align:center">Record not Found!</h3>
            <?php } 
         }
        
	}
?>