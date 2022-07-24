<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main{
            width: 50%;
            margin: 8% auto;
            padding: 40px;
            padding-left: 35px;
            background-color: white;
            box-shadow: 0px 0px 10px 3px gray;
        }
        #result{
            margin-left: 2px;
            margin-bottom: 5px;
            padding-right: 10px;
            width: 99%;
            background-color: white;
            color:black;
            height: 7%;
            text-align: right;
            font-size: 25px; 
        }
        .btn{
            width: 13.1%;   
            height: 6%;
            margin:5px 2px;
            /* border: 1px solid black; */
            background-color: #d3cfcd;
            font-style: italic;
            font-family:Georgia, 'Times New Roman', Times, serif;
            cursor: pointer;
            /* font-weight: bold; */
            font-size: 20px;
        }
        .btn:hover{
            background-color: lavender;
        }
        .btn_bg{
            background-color:#f0f0f0!important;
        }
        .btn_bg:hover{
            background-color:lavender!important;
        }
        .btn_bg_blue{
            background-color:#478af1!important;
            color: #f0f0f0;
        }

    </style>
</head>
<body>
    <div class="main">
    <div>
        <input type="text"  id="result" disabled>
    </div>
    <div>
        <button class="btn" disabled>Rad</button>
        <button class="btn btn_bg" disabled >....</button>
        <button class="btn" disabled>xl</button>
        <button class="btn" onclick="inputNumber('(')">(</button>
        <button class="btn" onclick="inputNumber(')')">)</button>
        <button class="btn" onclick="inputNumber('%')">%</button>
        <button class="btn" onclick="clearBtn()">AC</button>
    </div>
    <div>
        <button class="btn" disabled>Inv</button>
        <button class="btn" onclick="b_function('sin')">sin</button>
        <button class="btn" disabled>ln</button>
        <button class="btn btn_bg" onclick="inputNumber('7')">7</button>
        <button class="btn btn_bg" onclick="inputNumber('8')">8</button>
        <button class="btn btn_bg" onclick="inputNumber('9')">9</button>
        <button class="btn" onclick="inputNumber('/')">/</button>
    </div>
    <div>
        <button class="btn" disabled>π</button>
        <button class="btn" onclick="b_function('cos')">cos</button>
        <button class="btn" onclick="b_function('log')">log</button>
        <button class="btn btn_bg" onclick="inputNumber('4')">4</button>
        <button class="btn btn_bg" onclick="inputNumber('5')">5</button>
        <button class="btn btn_bg" onclick="inputNumber('6')">6</button>
        <button class="btn" onclick="inputNumber('*')">x</button>
    </div >
    <div>
        <button class="btn" disabled>e</button>
        <button class="btn" onclick="b_function('tan')">tan</button>
        <button class="btn" onclick="b_function('sqrt')">√</button>
        <button class="btn btn_bg" onclick="inputNumber('1')">1</button>
        <button class="btn btn_bg" onclick="inputNumber('2')">2</button>
        <button class="btn btn_bg" onclick="inputNumber('3')">3</button>
        <button class="btn" onclick="inputNumber('-')">-</button>
    </div>
    <div>
        <button class="btn" disabled>Ans</button>
        <button class="btn" disabled>EXP</button>
        <button class="btn" disabled>X<sup>y</sup></button>
        <button class="btn btn_bg" onclick="inputNumber('0')">0</button>
        <button class="btn btn_bg" onclick="inputNumber('.')">.</button>
        <button class="btn btn_bg_blue" onclick="equalBtn()">=</button>
        <button class="btn" onclick="inputNumber('+')">+</button>
    </div>
    </div>
</body>
<script>
    var result=document.getElementById("result");
    function inputNumber(num)
    {
    result.value +=num;
    }
    function clearBtn()
    {
        result.value="";
    }
    function equalBtn()
    {
        if (result.value=="0" || result.value=='')
        {
            result.value="";
        }
        else
        {
            result.value=eval(result.value);
        }
    }
    function b_function(getMethod)
    {
        switch (getMethod) {
            case "rad": result.value=Math.rad(result.value)
                break;
            case "sin": result.value=Math.sin(result.value)
                break;
            case "cos": result.value=Math.cos(result.value)
                break;
            case "log": result.value=Math.log(result.value)
                break;
            case "sqrt": result.value=Math.sqrt(result.value)
                break;
            case "tan": result.value=Math.tan(result.value)
                break;
            default:
                break;
        }
    }
</script>
</html>