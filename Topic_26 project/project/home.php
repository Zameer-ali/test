<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- navbar css link -->
    <link rel="stylesheet" href="navbar.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome for icon -->
    <script src="https://kit.fontawesome.com/4fa355c1a9.js" crossorigin="anonymous"></script>
    <style>
        .sidebar {
            margin: 0;
            padding: 0;
            width: 220px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php require_once('navbar.php'); ?>
    <div class="row mx-1">
        <div class="col-lg-2 col-md-2 col-sm-12">
            <div class="sidebar">
                <a class="active" href="#home">Home</a>
                <a href="#news">News</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">d</div>
        <div class="col-lg-2 col-md-2 col-sm-12">d</div>
    </div>

</body>

</html>