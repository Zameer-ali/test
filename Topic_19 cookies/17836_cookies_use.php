<?php
    $array=['red','white'];
    setcookie('styles',serialize($array));
    if(isset($_COOKIE['styles'])){
        $newArray=unserialize($_COOKIE['styles']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body style="background-color: <?=$newArray[0]??'' ?>; color:<?= $newArray[1]??'' ?>">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum tempore nulla quis mollitia odio corporis harum, ab enim cumque, amet nostrum. Numquam, iure quod officia ut fugit iusto aperiam id?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor quis illo aut quae minima accusantium est fugiat saepe fuga sunt, qui repudiandae! Possimus praesentium laborum, atque nostrum ducimus pariatur eos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aspernatur incidunt, quas dolorum harum, eos magnam ad voluptates animi corrupti totam neque recusandae mollitia veritatis magni tempora dicta unde ipsam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, voluptas modi dignissimos est harum ex magni autem illo odio ab, laborum eaque hic voluptate facilis fugit cumque accusantium iste fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla fugit sed corrupti officiis, nostrum facere dolorum aspernatur asperiores quasi optio nam qui pariatur eveniet tempore ea consectetur magni repellat minima.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor quis illo aut quae minima accusantium est fugiat saepe fuga sunt, qui repudiandae! Possimus praesentium laborum, atque nostrum ducimus pariatur eos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aspernatur incidunt, quas dolorum harum, eos magnam ad voluptates animi corrupti totam neque recusandae mollitia veritatis magni tempora dicta unde ipsam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, voluptas modi dignissimos est harum ex magni autem illo odio ab, laborum eaque hic voluptate facilis fugit cumque accusantium iste fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla fugit sed corrupti officiis, nostrum facere dolorum aspernatur asperiores quasi optio nam qui pariatur eveniet tempore ea consectetur magni repellat minima.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor quis illo aut quae minima accusantium est fugiat saepe fuga sunt, qui repudiandae! Possimus praesentium laborum, atque nostrum ducimus pariatur eos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aspernatur incidunt, quas dolorum harum, eos magnam ad voluptates animi corrupti totam neque recusandae mollitia veritatis magni tempora dicta unde ipsam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, voluptas modi dignissimos est harum ex magni autem illo odio ab, laborum eaque hic voluptate facilis fugit cumque accusantium iste fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla fugit sed corrupti officiis, nostrum facere dolorum aspernatur asperiores quasi optio nam qui pariatur eveniet tempore ea consectetur magni repellat minima.</p>
</body>
</html>