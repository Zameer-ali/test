<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Even Numbers</title>
</head>
<body>
    <script>
        var number=prompt("Please Enter Even Number");
       number= Number(number)
       var sum=0;
       function addEven(number){
           if (number%2==0) {
               sum+=number;
               number=prompt("Please Enter Even Number0")
               number=Number(number)
               return addEven(number)
           }else{
               document.write("Sum of INput Even Numbers:",sum)
           }
       }
       addEven(number) 
        
    </script>
</body>
</html>