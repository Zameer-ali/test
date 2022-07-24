<?php 
    require_once('$connection.php');

    if(isset($_REQUEST['action']) && $_REQUEST['action'] == "check_email"){
        $email=$_REQUEST['email'];
         $query=mysqli_query($connection,"SELECT * FROM users WHERE email='".$email."'");
         $flag=false;
         if($query->num_rows) {
             echo $flag=true;
             } else { 
                echo $flag;
              } 
	}
    if(isset($_REQUEST['action']) && $_REQUEST['action'] == "city"){
        $country_id=$_REQUEST['country_id'];
         $query=mysqli_query($connection,"SELECT * FROM cities WHERE country_id='".$country_id."'");
        if ($query->num_rows) {
            ?>
                        <option value="">Select City...</option>

                <?php
                    while($row=mysqli_fetch_assoc($query)){
                        ?>
                        <option value="<?= $row['id'] ?>"><?= $row['city_name'] ?></option>
                        <?php
                    }
                ?>
            
            <?php
        }
	}
?>