<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignment</title>
</head>

<body>
    <?php

    $array = [122, 23, 41, 12, 11, 32, 22, 12, 40, 344];
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array) - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $arr = $array[$j + 1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $arr;
            }
        }
    }
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    ?>

</body>

</html>