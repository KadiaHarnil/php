<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    session_start();
    $a=$_SESSION['no1'];
    $b=$_SESSION['no2'];
    $con=$_POST['selops'];
    if($con=="add")
       {
           $con=$a+$b;
           $i="Addition"; 
       } 
        
    elseif($con=="sub")
        {
            $con=$a-$b;
           $i="Subtraction";  
        }
    elseif($con=="mul")
        {
            $con=$a*$b;
           $i="Multiplication";  
        }
    else
    {
        $con=$a/$b;
        $i="Divisoion";
    }

?>
<body>
<form method="post">
        <input type="text" name="txtno1" value="<?php echo $a;?>"><br>
        <input type="text" name="txtno2" value="<?php echo $b;?>"><br>
        <input type="text" value="<?php echo $i;?>"><br>
        <input type="text" value="<?php echo $con?>">
    </form>
</body>
</html>