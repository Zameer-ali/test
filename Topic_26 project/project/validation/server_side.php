<?php
if (isset($_REQUEST['submit'])) {

    $is_validate=true;
    $error_messages='';
    $first_name=$_REQUEST['first_name'];
    $last_name=$_REQUEST['last_name'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $phone_no=$_REQUEST['phone_no'];
    $address=$_REQUEST['address'];
    $gender=false;

     $first_name_pattern="/^[a-z]{3,15}$/i";
     $email_pattern="/^[\w]{3,15}@[a-z]{5,15}[.](com|or|pk)$/i";
     $phone_no_pattern="/^[+][\d]{5}-[\d]{7}$/i";
     $cnic_pattern="/^[\d]{5}-[\d]{7}-[\d]{1}$/i";
     $password_pattern_small="/[a-z]+/";
     $password_pattern_capital="/[A-Z]+/";
     $password_pattern_digit="/[\d]+/";
     $password_pattern_specl_char="/[\W]+/";
     $address_pattern="/[\w\W]{10,100}/i";

     if ($first_name=='') {
        $is_validate=false;
        $error_messages.="<li>Please Enter Name</li>";
    }else{
        if (!preg_match($first_name_pattern,$first_name)) {
            $is_validate=false;
            $error_messages.="<li>Name format should be 3-15 range</li>";
        }
      }
     if ($last_name=='') {
        
    }else{
        if (!preg_match($first_name_pattern,$last_name)) {
            $is_validate=false;
            $error_messages.="<li> Last Name format should be 3-15 range</li>";
        }
    }
     if ($email=='') {
        $is_validate=false;
        $error_messages.="<li>Please Enter Email</li>";
    }else{
        if (!preg_match($email_pattern,$email)) {
            $is_validate=false;
            $error_messages.="<li>Please enter email format should be abc123@gmail.com</li>";
        }
    }
     if ($password=='') {
        $is_validate=false;
        $error_messages.="<li>Please Enter Password</li>";
    }else{
        if (!($password>=8 && preg_match($password_pattern_small,$password) && preg_match($password_pattern_capital,$password) && preg_match($password_pattern_digit,$password) && preg_match($password_pattern_specl_char,$password))){
            $is_validate=false;
            $error_messages.="<li>password should be atleast 8 characters and contain atleast 1 number 1 small alphabet 1 capital alphabet 1 special character</li>";
        }
    }
    if ($cnic=='') {
        $is_validate=false;
        $error_messages.="<li>Please Enter Cnic</li>";
    }else{
        if (!preg_match($cnic_pattern,$cnic)) {
            $is_validate=false;
            $error_messages.="<li>Cnic should be like 45303-3456543-1</li>";
        }
    }
    if ($phone_no=='') {
        $is_validate=false;
        $error_messages.="<li>Please Enter Phone Number</li>";
    }else{
        if (!preg_match($phone_no_pattern,$phone_no)) {
            $is_validate=false;
            $error_messages.="<li>phone no should be like +92303-3456543</li>";
        }
    }
    if ($address=='') {
        $is_validate=false;
        $error_messages.="<li>Please Enter Address</li>";
    }else{
        if (!preg_match($address_pattern,$address)) {
            $is_validate=false;
            $error_messages.="<li>Address should be contain range [10-100]</li>";
        }
    }
    if (!empty($_REQUEST['country'])) {
        $country=$_REQUEST['country'];
    }else{
        $is_validate=false;
        $error_messages.="<li>Please Select Country</li>";
    }

    if (isset($_REQUEST['gender'])) {
        $gender=$_REQUEST['gender'];
    }else{
        $is_validate=false;
        $error_messages.="<li>Please Select Gender</li>";
    }

    if (isset($_REQUEST['policies'])) {
        $policies=$_REQUEST['policies'];
        if(count($policies)<3){
            $is_validate=false;
            $error_messages.="<li>Please Select at least 3 policies</li>";
        }
    }else{
        $is_validate=false;
        $error_messages.="<li>Please Select policies</li>";
    }
    if ($is_validate) {?>
       <!DOCTYPE html>
       <html lang="en">
       <head>
           <title>Show data</title>
           <style>
               table{
                   font-size: 25px;
                   background-color: navy;
                   color: white;
               }
           </style>
       </head>
       <body>
           <center>
               <h1>User Data</h1>
               <table border="1" cellspacing=0 cellpadding=10 width=50%>
                   <tr>
                       <td>full name:</td>
                       <td><?= $first_name." ".$last_name ?></td>
                   </tr>
                   <tr>
                       <td>Email:</td>
                       <td><?= $email?></td>
                   </tr>
                   <tr>
                       <td>Password:</td>
                       <td><?= $password?></td>
                   </tr>
                   <tr>
                       <td>Phone number:</td>
                       <td><?= $phone_no?></td>
                   </tr>
                   <tr>
                       <td>Cnic:</td>
                       <td><?= $cnic?></td>
                   </tr>
                   <tr>
                       <td>Country:</td>
                       <td><?= $country?></td>
                   </tr>
                   <tr>
                       <td>Gender:</td>
                       <td><?= $gender?></td>
                   </tr>
                   <tr>
                       <td>Policies:</td>
                        <td><?php foreach($policies as $value){
                            echo $value."<br>";
                        } ?></td>
                   </tr>
               </table>
           </center>
       </body>
       </html>
    <?php } else{        
        header("location:client_side.php?error_message="."$error_messages");die;
    }
}
 ?>