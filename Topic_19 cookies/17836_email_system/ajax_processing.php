<?php 
    require_once('require/connection.php');
    date_default_timezone_set('asia/karachi');
    $COOKIE=unserialize($_COOKIE['user']);
    if(isset($_REQUEST['action']) && $_REQUEST['action'] == "inbox"){
        $query=mysqli_query($connection,"SELECT * FROM emails WHERE reciever_email='".$COOKIE['email']."' AND draft_status=0 AND reciever_dlt_sts=0 AND reciever_trash_sts=0 AND deleted=0 ORDER BY email_id DESC ");

        if ($query->num_rows) {
            ?>
                <table width=1000 cellpadding=10 cellspacing=0 border=1 align=left style="background-color: #dce2c0;text-align:center;font-size:17px;">
                <tr >
                    <td colspan="6" style="padding:0px"  ><h2>Inbox</h2></td>
                </tr>
                    <tr style="background-color: #c0e2d7;" >
                        <th>#</th>
                        <th>Message</th>
                        <th>Sender</th>
                        <th>Date and Time</th>
                        <th>Actions</th>

                    </tr>
                    <?php
                        $i=1;
                        while($row=mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $row['msg']?></td>
                                <td><?= $row['sender_email']?></td>
                                <td><?= $row['send_date']?></td>
                                <td>
                                    <button class="btn danger text-white" onclick="dltEmail('dltInbox',<?= $row['email_id'] ?>)">Delete</button>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </table> 
                 
            <?php
        }else{
            echo "<p style='text-align:center;font-size:18px;color:red;'>No mails</p>";
        }//while end
	}// show inbox if
    elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "sent"){
        $query=mysqli_query($connection,"SELECT * FROM emails WHERE sender_email='".$COOKIE['email']."' AND draft_status=0 AND sender_dlt_sts=0 ORDER BY email_id DESC ");

        if ($query->num_rows) {
            ?>
                <table width=1000 cellpadding=10 cellspacing=0 border=1 align=left style="background-color: #dce2c0;text-align:center;font-size:17px;">
                <tr >
                    <td colspan="6" style="padding:0px"  ><h2>Sent Mails</h2></td>
                </tr>
                    <tr style="background-color: #c0e2d7;" >
                        <th>#</th>
                        <th>Message</th>
                        <th>Reciever</th>
                        <th>Date and Time</th>
                        <th>Actions</th>

                    </tr>
                    <?php
                        $i=1;
                        while($row=mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $row['msg']?></td>
                                <td><?= $row['reciever_email']?></td>
                                <td><?= $row['send_date']?></td>
                                <td>
                                    <button class="btn danger text-white" onclick="dltEmail('dltSent',<?= $row['email_id'] ?>)">Delete</button>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </table> 
                 
            <?php
        }else{
            echo "<p style='text-align:center;font-size:18px;color:red;'>No mails</p>";        }//while end
	}// sent mails if
    elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "draft"){
        $query=mysqli_query($connection,"SELECT * FROM emails WHERE sender_email='".$COOKIE['email']."' AND draft_status=1 ORDER BY email_id DESC ");

        if ($query->num_rows) {
            ?>
                <table width=1000 cellpadding=10 cellspacing=0 border=1 align=left style="background-color: #dce2c0;text-align:center;font-size:17px;">
                <tr >
                    <td colspan="6" style="padding:0px"  ><h2>Draft Mails</h2></td>
                </tr>
                    <tr style="background-color: #c0e2d7;" >
                        <th>#</th>
                        <th>Message</th>
                        <th>Reciever</th>
                        <th>Date and Time</th>
                        <th>Actions</th>

                    </tr>
                    <?php
                        $i=1;
                        while($row=mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $row['msg']?></td>
                                <td><?= $row['reciever_email']?></td>
                                <td><?= $row['send_date']?></td>
                                <td>
                                    <button class="btn danger text-white" onclick="dltEmail('dltDraft',<?= $row['email_id'] ?>)">Delete</button>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </table> 
                 
            <?php
        }else{
            echo "<p style='text-align:center;font-size:18px;color:red;'>No mails</p>";
        }//while end
	}// draft mails if
    elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "trash"){
        $query=mysqli_query($connection,"SELECT * FROM emails WHERE sender_email!='".$COOKIE['email']."' AND reciever_trash_sts=1 AND deleted=0 ORDER BY email_id DESC");

        if ($query->num_rows) {
            ?>
                <table width=1000 cellpadding=10 cellspacing=0 border=1 align=left style="background-color: #dce2c0;text-align:center;font-size:17px;">
                <tr >
                    <td colspan="6" style="padding:0px"  ><h2>Trash</h2></td>
                </tr>
                    <tr style="background-color: #c0e2d7;" >
                        <th>#</th>
                        <th>Message</th>
                        <th>Reciever</th>
                        <th>Date and Time</th>
                        <th>Actions</th>

                    </tr>
                    <?php
                        $i=1;
                        while($row=mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $row['msg']?></td>
                                <td><?= $row['reciever_email']?></td>
                                <td><?= $row['send_date']?></td>
                                <td>
                                    <button class="btn danger text-white" onclick="dltEmail('dltTrash',<?= $row['email_id'] ?>)">Delete</button>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </table> 
                 
            <?php
        }else{
            echo "<p style='text-align:center;font-size:18px;color:red;'>No mails</p>";
        }//while end
	}// trash mails if
    elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "send_email"){
        extract($_REQUEST);
        $sender_email=$COOKIE['email'];
        $result=mysqli_query($connection,"INSERT INTO emails(sender_email,reciever_email,msg,send_date) VALUES('".$sender_email."','".$email."','".$text_area."',NOW())");
        if($result){
            ?>
            <div  style="font-size:17px;color:green;">  Email Send Successfully!</div>
            <?php
        }else{
            ?>
            <div  style="font-size:17px;color:red;">User not Insert Try again later!
            <br>
            <?= mysqli_error($connection); ?>
            </div>
            <?php
        }
    }//send mails if
    elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "send_draft"){
        extract($_REQUEST);
        $sender_email=$COOKIE['email'];
        $result=mysqli_query($connection,"INSERT INTO emails(sender_email,reciever_email,msg,send_date,draft_status) VALUES('".$sender_email."','".$email."','".$text_area."',NOW(),1)");
        if($result){
            ?>
            <div  style="font-size:17px;color:green;">  Email Save as Draft!</div>
            <?php
        }else{
            ?>
            <div  style="font-size:17px;color:red;">Try again later!
            <br>
            <?= mysqli_error($connection); ?>
            </div>
            <?php
        }
    }//send mails if
    elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "delete_email"){
        extract($_REQUEST);
        if(isset($_REQUEST['status']) && $_REQUEST['status']=='dltInbox'){
            $result=mysqli_query($connection,"UPDATE emails SET reciever_dlt_sts=1, reciever_trash_sts=1 WHERE email_id='".$_REQUEST['email_id']."'");
        }
        elseif(isset($_REQUEST['status']) && $_REQUEST['status']=='dltSent'){
            $result=mysqli_query($connection,"UPDATE emails SET sender_dlt_sts=1 WHERE email_id='".$_REQUEST['email_id']."'");
        }
        elseif(isset($_REQUEST['status']) && $_REQUEST['status']=='dltDraft'){
            $result=mysqli_query($connection,"DELETE FROM emails WHERE email_id='".$_REQUEST['email_id']."'");
        }
        elseif(isset($_REQUEST['status']) && $_REQUEST['status']=='dltTrash'){
            $result=mysqli_query($connection,"UPDATE emails SET reciever_dlt_sts=0, reciever_trash_sts=0,deleted=1  WHERE email_id='".$_REQUEST['email_id']."'");
        }
        if($result){
            ?>
            <div  style="font-size:17px;color:green;">Deleted Successfully!</div>
            <?php
        }else{
            ?>
            <div  style="font-size:17px;color:red;">Email not Deleted Try again later!
            </div>
            <?php
        }
       

    }//delete user if
    elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "get_form"){
      
        ?>
        <h2>Send Email </h2>
          <input type="email" id="email" name="email" placeholder="Reciever Email..." onblur="checkEmail()"/>
          <p id='r_email' style="padding-left: 10px;"></p>
          <textarea rows="7" id="text_area" class="text_area"  placeholder="Enter Your Message.." ></textarea>
          <input type="submit" class="button" id="send_email_btn"  value="Send" onclick="sendEmail()"/>
          <input type="submit" class="button"  style="background-color: red;" id="Cancel" value="Cancel" onclick="cancelEmail()"/>
        <?php
       

    }
    elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "check_email"){
        $email=$_REQUEST['email'];
         $query=mysqli_query($connection,"SELECT * FROM users WHERE email='".$email."'");
         
         if($query->num_rows) {
             echo true;
             } else { 
                echo false;
        } 
	}//check email if
?>