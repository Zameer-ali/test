<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Numbers</title>
</head>
<body>
    <script>
         document.write("Prime Number series:<br>")
        for(i = 1;i<=100;i++){
            var count = 0;
         for(j=2;j<=i/2;j++){
             if(i%j==0){
                 count++;
                 break;
             }
        }
        if(count==0 && i!= 1) document.write(i+" ")
    }
    </script>
</body>
</html>