<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light Box</title>
    <style>
        *{
            box-sizing:border-box;
            margin: 0px;
            padding: 0px;
        }
        .row{
            display: flex;
            clear: both;
            padding: 5px;

        }
        
        .col-2{
            width: 20%;
            margin: 5px;
        }
        .col-2 > img{
        height: 200px;
        cursor: pointer;
        /* box-shadow: 0px 0px 0px 3px gray; */
        }
        
        .lightBox{
            display: none;
        }
        .lightBox > img{
            width: 100%;
            height: 640px;
            position: relative;
        }
        .lightBox > button{
            margin: 2px;
            width: 40px;
            height: 30px;
            position: absolute;
            z-index: 1;
            background-color: white;
            color:red;
            font-weight: bold;
            cursor: pointer;
        }
        .body_section>h1{
            color: blue;
            letter-spacing: 3px;
        }
    </style>
</head>
<body>
    <div class="body_section">
        <h1 align=center>Light Box</h1>
        <div class="row">
            <div class="col-2">
                <img src="https://images.unsplash.com/photo-1553095066-5014bc7b7f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8bGlnaHRpbmd8ZW58MHx8MHx8&w=1000&q=80" width="100%" alt="Image" onclick="click_image(this)">
            </div>
            <div class="col-2">
            <img src="https://media.istockphoto.com/photos/string-light-bulbs-at-sunset-picture-id1300384615?b=1&k=20&m=1300384615&s=170667a&w=0&h=rkDm5TdJp_dU7VAknk4EuZEZ2ho2QQspOavjlwGrsuI=" width="100%" alt="Image" onclick="click_image(this)">
            </div>
            <div class="col-2">
            <img src="https://cdn.pixabay.com/photo/2018/07/13/10/32/light-bulb-3535435__340.jpg" width="100%" alt="Image" onclick="click_image(this)">
            </div>
            <div class="col-2">
            <img src="https://c4.wallpaperflare.com/wallpaper/90/74/415/light-4k-download-for-pc-hd-wallpaper-preview.jpg" width="100%" alt="Image" onclick="click_image(this)">
            </div>
            <div class="col-2">
            <img src="https://uhdwallpapers.org/uploads/cache/871929298/warm-light-bulb_600x338-mm-90.jpg" width="100%" alt="Image" onclick="click_image(this)">
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <img src="https://images.pexels.com/photos/1737780/pexels-photo-1737780.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="100%" alt="Image" onclick="click_image(this)">
            </div>
            <div class="col-2">
            <img src="https://hdwallsource.com/img/2021/3/light-bulbs-background-wallpaper-73705-76372-hd-wallpapers.jpg" width="100%" alt="Image" onclick="click_image(this)">
            </div>
            <div class="col-2">
            <img src="http://wallpapers.net/web/wallpapers/light-bulbs-hd-wallpaper/thumbnail/lg.jpg" width="100%" alt="Image" onclick="click_image(this)">
            </div>
            <div class="col-2">
            <img src="https://wallpaperaccess.com/full/1891861.jpg" width="100%" alt="Image" onclick="click_image(this)">
            </div>
            <div class="col-2">
            <img src="https://hdwallsource.com/img/2021/3/light-bulbs-background-wallpaper-73705-76372-hd-wallpapers.jpg" width="100%" alt="Image" onclick="click_image(this)">
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <img src="https://images.unsplash.com/photo-1552862750-746b8f6f7f25?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8bGlnaHQlMjBidWxifGVufDB8fDB8fA%3D%3D&w=1000&q=80" width="100%" alt="Image" onclick="click_image(this)">
            </div>
            <div class="col-2">
            <img src="https://images.pexels.com/photos/1124960/pexels-photo-1124960.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="100%" alt="Image" onclick="click_image(this)">
            </div>
            <div class="col-2">
            <img src="https://images.pexels.com/photos/255464/pexels-photo-255464.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="100%" alt="Image" onclick="click_image(this)">
            </div>
            <div class="col-2">
                <img src="https://images.unsplash.com/photo-1553095066-5014bc7b7f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8bGlnaHRpbmd8ZW58MHx8MHx8&w=1000&q=80" width="100%" alt="Image" onclick="click_image(this)">
            </div>
            <div class="col-2">
            <img src="https://media.istockphoto.com/photos/string-light-bulbs-at-sunset-picture-id1300384615?b=1&k=20&m=1300384615&s=170667a&w=0&h=rkDm5TdJp_dU7VAknk4EuZEZ2ho2QQspOavjlwGrsuI=" width="100%" alt="Image" onclick="click_image(this)">
            </div>
        </div>
    </div>
    <div class="lightBox">
        <button onclick="close_lightBox()">X</button>
        <img src="https://images.pexels.com/photos/255464/pexels-photo-255464.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="lightBox Image">
    </div>
</body>
<script>
    function click_image(object){
        console.log(object.src)
        document.querySelector('.body_section').style.display="none"
        document.querySelector('.lightBox > img').src=object.src;
        document.querySelector('.lightBox').style.display="block"
    }
    function close_lightBox(){
        document.querySelector('.lightBox').style.display="none"
        document.querySelector('.body_section').style.display="block"
    }
</script>
</html>