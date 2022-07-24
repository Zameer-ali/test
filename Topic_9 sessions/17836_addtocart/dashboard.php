
    <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>dashboard</title>
    <style>
        button{
            padding:10px;float:right;margin:30px;
        }
        button a{
            text-decoration:none;
            color:black;
            font-size:20px
        }
        .cart{
            text-decoration:none;
            color:white;
            font-size:20px
        }
        .cart:hover{
            color:red;
        }
    </style>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['email'])){

    } else{
        header('location:index.php?message=login first');
    }
        ?>
    
    <div class="container">
        <div class="row border  bg-dark text-white">
            <div class="col-12">
            <h1 style="float:left;margin:30px;">dashboard</h1>
            <button ><a href="logout.php">logout</a></button>
            <h3 style="float:right;margin-top:40px;"><?php echo $_SESSION['name']??'' ?></h3>
            </div>
        </div>
        <div class="row  ">
            <div class="col-3   border">
                <h1 style="margin-left:20px">Categories</h1>
                <ul>
                    <li><a href="sports.php">Sports</a></li>
                    <li><a href="laptops.php">Laptops</a></li>
                    <li><a href="clothes.php">Clothes</a></li>
                    
                    
                </ul>
               
            </div>
            <div class="col-9 border">
                <img src="https://thumbs.dreamstime.com/b/modern-shopping-mall-interior-shopping-mall-guangzhou-china-fashion-boutique-stores-shops-center-hall-57157810.jpg" style="width:100%;height:100%;" alt="">
            </div>
</div>
        <div class="row bg-dark text-center text-white">
            <div class="col-12">
                <h3>Ecomerce Website</h3>
            </div>
        </div>
    </div>
</body>
</html>