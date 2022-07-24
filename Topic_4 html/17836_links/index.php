<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<h1>Local Links</h1>
    <ul>
        <li><a href="about_us.php">About US</a></li>
        <li><a href="help.php">Help</a></li>
    </ul>
    <h1>Internal Links</h1>
    <ol>
    <li><a href="#list1">List 1</a></li>
    <li><a href="#list2">List 2</a></li>
    <li><a href="#list3">List 3</a></li>
    <li><a href="#list4">List 4</a></li>
    <li><a href="#list5">List 5</a></li>
    <li><a href="#list6">List 6</a></li>
    <li><a href="#list7">List 7</a></li>
    <li><a href="#list8">List 8</a></li>
    <li><a href="#list9">List 9</a></li>
    <li><a href="#list10">List 10</a></li>
    </ol>
    <?php  for($i=1;$i<=10;$i++){ ?>
            <dl id=<?php echo "list".$i;?>>
                <dt>Lorem <?php echo $i;  ?></td>
                <dt>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam quam dignissimos culpa, magnam sequi dolorum necessitatibus error ex nemo est architecto excepturi in voluptas dolores obcaecati iusto eius a voluptatibus.</td>
            </dl>
    <?php }  ?>


    <div>
        <h1>GLobal Links</h1>
        <a href="https://www.facebook.com"><img src="https://png.pngtree.com/png-clipart/20180515/ourmid/pngtree-facebook-logo-facebook-icon-png-image_3566127.png" width="200" /></a>
        <a href="https://www.linkedin.com"><img src="https://thumbs.dreamstime.com/b/linkedin-logo-sign-white-background-linkedin-business-social-networking-service-kharkiv-ukraine-may-linkedin-logo-sign-184260638.jpg" width="200" /></a>
        <a href="https://www.instagram.com"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/800px-Instagram_logo_2016.svg.png" width="200" /></a>
    </div>
</body>
</html>