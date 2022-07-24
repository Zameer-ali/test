<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:index.php?message=Login first&color=red');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashbaord.css">
</head>
<body>


<div id="container">
  <aside>
    <header>
      <input type="text" placeholder="search">
    </header>
    <ul id="users">
      
    </ul>
  </aside>
  <main>
    <header>
      <img src="<?=$_SESSION['user']['imgpath']?>" class="user_img" alt="">
      <div>
        <h2><?=$_SESSION['user']['user_name']?></h2>
      </div>
      
      <a href="logout.php"><img src="https://cdn-icons-png.flaticon.com/512/1053/1053210.png" class="logout_img" alt=""></a>
    </header>
    <ul id="chat"></ul>
    <footer>
      <textarea placeholder="Type your message" id="send_msg"></textarea>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_picture.png" alt="">
      <!-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_file.png" alt=""> -->
      <a href="javascript:void(0)" onclick="sendMsg()">Send</a>
    </footer>
  </main>
</div>
<script>
    showMsg();
    showUsers();
    setInterval(showUsers,1000);
    setInterval(showMsg,1000);
    function showMsg(){
        var ajax_request = null;
      if(window.XMLHttpRequest){
        ajax_request = new XMLHttpRequest;
      }
      else{
        ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState == 4 && ajax_request.status == 200){
          document.getElementById('chat').innerHTML=this.responseText;
        }
      }
      ajax_request.open("GET","process.php?action=show_msg");
      ajax_request.send();
    }
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
          document.getElementById('users').innerHTML=this.responseText;
        }
      }
      ajax_request.open("GET","process.php?action=show_users");
      ajax_request.send();
    }
    function sendMsg(){
      var msg =document.getElementById('send_msg').value;
     
     if(!(msg=='')){
          var ajax_request = null;
      if(window.XMLHttpRequest){
        ajax_request = new XMLHttpRequest;
      }
      else{
        ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState == 4 && ajax_request.status == 200){
            document.getElementById('send_msg').value='';
            showMsg();
        }
      }
      ajax_request.open("POST","process.php");
      ajax_request.setRequestHeader("content-type","application/x-www-form-urlencoded");
      ajax_request.send("action=send_msg&msg="+msg);

     }
    }
    function deleteMsg(msg_id){
        var ajax_request = null;
      if(window.XMLHttpRequest){
        ajax_request = new XMLHttpRequest;
      }
      else{
        ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState == 4 && ajax_request.status == 200){
            showMsg();
        }
      }
      ajax_request.open("GET","process.php?action=delete_msg&msg_id="+msg_id);
      ajax_request.send();
    }
</script>
</body>
</html>