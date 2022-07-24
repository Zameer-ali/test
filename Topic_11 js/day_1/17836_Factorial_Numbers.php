<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Js Factoria</title>
</head>
<body>
</body>
    <script>
        
    var fact_number=6;
    var get_fact_number=fact_number
    
    for(var i = fact_number; i>1;){
        i--
        fact_number = fact_number * i;  
    }
    document.write("factorial of "+get_fact_number+"! = "+ fact_number)
    
    </script>
</html>