<?php 
  require_once('require/connection.php');
  $COOKIE=unserialize($_COOKIE['user']);
if(!isset($COOKIE['user_id'])){
    header('location:index.php?message=Login first&color=red');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="MyStyles.css">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
    
    <style>
      #search{
        display: none;
      }
      .user_img{
        border-radius: 50%;
        height: 50px;
        width: 70px;
      }
      .bt{
        padding-left:68px ;
        padding-right:68px ;
      }
      .bi{
        padding-left:67px;padding-right:67px;
      }
      .bc{
        padding-left:38px;padding-right:38px;
      }
      .bs{
        padding-left:54px;padding-right:54px;
      }
      .bd{
        padding-left:70px;padding-right:70px;
      }
      .common{
        overflow-y: auto; max-height:450px;clear:both ;width:1020px
      }
    </style>
</head>
<body onload="Inbox();">
    <div class="row" style="background-color: #dce2c0; ">
        <div class="col">
            <img src="logo.png" alt="logo" width="70">
        </div>
        <div  class="col-8">
                <h1 style="display: inline;margin-right:200px;line-height:65px">Email System</h1>
               <img src="<?= $COOKIE['imgpath']?>" alt="logo" class="user_img">
                <h1 style="display: inline; "><?= $COOKIE['user_name']?></h1>
        </div>
        <div  class="col-3">
                <button class="button-success py-2 text-white px-4" style="float: right;margin:17px 10px 0px 0px" onclick="logout()">Logout</button>
        </div>
    </div>
    <div class="row" >
        <div class="col-2" >
        <button class="button-success py-2 bc d-block m2"  onclick="getForm()">Compose Mail</button>
        <button class="button-success py-2 bi d-block  m2" onclick="Inbox()"> Inbox </button>
        <button class="button-success py-2 bs px-5  d-block m2"  onclick="checksentMails()">Sent mail</button>
        <button class="button-success py-2 bd bt px-5  d-block m2"  onclick="checkdraftMails()">Draft</button>
        <button class="button-success bt py-2   d-block m2" onclick="checktrashMails()">Trash</button>
        </div>
        <div class="col-10">
        <div id="msg"  style="display: block;clear:both;"></div>
        <div id="card"></div>
        <div id="search" >
        </div>
        <div id="inbox"  class="common"></div>
        <div id="checkSent"  class="common"></div>
        <div id="checkDraft" class="common" ></div>
        <div id="checkTrash" class="common" ></div>
        </div>
    </div>
   
 <script>
     var interval;
   function Inbox(){
          var ajax_request = null;
      if(window.XMLHttpRequest){
        ajax_request = new XMLHttpRequest;
      }
      else{
        ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState == 4 && ajax_request.status == 200){
          // console.log(this.responseText);
          document.getElementById('inbox').innerHTML=this.responseText;
          document.getElementById('card').innerHTML='';
          document.getElementById('checkSent').innerHTML='';
          document.getElementById('checkTrash').innerHTML='';
          document.getElementById('checkDraft').innerHTML='';
          
        }
      }
      ajax_request.open("GET","ajax_processing.php?action=inbox");
      ajax_request.send();
          
   }
   function checksentMails(){
          var ajax_request = null;
      if(window.XMLHttpRequest){
        ajax_request = new XMLHttpRequest;
      }
      else{
        ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState == 4 && ajax_request.status == 200){
          // console.log(this.responseText);
          document.getElementById('checkSent').innerHTML=this.responseText;
          document.getElementById('card').innerHTML='';
          document.getElementById('inbox').innerHTML='';
          document.getElementById('checkTrash').innerHTML='';
          document.getElementById('checkDraft').innerHTML='';
        }
      }
      ajax_request.open("GET","ajax_processing.php?action=sent");
      ajax_request.send();
          
   }
   function checkdraftMails(){
          var ajax_request = null;
      if(window.XMLHttpRequest){
        ajax_request = new XMLHttpRequest;
      }
      else{
        ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState == 4 && ajax_request.status == 200){
          // console.log(this.responseText);
          document.getElementById('checkDraft').innerHTML=this.responseText;
          document.getElementById('card').innerHTML='';
          document.getElementById('inbox').innerHTML='';
          document.getElementById('checkTrash').innerHTML='';
          document.getElementById('checkSent').innerHTML='';
        }
      }
      ajax_request.open("GET","ajax_processing.php?action=draft");
      ajax_request.send();
          
   }
   function checktrashMails(){
          var ajax_request = null;
      if(window.XMLHttpRequest){
        ajax_request = new XMLHttpRequest;
      }
      else{
        ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState == 4 && ajax_request.status == 200){
          // console.log(this.responseText);
          document.getElementById('checkTrash').innerHTML=this.responseText;
          document.getElementById('card').innerHTML='';
          document.getElementById('inbox').innerHTML='';
          document.getElementById('checkDraft').innerHTML='';
          document.getElementById('checkSent').innerHTML='';
        }
      }
      ajax_request.open("GET","ajax_processing.php?action=trash");
      ajax_request.send();
          
   }
   function cancelEmail(){
    var email =document.getElementById('email').value;
     var text_area =document.getElementById('text_area').value;
     if(!(text_area=='')){
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
              document.getElementById('email').value="";
              document.getElementById('text_area').value="";
            // showUsers();
            clearInterval(interval)
              interval=setInterval(function(){
                document.getElementById('msg').innerHTML='';
            },6000)
        }
      }
      ajax_request.open("POST","ajax_processing.php");
      ajax_request.setRequestHeader("content-type","application/x-www-form-urlencoded");
      ajax_request.send("action=send_draft&email="+email+"&text_area="+text_area);

     }
       
   }
   function sendEmail(){
     var email =document.getElementById('email').value;
     var text_area =document.getElementById('text_area').value;
     if(!(text_area=='')){
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
              document.getElementById('email').value="";
              document.getElementById('text_area').value="";
            // showUsers();
            clearInterval(interval)
              interval=setInterval(function(){
                document.getElementById('msg').innerHTML='';
            },6000)
        }
      }
      ajax_request.open("POST","ajax_processing.php");
      ajax_request.setRequestHeader("content-type","application/x-www-form-urlencoded");
      ajax_request.send("action=send_email&email="+email+"&text_area="+text_area);

     }
   }
   function dltEmail(status,$email_id){
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
              Inbox();
              checkdraftMails();
              checksentMails();
              checktrashMails();
          clearInterval(interval)
             interval=setInterval(function(){
                document.getElementById('msg').innerHTML='';
            },8000)
        }
      }
      ajax_request.open("GET","ajax_processing.php?action=delete_email&email_id="+$email_id+"&status="+status);
      ajax_request.send();
          
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
          document.getElementById('inbox').innerHTML='';
          document.getElementById('checkTrash').innerHTML='';
          document.getElementById('checkDraft').innerHTML='';
          document.getElementById('checkSent').innerHTML='';
        //   showUsers();
        
        }
      }
      ajax_request.open("GET","ajax_processing.php?action=get_form");
      ajax_request.send();
          
   }
   function logout(){
    window.location.href='logout.php';
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
          console.log(this.responseText)
          if(!this.responseText){
            document.getElementById('send_email_btn').disabled=true;
            document.getElementById('Cancel').disabled=true;
           var tag= document.getElementById('r_email');
            tag.innerHTML='Invalid email=>(Not in Database)';
            tag.style.color='red'
            
          }else{
            document.getElementById('send_email_btn').disabled=false;
            document.getElementById('Cancel').disabled=false;
           var tag= document.getElementById('r_email');
            tag.innerHTML='';
          }
        }
      }
     
      ajax_request.open("GET","ajax_processing.php?action=check_email&email="+value,true);
      ajax_request.send();
     }
   }
 </script>
</body>
</html>