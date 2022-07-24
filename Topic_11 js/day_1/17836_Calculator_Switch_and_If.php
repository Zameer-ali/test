
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <script>
        
        var number_1=2
        var Operator='+'
        var number_2=2
        var result=0
        document.write("Calculator in IF<br>")
        
        if(Operator=="+"){
           document.write("Addition "+(number_1+number_2))
        }
        else if(Operator=="-"){
            document.write("Subtraction "+(number_1-number_2))
        }
        else if(Operator=="/"){
            document.write("Divion "+(number_1/number_2))
        }
        else if(Operator=="*"){
            document.write("Multiplication "+(number_1*number_2))
        }
        else if(Operator=="%"){
            document.write("Modolus "+(number_1%number_2))
        }
       else{
           document.write("Please correct credentials")
        }
        document.write("<br>Calculator in Switch<br>")
        switch (Operator) {
            case '+':document.write("Addition "+(number_1+number_2)) 
            break;
            case '*':document.write("Multiplication "+(number_1*number_2))
            break;
            case '/':document.write("Divion "+(number_1/number_2))
            break;
            case '-':document.write("Subtraction "+(number_1-number_2))
            break;
            case '%':document.write("Modolus "+(number_1%number_2))
            break;
            default:document.write("Please correct credentials")
            break;
        }
    
    </script>
</body>
</html>