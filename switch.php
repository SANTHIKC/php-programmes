<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $color="Green";
    switch($color) {
        case "red":
        echo "your color is red";
        break;
        case "blue":
        echo "your color is blue";
        break;
        case "Green":
        echo "your color is Green";
        break;
        default:
        echo "your color is yellow";
    }
    ?>
</body>
</html>