<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client side form validation</title>
    <style>
         body{
            font-size: 20px;
            background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSo1QJ-2URJylPZf4ovdd1gVjSeGBL9OF76CPXdugKaQxe-FBv4gYashScQE_9Ibyj9PxI&usqp=CAU) no-repeat;
            background-size: cover;
        }
        span{
            color:red;
        }
        ul li{
            color:red
        }
        form{
            width: 50%;
            margin:auto;
            padding: 30px;
            background-color:whitesmoke;
            /* color: white; */
        }
        .input_control{
            width: 300px;
            font-size: 18px;
        }
        legend{
            font-weight: bolder;
            font-size: 20px;
        }
        input[type=submit]{
            background-color: blue;
            font-size: 20px;
            color: white;
            padding: 3px 10px;
            cursor: pointer;
        }
        a{
            text-decoration: none;
            color: blue;
        }
        a:hover{
            color: red;
        }
    </style>
</head>
<body>
    
        <form action="process.php" method="POST" onsubmit="return form_function()" >
            <fieldset >
                <legend>Registration Form</legend>
                <table cellspacing=8  >
                    <tr>
                        <td colspan="3" align="center">
                        <b>Note:</b>Required Feilds Are Marked With <span>*</span>
                    </td></tr>
                    <?php
                        if (isset($_REQUEST['error_message'])) {?>
                            <tr>
                                <td colspan=3>
                                    <ul>
                                        <?= $_REQUEST['error_message'] ?>
                                    </ul>
                                </td>
                            </tr>
                      <?php  } ?>
                    <tr>
                        <td>Name: <span>*</span></td>
                        <td><input type="text" name="first_name" id="first_name" class="input_control" ></td>
                        <td><span id="first_name_msg"></span></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><input type="text" name="last_name" id="last_name" class="input_control"></td>
                        <td><span id="last_name_msg"></span></td>
                    </tr>
                    <tr>
                        <td>Email:<span>*</span></td>
                        <td><input type="text" name="email" id="email" class="input_control"></td>
                        <td><span id="email_msg"></span></td>
                    </tr>
                    <tr>
                        <td>Password:<span>*</span></td>
                        <td><input type="password" name="password" id="password" class="input_control"></td>
                        <td><span id="password_msg"></span></td>
                    </tr>
                    <tr>
                        <td>Cnic:<span>*</span></td>
                        <td><input type="text" name="cnic" id="cnic" class="input_control"></td>
                        <td><span id="cnic_msg"></span></td>
                    </tr>
                    <tr>
                        <td>Phone No:<span>*</span></td>
                        <td><input type="text" name="phone_no" id="phone_no" class="input_control"></td>
                        <td><span id="phone_no_msg"></span></td>
                    <tr>
                        <td colspan="3"><input type="submit" value="submit" name="submit"></td>
                    </tr>
                    <tr>
                        <td ><a href="index.php">Already
                             Have Account</a></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    
</body>
<script>
    function form_function(){
        var is_validate=true;
        // /////////// get elemts by ids and class
        var first_name=document.getElementById('first_name').value;
        var last_name=document.getElementById('last_name').value;
        var email=document.getElementById('email').value;
        var password=document.getElementById('password').value;
        var phone_no=document.getElementById('phone_no').value;
        var cnic=document.getElementById('cnic').value;
        var address=document.getElementById('address').value;
        var country=document.getElementById('country').value;
        var male=document.getElementById('male').checked;
        var female=document.getElementById('female').checked;

        var alphabet_pattern=/^[a-z]{3,15}$/gi
        var alphabet1_pattern=/^[a-z]{3,15}$/gi
        var email_pattern=/^[\w]{3,15}@[a-z]{5,15}[.](com|org|pk)$/gi
        var phone_no_pattern=/^[+][\d]{5}-[\d]{7}$/gi
        var cnic_pattern=/^[\d]{5}-[\d]{7}-[\d]{1}$/gi

        var password_pattern_small=/[a-z]+/g
        var password_pattern_capital=/[A-Z]+/g
        var password_pattern_digit=/[\d]+/g
        var password_pattern_specl_char=/[\W]+/g
        
        var address_pattern=/[\w\W]{10,100}/gi

        if (first_name=='') {
            is_validate=false;
            document.getElementById('first_name_msg').innerHTML="Please Enter Name";
        }else{
            first_name_msg=document.getElementById('first_name_msg').innerHTML="";
            if (!alphabet_pattern.test(first_name)) {
                is_validate=false
                document.getElementById('first_name_msg').innerHTML="Name format should be 3-15 range";
            }
        }
        if (last_name=='') {
        }else{
            if (!alphabet1_pattern.test(last_name)) {
                is_validate=false
                document.getElementById('last_name_msg').innerHTML="Last Name format should be 3-15 range";
            }else{
                document.getElementById('last_name_msg').innerHTML="";
            }
        }
        if (email=='') {
            is_validate=false;
            email_msg=document.getElementById('email_msg').innerHTML="Please Enter Email";
        }else{
            email_msg=document.getElementById('email_msg').innerHTML="";
            if (!email_pattern.test(email)) {
                is_validate=false
                email_msg=document.getElementById('email_msg').innerHTML="Please enter email format should be abc123@gmail.com";
            }
        }
        if (password=='') {
            is_validate=false;
            document.getElementById('password_msg').innerHTML="Please Enter Password";
        }else{
            document.getElementById('password_msg').innerHTML="";
            if (!(password.length>=8 && password_pattern_small.test(password) && password_pattern_capital.test(password) && password_pattern_digit.test(password) && password_pattern_specl_char.test(password))) {
                is_validate=false
                document.getElementById('password_msg').innerHTML="password should be atleast 8 characters and contain atleast 1 number 1 small alphabet 1 capital alphabet 1 special character";
            }
        }
        if (phone_no=='') {
            is_validate=false;
            document.getElementById('phone_no_msg').innerHTML="Please Enter Phone Number";
        }else{
            document.getElementById('phone_no_msg').innerHTML="";
            if (!phone_no_pattern.test(phone_no)) {
                is_validate=false
                document.getElementById('phone_no_msg').innerHTML="phone no should be like +92303-3456543";
            }
        }
        if (cnic=='') {
            is_validate=false;
            document.getElementById('cnic_msg').innerHTML="Please Enter Cnic";
        }else{
            document.getElementById('cnic_msg').innerHTML="";
            if (!cnic_pattern.test(cnic)) {
                is_validate=false
                document.getElementById('cnic_msg').innerHTML="Cnic should be like 45303-3456543-1";
            }
        }
        if (address=='') {
            is_validate=false;
            document.getElementById('address_msg').innerHTML="Please Enter Address";
        }else{
            document.getElementById('address_msg').innerHTML="";
            if (!address_pattern.test(address)) {
                is_validate=false
                document.getElementById('address_msg').innerHTML="Address should be contain range [10-100]";
            }
        }
        if (country=='') {
            is_validate=false;
            document.getElementById('country_msg').innerHTML="Please Enter country";
        }else{
            document.getElementById('country_msg').innerHTML="";

        }
        if (male=='' && female=='') {
            is_validate=false;
            document.getElementById('gender_msg').innerHTML="Please Select Gender";
        }else{
            document.getElementById('gender_msg').innerHTML="";
        }
        if (is_validate) {
            return true
        }else{
            return false
        }

    }
</script>
</html>