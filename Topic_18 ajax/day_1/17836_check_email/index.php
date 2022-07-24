<?php 
  require_once('$connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  <form action="process.php" method="post">
        <div id="card">
          <h2>Registration Form </h2>
          <?php 
            if(isset($_REQUEST['message'])){
              ?>
              <h3 style="color:<?= $_REQUEST['color']?>"><?= $_REQUEST['message']?></h3>
              
              <p style="color:<?= $_REQUEST['color']?>"><?php echo $_REQUEST['error'];?></p>
              <?php
               
            }
          ?>
          <input type="text" id="name" name="name" placeholder="Name.."/>
          <input type="text" id="email" name="email" placeholder="Email.. zameer@gmail.com" onblur="checkEmail()"/>
          <p id='r_email'></p>
          <input type="text" id="cnic" name="cnic" placeholder="Cnic.. 00000-0000000-0" />
          <input type="text" id="phone" name="phone"  placeholder="Phone No.." />
          <?php 
              $result=mysqli_query($connection,"SELECT * FROM countries");
              if($result->num_rows){
            ?>
            <Select name="country" id='country' onchange="getCities()">
              <option >Select Country...</option>
              <?php   
                while($row=mysqli_fetch_assoc($result)){?>
                  <option value="<?= $row['country_id'] ?>"><?= $row['country_name'] ?></option>
               <?php }
              ?>
            </Select>
            <select name="city" id="city">
            <option value="">Select City...</option>

            </select>
              <?php
                }
              ?>


          
          <input type="submit" id="submit" name="sign_up" value="Sign Up"/>
        </div>
        </form>
 <script>
   function getCities(){
     country_id=document.getElementById('country').value;
          var ajax_request = null;
      if(window.XMLHttpRequest){
        ajax_request = new XMLHttpRequest;
      }
      else{
        ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState == 4 && ajax_request.status == 200){
          console.log(this.responseText);
          document.getElementById('city').innerHTML=this.responseText;
        }
      }
      ajax_request.open("GET","process.php?action=city&country_id="+country_id,true);
      ajax_request.send();
          
   }
   function checkEmail(){
     var value=document.getElementById('email').value
     if(!value==''){
          var ajax_request = null;
      if(window.XMLHttpRequest){
        ajax_request = new XMLHttpRequest;
      }
      else{
        ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      
      ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState == 4 && ajax_request.status == 200){
          if(this.responseText){
            document.getElementById('submit').disabled=true;
           var tag= document.getElementById('r_email');
            tag.innerHTML='already register user of this email';
            tag.style.color='red'
            
          }else{
            document.getElementById('submit').disabled=false;
           var tag= document.getElementById('r_email');
            tag.innerHTML='';
          }
        }
      }
     
      ajax_request.open("GET","process.php?action=check_email&email="+value,true);
      ajax_request.send();
     }
   }
 </script>
</body>
</html>