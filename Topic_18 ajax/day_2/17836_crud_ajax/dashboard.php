<?php 
  require_once('require/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="MyStyles.css">
    <title>Dashboard</title>
</head>
<body onload="   getForm();">
    <div class="row" style="background-color: #dce2c0; ">
        <div class="col-1">
            <img src="logo.png" alt="logo" width="100">
        </div>
        <div  class="col-8">
                <h1 style="display: inline;margin-right:300px;line-height:80px">Dashboard</h1>
                <h1 style="display: inline">User Crud Application</h1>
        </div>
        <div  class="col-3">
                <button class="btn success text-white px-4" style="float: right;margin:20px 10px 0px 0px">Logout</button>
        </div>
    </div>
    <div class="row" >
        <div class="col-3" >
        <button class="button-success py-2 px-4  d-block m2" onclick="getForm()">Add User</button>
        <button class="button-success py-2 px-3 d-block  m2" onclick="showUsers()"> Show Users </button>
        <button class="button-success py-2 px-3  d-block m2" onclick="showUsers()">Search User</button>
        </div>
        <div class="col-9">
        <div id="card"></div>
        <div id="msg" align=center style="display: block;clear:both;"></div>
        <div id="search" >

        <input type="search" id="search_input" name="search" placeholder="Search Here.."  />
        <input type="submit" class="button" id="search_btn" name="search_btn" value="Search" onclick="search()"/>

        </div>
        <div id="show_users" class=" " ></div>
        </div>
    </div>
   
 <script>
     var interval;
   function showUsers(){
          var ajax_request = null;
      if(window.XMLHttpRequest){
        ajax_request = new XMLHttpRequest;
      }
      else{
        ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState == 4 && ajax_request.status == 200){
          document.getElementById('show_users').innerHTML=this.responseText;
          document.getElementById('card').innerHTML='';
          document.getElementById('search').style.display='block';
          
        }
      }
      ajax_request.open("GET","ajax_processing.php?action=show_users");
      ajax_request.send();
          
   }

   function cancel(){
       document.getElementById('name').value='';
       document.getElementById('email').value='';
       document.getElementById('cnic').value='';
       document.getElementById('phone').value='';
       
   }
   function addUser(){
     var name =document.getElementById('name').value;
     var email =document.getElementById('email').value;
     var cnic =document.getElementById('cnic').value;
     var phone =document.getElementById('phone').value;
     if(!(name=='' && email=='' && cnic=='' && phone=='')){
          var ajax_request = null;
      if(window.XMLHttpRequest){
        ajax_request = new XMLHttpRequest;
      }
      else{
        ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState == 4 && ajax_request.status == 200){
            document.getElementById('msg').innerHTML=this.responseText;
            showUsers();
            clearInterval(interval)
              interval=setInterval(function(){
                document.getElementById('msg').innerHTML='';
            },8000)
        }
      }
      ajax_request.open("POST","ajax_processing.php");
      ajax_request.setRequestHeader("content-type","application/x-www-form-urlencoded");
      ajax_request.send("action=add_user&name="+name+"&email="+email+"&cnic="+cnic+"&phone="+phone);

     }
   }
   function deleteUser(user_id){
          var ajax_request = null;
      if(window.XMLHttpRequest){
        ajax_request = new XMLHttpRequest;
      }
      else{
        ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState == 4 && ajax_request.status == 200){
          document.getElementById('msg').innerHTML=this.responseText;
          showUsers();
          clearInterval(interval)
             interval=setInterval(function(){
                document.getElementById('msg').innerHTML='';
            },8000)
        }
      }
      ajax_request.open("GET","ajax_processing.php?action=delete_user&user_id="+user_id);
      ajax_request.send();
          
   }
   function editUser(user_id){
          var ajax_request = null;
      if(window.XMLHttpRequest){
        ajax_request = new XMLHttpRequest;
      }
      else{
        ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState == 4 && ajax_request.status == 200){
          document.getElementById('card').innerHTML=this.responseText;
        }
      }
      ajax_request.open("GET","ajax_processing.php?action=edit_user&user_id="+user_id);
      ajax_request.send();
          
   }
   function updateUser(user_id){
    var name =document.getElementById('name').value;
     var email =document.getElementById('email').value;
     var cnic =document.getElementById('cnic').value;
     var phone =document.getElementById('phone').value;
          var ajax_request = null;
      if(window.XMLHttpRequest){
        ajax_request = new XMLHttpRequest;
      }
      else{
        ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState == 4 && ajax_request.status == 200){
          document.getElementById('msg').innerHTML=this.responseText;
        showUsers()
                    clearInterval(interval)
                     interval=setInterval(function(){
                document.getElementById('msg').innerHTML='';
            },8000)
        }
      }
      ajax_request.open("POST","ajax_processing.php");
      ajax_request.setRequestHeader("content-type","application/x-www-form-urlencoded");
      ajax_request.send("action=update_user&user_id="+user_id+"&name="+name+"&email="+email+"&cnic="+cnic+"&phone="+phone);
          
   }
   function getForm(){
          var ajax_request = null;
      if(window.XMLHttpRequest){
        ajax_request = new XMLHttpRequest;
      }
      else{
        ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState == 4 && ajax_request.status == 200){
          document.getElementById('card').innerHTML=this.responseText;
          document.getElementById('show_users').innerHTML='';
          document.getElementById('search').style.display='none';
        //   showUsers();
        
        }
      }
      ajax_request.open("GET","ajax_processing.php?action=get_form");
      ajax_request.send();
          
   }
   function search(){
      var search=document.getElementById('search_input').value;
        var ajax_request = null;
        if(window.XMLHttpRequest){
            ajax_request = new XMLHttpRequest;
        }
        else{
            ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
        }
        ajax_request.onreadystatechange = function(){
            if(ajax_request.readyState == 4 && ajax_request.status == 200){
            document.getElementById('show_users').innerHTML=this.responseText;
            }
        }
        ajax_request.open("GET","ajax_processing.php?action=show_users&search="+search);
        ajax_request.send();
   }
 </script>
</body>
</html>