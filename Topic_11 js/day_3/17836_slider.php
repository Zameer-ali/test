<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slider</title>
    <style>
        .btn{
            width: 95px!important;
            background-color: blue;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 20px;
            width: 148px!important;
            margin: 10px 10px;
        
        }
        .btn:hover{
            
            background-color: gray;
            color: white;
        }


    </style>
</head>
<body>
    <div onmouseover="stop_timer()" onmouseout="start_timer()">
        <img src="" alt="Slider" width="100%" height="550" id="image">
    </div>
    <div align=center >
            <button id="" onclick="Previous()" class="btn ">Previous</button>
            <button id="start" onclick="start_timer()" class="btn">start</button>
            <button id="stop" onclick="stop_timer()" class="btn ">stop</button>
            <button id="" onclick="Next()" class="btn ">Next</button>
    </div>
</body>
<script>
    images=[
        'https://mobirise.com/bootstrap-carousel/assets2/images/mitchel-lensink-205264-2000x1333.jpg','https://phlow.github.io/feeling-responsive/images/gallery-example-5.jpg',
        'http://trailfun.com/wp-content/uploads/2014/12/mountains-1.jpg',
        'https://wallpapercave.com/wp/wp2554624.jpg',
        'https://wallpapercave.com/wp/wp6094014.jpg'
    ]
    counter=0;
    
    document.getElementById('image').src=images[0]
        var timerId;
        var flag=true;
    
    function start_timer(){
            timerId= setInterval(function(){
                 if (counter<images.length-1) {
                     document.getElementById('image').src=images[++counter]
                     
                    }else{
                        counter=0
                        document.getElementById('image').src=images[counter]
                 }
     
             },1000)
             document.getElementById("start").disabled=true
             flag=false
    }
    function Next(){
        if (counter<images.length-1) {
                     document.getElementById('image').src=images[++counter]  
                    }else{
                        counter=0
                        document.getElementById('image').src=images[counter]  
                 }
    }
    function Previous(){
        if (counter!=0) {
                     document.getElementById('image').src=images[--counter]
                 }else{
                     counter=images.length-1
                     document.getElementById('image').src=images[--counter]
                 }
    }
    function stop_timer(){
        clearInterval(timerId)
        document.getElementById("start").disabled=false
    }
    
</script>
</html>