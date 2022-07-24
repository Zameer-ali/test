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
   
<div id="card">
  <h2>Search Form</h2>
  <div>
      <input type="text" id="search_input" name="name" placeholder="Search.."/>
      <button  id="search" onclick="SearchData()">Search</button>
  </div>
  <div id="show_detail"></div>
</div>
 <script>
   function SearchData(){
     var value=document.getElementById('search_input').value
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
          document.getElementById("show_detail").innerHTML = ajax_request.responseText;
        }
      }
     
      ajax_request.open("GET","process.php?action=show_detail&cnic="+value,true);
      ajax_request.send();

     }else{
       console.log('no');
     }
   }
 </script>
</body>
</html>