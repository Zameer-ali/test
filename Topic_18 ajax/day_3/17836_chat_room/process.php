<?php 
    session_start();
    require_once('require/connection.php');
    if(isset($_REQUEST['register'])){
        $dir='images';
        if(!is_dir($dir)){
            mkdir($dir);
        }

        $imgSize=$_FILES['pic']['size'];

        if($imgSize<=1048576){
            $imgPath=$dir."/"."_image_".rand(1000,10000).$_FILES['pic']['name'];
            if(move_uploaded_file($_FILES['pic']['tmp_name'],$imgPath)){
                extract($_REQUEST);

                $query="INSERT INTO users(user_name,email,password,imgpath) Values('".$user_name."','".$email."','".md5($password)."','$imgPath')";
                $result=mysqli_query($connection,$query);
                
                if ($result) {
                    header('location:index.php?message=User Successfully Registered&color=green');
                    
                }else{
                    $error=mysqli_error($connection);
                    header('location:register.php?message=User not Registered try Later&error='.$error);

                }
            }else{
                header('location:register.php?message=Error While Uplaoding Image');
            }
        }else{
            header('location:register.php?message=Image should be less than 1 mb');die;
        }
    }  elseif(isset($_REQUEST['login'])){
        
        extract($_REQUEST);
        echo $query="SELECT * FROM users WHERE email='".$email."' AND password='".md5($password)."'";
        $result=mysqli_query($connection,$query);
        $user=mysqli_fetch_assoc($result);
        
        if($result->num_rows){
            $_SESSION['user']=$user;
            $query="UPDATE users SET status=1 WHERE user_id='".$user['user_id']."'";
            $result=mysqli_query($connection,$query);
            if($result){
                header('location:Dashboard.php');
            }else{
                header('location:index.php?message=User status not Update&color=red');
            }
        }else{
            header('location:index.php?message=Invalid Email and Password&color=red');
        }
    }elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "show_msg"){
        $query=mysqli_query($connection,"SELECT * FROM chat_table,users WHERE users.user_id=chat_table.user_id");
        if ($query->num_rows) {
            while($row=mysqli_fetch_assoc($query)){
                if($row['user_id']==$_SESSION['user']['user_id']){
                    ?>
                        <li class="me">
                            <div class="entete">
                            <h3><?=$row['add_on']?></h3>
                            <h2><?=$row['user_name']?></h2>
                            <span class="status blue"></span>
                            </div>
                            <div class="triangle"></div>
                            <div class="message">
                                <div class="delete" onclick="deleteMsg(<?=$row['msg_id']?>)"><img src="https://icon-library.com/images/delete-icon-image/delete-icon-image-17.jpg" alt=""></div>
                                <?=$row['msg']?>
                        </div>
                        </li>
                    <?php   
                }else{
                    ?>
                    <li class="you">
                        <div class="entete">
                        <span class="status green"></span>
                        <h3><?=$row['add_on']?></h3>
                        <h2><?=$row['user_name']?></h2>
                        </div>
                        <div class="triangle"></div>
                        <div class="message">
                        <div class="delete" onclick="deleteMsg(<?=$row['msg_id']?>)"><img src="https://icon-library.com/images/delete-icon-image/delete-icon-image-17.jpg" alt=""></div>    
                        <?=$row['msg']?></div>
                    </li>
                    <?php
                }
            
            }
        }
    }elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "show_users"){
        $query=mysqli_query($connection,"SELECT * FROM users");
        if ($query->num_rows) {
            while($row=mysqli_fetch_assoc($query)){
                if(!($row['user_id']==$_SESSION['user']['user_id'])){
                    ?>
                        <li>
                            <img src="<?=$row['imgpath']?>" alt="" >
                            <div>
                            <h2><?=$row['user_name']?></h2>
                            <h3>
                                <?php
                                if($row['status']==1){
                                    ?>
                                        <span class="status green"></span>
                                            online
                                        </h3>
                                    <?php
                                }else{
                                    ?>
                                        <span class="status orange"></span>
                                            offline
                                        </h3>
                                    <?php
                                }
                                ?>
                            </div>
                        </li>
                    <?php
                }
            }
        }
    }elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "send_msg"){
        $query="INSERT INTO chat_table(msg,user_id,add_on) Values('".$_REQUEST['msg']."','".$_SESSION['user']['user_id']."',NOW())";
        $result=mysqli_query($connection,$query);
        
        if ($result) {
            echo true;
        }else{
            echo false;
        }
    }
    elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "delete_msg"){
        $query="DELETE FROM chat_table WHERE msg_id=".$_REQUEST['msg_id'];
        $result=mysqli_query($connection,$query);
        if ($result) {
            echo true;
        }else{
            echo false;
        }
    }
    else{
        header('location:index.php?message=Access Denied&color=red');
    }
    

?>