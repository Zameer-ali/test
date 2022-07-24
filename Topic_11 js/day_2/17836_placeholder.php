<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlaceHolder assignment</title>
  
</head>
<body>
    <input type="text"  id="name"><br>
    <input type="password"  id="password" ><br>
</body>
<script>
    
function run(){
    var name=document.getElementById('name').placeholder="Enter Name";
    var pass=document.getElementById('password').placeholder="Enter Password";
}
run()
</script>
</html>