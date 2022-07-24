<?php
session_start();
require_once('../connection.php');

if (isset($_SESSION['user'])) {
    if($_SESSION['user'][7]==1){
    }else if($_SESSION['user'][7]==2){
        header('location:../user/Dashboard.php');die;
    }
}else{
header('location:index.php');die;
}

    if (isset($_REQUEST['delete'])) {
        $user_id=$_REQUEST['user_id'];
        $query = "DELETE FROM `users` WHERE `users`.`user_id` = $user_id";
		 $result = mysqli_query($connection,$query);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashboard</title>
    <style>
         body{
            font-size: 20px;
            background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSo1QJ-2URJylPZf4ovdd1gVjSeGBL9OF76CPXdugKaQxe-FBv4gYashScQE_9Ibyj9PxI&usqp=CAU) no-repeat;
            background-size: cover;
        }
        .header{
            background-color: whitesmoke;
            height: 50px;
        }
        h1{
            display: inline;
            /* padding: 10px; */
            margin: 30px;
            
        }
        .edit_btn{
            
            padding: 7px 15px;
            /* margin: 10px 10px; */
            background-color: green;
            cursor: pointer;
            font-weight: bold;
            color: white; 
        }
        .btn{
            float: right;
            padding: 7px 30px;
            margin: 7px 10px;
            background-color: green;
            cursor: pointer;
            
        }
        .btn:hover,.edit_btn:hover{
          
            background-color: blue;

        }
        .btn a{
            font-weight: bold;
            color: white;
            text-decoration: none;
        }
        table{
            background-color: lightblue;
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
        table tr td{
            padding: 10px;
        }
        table tr th{
            background-color: green;
            color: white;
        }
        h3,form{
            display: inline-block;
            text-align: center;
        }
        .edit_details{
            text-align: center;
        }
        .input_control{
            width: 300px;
            font-size: 18px;
        }
        .pagination{
            margin-left: 90%;
			width: 40%;
			font-size: 25px;
		
		}
        .pagination a{
			text-decoration: none;
            color: black;
            font-weight: bold;
		}
		.active {
			text-align: center;   
            color: red!important;
            font-size: 30px;
        }
        
    </style>
</head>
<body>
<div class="header">
        <h1 align=center> <?= ucfirst($_SESSION['user'][1]." ".$_SESSION['user'][2])?></h1>
        <button class="btn">
            <a href="../logout.php">logout</a>
        </button>
        <button class="btn">
            <a href="./logs.php">logs History</a>
        </button>
    </div>
    <?php 
            if (isset($_REQUEST['message'])) {?>
                <p style="color:green;font-weight:bold;text-align:center"><?=$_REQUEST['message']?></p>
           <?php }
         if(isset($_REQUEST['edit'])){
                extract($_REQUEST);
    ?>
            <table align="center" width=600 border="0" cellspacing=0>
                <form action="update_process.php" method="post">
                     <tr>
                        <td>Name:</td>
                        <td><input type="text" name="first_name" id="first_name" class="input_control" value="<?= $first_name?>" ></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><input type="text" name="last_name" id="last_name" class="input_control" value="<?= $last_name?>"></td>
                    </tr>
                   
                    <tr>
                        <td>Cnic:</td>
                        <td><input type="text" name="cnic" id="cnic" class="input_control" value="<?= $cnic?>"></td>
                    </tr>
                    <tr>
                        <td>Phone No:</td>
                        <td><input type="text" name="phone_no" id="phone_no" class="input_control" value="<?= $phone_no?>"></td>
                    </tr>
                    
                    <input type="hidden" name="user_id" class="input_control" value="<?= $user_id?>">
                    
                    <tr>
                        <td colspan="3" align="right">
                            <input class="edit_btn" type="submit" value="Update" name="update">
                        </form>
                        <form action="" method="post">
                                    <input class="edit_btn" type="submit" value="Cancel" name="Cancel">
                        </form>
                            
                    </td>
                    </tr>
            </table>
           <?php }?>
           <?php
           $per_page = 7;       
            if (isset($_REQUEST["page"])) {    
                   $_REQUEST["page"];    
            }    
            else {    
              $_REQUEST["page"]=1;    
            }    
           ?> 
          
    <table align="center" width=100% border="1" cellspacing=0>
                     <tr>
                         <th>User_ID</th>
                         <th>first Name</th>
                         <th>Last Name</th>
                         <th>Email</th>
                         <th>Cnic</th>
                         <th>Phone No</th>
                         <th>Action</th>
                     </tr>
    <?php
        // $query = "SELECT * FROM `users` WHERE `users`.`role_id` = 2 ORDER BY user_id DESC";
		// $result = mysqli_query($connection,$query);
        $start_from = ($_REQUEST["page"]-1) * $per_page;  
            $query = "SELECT * FROM `users` ORDER BY `users`.`user_id` DESC LIMIT $start_from, $per_page";
            $result = mysqli_query($connection,$query);  
            if($result->num_rows > 0)
				{
		while ($data = mysqli_fetch_assoc($result)) {?>
                  <tr>
                      <td><?= $data['user_id'] ?></td>
                      <td><?= $data['first_name'] ?></td>
                      <td><?= $data['last_name'] ?></td>
                      <td><?= $data['email'] ?></td>
                      <td><?= $data['cnic'] ?></td>
                      <td><?= $data['phone_no'] ?></td>
                      <td>
                          <form action="" method="post">
                              <input type="hidden" name="user_id" value="<?=$data['user_id']?>">
                              <input type="hidden" name="first_name" value="<?=$data['first_name']?>">
                              <input type="hidden" name="last_name" value="<?=$data['last_name']?>">
                              <input type="hidden" name="cnic" value="<?=$data['cnic']?>">
                              <input type="hidden" name="phone_no" value="<?=$data['phone_no']?>">
                              <button class="edit_btn" type="submit" 
                              name="edit">Edit</button>
                          </form>
                          <form action="" method="post">
                                <input type="hidden" name="user_id" value="<?=$data['user_id']?>">
                              <button class="edit_btn" type="submit" name="delete">Delete</button>
                          </form>
                    </td>
                  </tr>
                  <?php }} ?>
                </table>
                <div class="pagination">    
          <?php  
            $query = "SELECT COUNT(*) FROM users";     
            $result = mysqli_query($connection, $query);     
            $row = mysqli_fetch_row($result);     
            $total_records = $row[0];          
            $total_pages = ceil($total_records / $per_page);     
            $Links = "";       
            if($_REQUEST["page"]>=2){   
                echo "<a href='Dashboard.php?page=".($_REQUEST["page"]-1)." '>  Prev </a>";   
            }       
            for ($i=1; $i<=$total_pages; $i++) {   
              if ($i == $_REQUEST["page"]) {   
                  $Links .= "<a class='active' href='Dashboard.php?page="  
                                                    .$i."'>".$i." </a>";   
              }               
              else  {   
                  $Links .= "<a href='Dashboard.php?page=".$i."'>   
                                                             ".$i." </a>";     
              }   
            };     
            echo $Links;   
      
            if($_REQUEST["page"] < $total_pages){   
                echo "<a href='Dashboard.php?page=".($_REQUEST["page"]+1)." '>  Next </a>";   
            }   
          ?>    
          </div>

</body>
</html>
