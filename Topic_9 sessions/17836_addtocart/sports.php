
    <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Sports</title>
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
            font-size:20px;
            margin-bottom:20px;
        }
        .cart:hover{
            color:red;
        }
        .addtocart{
            text-decoration:none;
            color:black;
            font-size:23px
        }
        .addtocart:hover{
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
            <h1 style="float:left;margin:30px;"><a href="dashboard.php" class="cart" style="font-size:30px">dashboard</a> </h1>
            <button ><a href="logout.php">logout</a></button>
            <h3 style="float:right;margin-top:40px;"><?php echo $_SESSION['name']??'' ?></h3>
            </div>
        </div>
        <div class="row  ">
            
            <div class="col-12 border" style="padding:100px 80px;;font-size:23px">
            <h3 align=center style="color:green"><?php echo $_GET['message']??false;?></h3>
            <table border=1 cellspacing=0 cellpadding=10 width=100% class="text-center" >
                    <tr>
                        <th>#</th>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Cart</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>Ball</td>
                        <td>1</td>
                        <td>100</td>
                        <td><a href="ball.php" class="addtocart " >Add Cart</a></td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Bat</td>
                        <td>1</td>
                        <td>200</td>
                        <td><a href="bat.php" class="addtocart " >Add Cart</a></td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Cap</td>
                        <td>1</td>
                        <td>300</td>
                        <td><a href="cap.php" class="addtocart " >Add Cart</a></td>
                    </tr>
                </table>
            </div>
</div>
        <div class="row bg-dark text-center text-white">
            <div class="col-12" style="padding:30px">
                <h3>Ecomerce Website</h3>
                <a href="cart.php" class="cart">Check Cart</a>
            </div>
        </div>
    </div>
</body>
</html>