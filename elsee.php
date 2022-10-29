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
    $a=5;
    $b=6;
    $c=9;

    if($a>=$b)
    {
        echo $a ;
    }
    elseif($b>=$c)
    {
        echo $b;
    }
    elseif($c>=$a)
    {
        echo $c;
    }
    else{
        "not valied";
    }

?>
</body>
</html>