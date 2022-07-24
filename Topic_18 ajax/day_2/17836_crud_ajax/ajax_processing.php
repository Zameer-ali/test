<?php 
    require_once('require/connection.php');
    if(isset($_REQUEST['action']) && $_REQUEST['action'] == "show_users"){
         
         if(isset($_REQUEST['search'])){
         $query=mysqli_query($connection,"SELECT * FROM users WHERE name LIKE '%".$_REQUEST['search']."%' OR email LIKE '%".$_REQUEST['search']."%' OR cnic LIKE '%".$_REQUEST['search']."%' OR phone LIKE '%".$_REQUEST['search']."%'");
            
         }else{
            $query=mysqli_query($connection,"SELECT * FROM users ORDER BY user_id DESC");
         }
        if ($query->num_rows) {
            ?>
            
                <table width=800 cellpadding=10 cellspacing=0 border=1 style="background-color: #dce2c0;text-align:center;font-size:17px;">
                <tr >
                    <td colspan="6" style="padding:0px"  ><h2>Users Record</h2></td>
                </tr>
                    <tr style="background-color: #c0e2d7;" >
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Cnic</th>
                        <th>Phone NO</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                        $i=1;
                        while($row=mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $row['name']?></td>
                                <td><?= $row['email']?></td>
                                <td><?= $row['cnic']?></td>
                                <td><?= $row['phone']?></td>
                                <td>
                                    <button class="btn success text-white px-4" onclick="editUser(<?= $row['user_id'] ?>)">Edit</button>
                                    <button class="btn danger text-white" onclick="deleteUser(<?= $row['user_id'] ?>)">Delete</button>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </table> 
                 
            <?php
        }else{
            echo "Record Not Found!";
        }//while end
	}// show user if
    elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "add_user"){
        extract($_REQUEST);
        $stmt=mysqli_prepare($connection,"INSERT INTO users(name,email,cnic,phone) VALUES(?,?,?,?)");
        mysqli_stmt_bind_param($stmt,'ssss',$name,$email,$cnic,$phone);
        $result=mysqli_stmt_execute($stmt);
        if($result){
            ?>
            <div  style="font-size:17px;color:green;">User id=<?= mysqli_insert_id($connection)  ?>  Inserted Successfully!</div>
            <?php
        }else{
            ?>
            <div  style="font-size:17px;color:red;">User not Insert Try again later!
            <br>
            <?= mysqli_error($connection); ?>
            </div>
            <?php
        }
    }//add user's if
    elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "delete_user"){
        $query=mysqli_query($connection,"DELETE FROM users WHERE user_id=".$_REQUEST['user_id']);
        if($query){
            ?>
            <div  style="font-size:17px;color:red;">User id=<?= mysqli_insert_id($connection)  ?> Deleted Successfully!</div>
            <?php
        }else{
            ?>
                <div  style="font-size:17px;color:green;">User not Deleted Try  again later!
            <?php
        }

    }//deleteuser if
    elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "edit_user"){
        
        $query=mysqli_query($connection,"SELECT * FROM users WHERE user_id=".$_REQUEST['user_id']);
        $result=mysqli_fetch_assoc($query);
        extract($result);
        ?>
        <h2>Edit User Form </h2>
          <input type="text" id="name" name="name" placeholder="Name.." value="<?= $name?>" />
          <input type="text" id="email" name="email" placeholder="Email.. zameer@gmail.com"  value="<?= $email?>" />
          <p id='r_email'></p>
          <input type="text" id="cnic" name="cnic" placeholder="Cnic.. 00000-0000000-0" value="<?= $cnic?>" />
          <input type="text" id="phone" name="phone"  placeholder="Phone No.." value="<?= $phone?>" />
          <input type="submit" class="button" id="submit" name="sign_up" value="Update" onclick="updateUser(<?=$user_id?>)"/>
          <input type="submit" class="button" style="background-color: red;" id="Cancel" name="Cancel" value="Cancel" onclick="getForm()"/>
        <?php
       

    }//Edituser if
    elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "update_user"){
        
        extract($_REQUEST);
        $stmt=mysqli_prepare($connection,"UPDATE users SET name=?,email=?,cnic=?,phone=? WHERE user_id=?");
        mysqli_stmt_bind_param($stmt,'ssssi',$name,$email,$cnic,$phone,$user_id);
        $result=mysqli_stmt_execute($stmt);
        if($result){
            ?>
            <div  style="font-size:17px;color:green;">User id=<?= mysqli_insert_id($connection)  ?>  User id=<?=$user_id?> Updated Successfully!</div>
            <?php
        }else{
            ?>
            <div  style="font-size:17px;color:red;">User id=<?=$user_id?> not Updated Try again later!
            <br>
            <?= mysqli_error($connection); ?>
            </div>
            <?php
        }
       

    }//Update user if
    elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "get_form"){
      
        ?>
        <h2>Add User Form </h2>
          <input type="text" id="name" name="name" placeholder="Name.."/>
          <input type="text" id="email" name="email" placeholder="Email.. zameer@gmail.com" />
          <p id='r_email'></p>
          <input type="text" id="cnic" name="cnic" placeholder="Cnic.. 00000-0000000-0" />
          <input type="text" id="phone" name="phone"  placeholder="Phone No.." />
          <input type="submit" class="button" id="submit" name="sign_up" value="Sign Up" onclick="addUser()"/>
          <input type="submit" class="button" style="background-color: red;" id="Cancel" name="Cancel" value="Cancel" onclick="cancel()"/>
        <?php
       

    }//get form if
?>