
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        div{
            width: 50%;
            padding: 10% 0%;
            margin:10%;
            box-shadow: 0px 0px 10px 1px gray;
            background-color: lightblue;
            
        }
    </style>
</head>
<body>
    <center>
        <div>
            <script>
                var number_1=prompt('enter a number')
                var number_2=prompt('enter a number')
                var Operator=prompt("Enter Operator")
                document.write("Calculator<br>")
                number_1=Number(number_1)
                number_2=Number(number_2)
                if(Operator=="+"){
                document.write("Addition of "+number_1+"+"+number_2+"="+(number_1+number_2))
                }
                else if(Operator=="-"){
                    document.write("Subtraction of "+number_1+"-"+number_2+"="+(number_1-number_2))
                }
                else if(Operator=="/"){
                    document.write("Divion of "+number_1+"/"+number_2+"="+(number_1/number_2))
                }
                else if(Operator=="*"){
                    document.write("Multiplication of "+number_1+"*"+number_2+"="+(number_1*number_2))
                }
                else if(Operator=="%"){
                    document.write("Modolus of "+number_1+"%"+number_2+"="+(number_1%number_2))
                }
            else{
                document.write("Please Enter correct credentials")
                }
            
            </script>

        </div>
    </center>
</body>
</html>