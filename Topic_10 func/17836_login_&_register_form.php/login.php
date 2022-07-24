<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <center>

        <div>
        <?php
            require('structure.php');
            Login('Post','#');
            if (isset($_REQUEST['login'])) {
                echo "<pre>";
                print_r($_REQUEST);
                echo "</pre>";
            }
        ?>

        </div>
    </center>
</body>
</html>