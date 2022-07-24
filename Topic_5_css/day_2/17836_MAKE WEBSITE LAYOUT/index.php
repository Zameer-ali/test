<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>MAKE WEBSITE LAYOUT</title>
</head>
<body>
    <div class="container">
        <div class="row bg-red text-white" >
            <div class="col-12">
                <h1>Site name</h1>
            </div>
        </div>
        <div class="row bg-blue text-white" >
            <div class="col-12">
                <ul class="menu">
                    <li>link</li>
                    <li>link</li>
                    <li>link</li>
                    <li>link</li>
                    <li>link</li>
                    <li>link</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <h1>Heading</h1>
                <P>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium vel qui animi numquam, et consequatur dignissimos debitis ducimus aspernatur voluptatibus, inventore neque consectetur tempora error. Accusamus nam numquam esse.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium vel qui animi numquam, et consequatur dignissimos debitis ducimus aspernatur voluptatibus, inventore neque consectetur tempora error. Accusamus nam numquam esse.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium vel qui animi numquam, et consequatur dignissimos debitis ducimus aspernatur voluptatibus, inventore neque consectetur tempora error. Accusamus nam numquam esse.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium vel qui animi numquam, et consequatur dignissimos debitis ducimus aspernatur voluptatibus, inventore neque consectetur tempora error. Accusamus nam numquam esse.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium vel qui animi numquam, et consequatur dignissimos debitis ducimus aspernatur voluptatibus, inventore neque consectetur tempora error. Accusamus nam numquam esse.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium vel qui animi numquam, et consequatur dignissimos debitis ducimus aspernatur voluptatibus, inventore neque consectetur tempora error. Accusamus nam numquam esse.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium vel qui animi numquam, et consequatur dignissimos debitis ducimus aspernatur voluptatibus, inventore neque consectetur tempora error. Accusamus nam numquam esse.

                </P>
                <P>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium vel qui animi numquam, et consequatur dignissimos debitis ducimus aspernatur voluptatibus, inventore neque consectetur tempora error. Accusamus nam numquam esse.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium vel qui animi numquam, et consequatur dignissimos debitis ducimus aspernatur voluptatibus, inventore neque consectetur tempora error. Accusamus nam numquam esse.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium vel qui animi numquam, et consequatur dignissimos debitis ducimus aspernatur voluptatibus, inventore neque consectetur tempora error. Accusamus nam numquam esse.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium vel qui animi numquam, et consequatur dignissimos debitis ducimus aspernatur voluptatibus, inventore neque consectetur tempora error. Accusamus nam numquam esse.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium vel qui animi numquam, et consequatur dignissimos debitis ducimus aspernatur voluptatibus, inventore neque consectetur tempora error. Accusamus nam numquam esse.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium vel qui animi numquam, et consequatur dignissimos debitis ducimus aspernatur voluptatibus, inventore neque consectetur tempora error. Accusamus nam numquam esse.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium vel qui animi numquam, et consequatur dignissimos debitis ducimus aspernatur voluptatibus, inventore neque consectetur tempora error. Accusamus nam numquam esse.

                </P>
            </div>
            <div class="col-3 border" style="max-height:350px;margin-top:15px">
                <h1>Block Header</h1>
                <ul>
                    <?php for($i=1;$i<=10;$i++){?>
                        <li>item <?php echo $i; ?></li>
                   <?php } ?>
                </ul>
            </div>
        </div>
        <div class="row bg-gray text-white " >
            <div class="col-12">
                <h4 style="letter-spacing:2px;padding-left:5px">Copyright somerandomsite</h4>
            </div>
        </div>
    </div>
</body>
</html>