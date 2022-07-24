<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
</head>
<body>
    <script>
document.write("MARKSHEET in Switch and If <br>") 

var computer = 46;
var Networking = 68;
var Software = 40;
var Hardware = 80;
var os = 69;

var Obtain_Marks = Networking+computer+Software+Hardware+os;
var total = 500;
var percentage = Obtain_Marks/total*100;

document.write("<br>Total Marks = "+total) 
document.write("<br>Obtain Marks = "+Obtain_Marks) 
document.write("<br>Percentage = "+percentage+"<br>") 
// switch conditions
switch(true){
                case computer<40 || Networking<40 || Software<40||Hardware<40||os<40 :
                    document.write('You are Fail <br>') 
                break;
   
                case (percentage >= 40 && percentage <= 49): 
                    document.write( "your Grade is = D <br>")
                break;
                case (percentage >= 50 && percentage <= 59):
                    document.write( "your Grade is = C <br>")
                break;
                case (percentage >= 60 && percentage <= 69):
                    document.write( "your Grade is = B <br>")
                break;
                case (percentage >= 70 && percentage <= 79):
                    document.write( "your Grade is = A <br>")
                break;
                case (percentage >= 80 && percentage <= 99):
                    document.write("your Grade is = A+ <br>")

                break;
    default:
         document.write("invalid credentials <br>")
    break;
    
}
// if conditions
if (computer<40 || Networking<40 || Software<40||Hardware<40||os<40) {
    document.write('You are Fail <br>') 
} else if(percentage >= 40 && percentage <= 49){
    document.write( "your Grade is = D <br>")
} else if(percentage >= 50 && percentage <= 59){
    document.write( "your Grade is = C <br>")
} else if(percentage >= 60 && percentage <= 69){
    document.write( "your Grade is = B <br>")
} else if(percentage >= 70 && percentage <= 79){
    document.write( "your Grade is = A <br>")
} else if(percentage >= 80 && percentage <= 99){
    document.write( "your Grade is = A+ <br>")
}else{
    document.write("invalid credentials <br>")
}
    </script>
</body>
</html>