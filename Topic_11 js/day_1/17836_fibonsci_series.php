<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fibonsci Series</title>
</head>
<body>
    <script>
        document.write('Fibonsci Series<br>')
        var a=0,b=1,c,i;
        for(i=0;i<20;i++){
            document.write(a+",");
            c=a+b;
            a=b;
            b=c;
        }
    </script>
</body>
</html>