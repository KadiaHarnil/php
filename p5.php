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
     $a=50;
     $b=10;
     $c=30;
    if($a>$b && $a>$c)
        echo"A is Greater";
    elseif($b>$a && $b>$c)
        echo"B is Greater";
    elseif($c>$a && $c>$b)
        echo"c is Greater";

     ?>
</body>
</html>