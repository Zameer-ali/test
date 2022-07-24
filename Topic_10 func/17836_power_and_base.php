<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <style>
        input[type=number]{
            background-color: #fafec1;
        }
        input{
           font-size: 20px;
        }
        td{
            font-size: 20px;
            
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Enter Base:</td>
                <td><input type="number" name="base" placeholder="enter Base"></td>
            </tr>
            <tr>
                <td>Enter Power:</td>
                <td><input type="number" name="power" placeholder="enter Power"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="result" name='submit'></td>
            </tr>
            <tr>
                <td></td>
                <td>
                   <?php
    if (isset($_REQUEST['submit'])) {
        $power=$_REQUEST['power'];
        $base=$_REQUEST['base'];
        function test($power,$base,)
        {
            echo "Power is : $power<br>";
            echo "Base is : $base <br>";
            function power($power,$base,$result){
                if($power <2)
                {
                    return "Result:$result<br>";
                }
                return  power($power-1,$base,$base*$result,);	
            }
         return power($power,$base,$base);	

        }
    
        echo test($power,$base);
    }
    ?> 
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>