<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stop Watch</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body{
    background-color: black!important;
  }
input[type=text]{
    background-color: lightblue;
    font-size: 24px;
    font-weight: bold;
    padding: 15px 0px;
    margin-top: 15px;
    text-align: center;
    letter-spacing: 0px;
}
h2{
    color: white!important;
    font-weight: bolder!important;
    margin: 10px!important;
    font-size: 40px!important;
}
.div{
    background-color: white;
    width: 300px;
    height: 60px;
    margin-left: 39%;
    color: black!important;
    font-weight: bold;
    font-size: 40px;
    
}
.div1{
    background-color: rgb(121, 116, 116);
    width: 300px;
    height: 100px;
    margin-bottom: 5px;
}
.btn{
    width: 95px!important;
    background-color: blue;
    color: white;
    padding: 5px 10px;
    cursor: pointer;
    font-size: 20px;
    width: 148px!important;
}
    </style>
</head>
<body>
    <center>

        <div class="main">
        <h2>Timer</h2>
        
        <div class="div1">
        <input type="text" name="timer" id="timer" value="00.00.00" disabled>
    </div>
        <div >
            <button id="start" onclick="start_1()" class="btn">start</button>
            <button id="stop" onclick="stop_1()" class="btn ">stop</button>
        </div>
        </div>
    </center>
</body>
    <script>

        var hour=Number(prompt("Enter hour"))??"0";
        var min=Number(prompt("Enter minute"))??"0";
        var sec=Number(prompt("Enter second"))??"0";
        var interval;
        var start=document.getElementById("start")
        var stop=document.getElementById("stop")
        
        document.getElementById('timer').value=hour+":"+min+":"+sec
        function timer(){
            sec--;
            document.getElementById('timer').value=hour+":"+min+":"+sec
            if(sec==0){
                if(!(min==0)){
                    min--;
                    sec=60;
                }
            }
            if (min==0) {
                if(!(hour==0)){
                    hour--;
                    min=60;
                }
            }
            if (sec==0 && min==0 && hour==0) {
                clearInterval(interval)
            }
        }
        function start_1(){
            if (!(sec==0 && min==0 && hour==0)) {
                interval=setInterval(timer,1000)
                start.disabled=true
            }
            
        }
        function stop_1(){
            clearInterval(interval)
            start.disabled=false
        }

    </script>
</html>