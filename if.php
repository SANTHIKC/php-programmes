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
    $day=5;
    if($day==1)
    {
        echo "sunday";
    }
    elseif($day==2) {
        echo "Monday"; 
    }
    elseif ($day==3){
        echo "Tuesday"; 
    }
    elseif ( $day==4) {
        echo "wednesday";
    }
    elseif ($day==5) {
        echo "Thursday";
    }
    elseif ($day==6) {
        echo "Friday" ;
    }
    elseif($day==7) {
        echo "Saturday";
    }
    else{
        echo "not report";
    }
    
    ?>
</body>
</html>