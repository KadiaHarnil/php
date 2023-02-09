<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $a='';
    $b='';
    $ans='';
    if(isset($_POST['btn']))
    {   
        $a=$_POST['txtno1'];
        $b=$_POST['txtno2'];
        $con=$_POST['selops'];
        if($con=="Addition")
            $ans=$a+$b;
        elseif($con=="Subtraction")
            $ans=$a-$b;
        elseif($con=="Multiplication")
            $ans=$a*$b;
        else
            $ans=$a/$b;
    }
?>
<body>
    <form action="" method="post">
        <span>Number 1:</span><input type="text" name="txtno1" value="<?php echo $a?>"><br>
        <span>Number 2:</span><input type="text" name="txtno2" value="<?php echo $b?>"><br>
        <select name="selops">
            <option value="Addition">Addition</option>
            <option value="Subtraction">Subtraction</option>
            <option value="Multiplication">Multiplication</option>
            <option value="Division">Division</option>
        </select>
        <br>
        <input type="submit" name="btn"><br>
        <input type="text" value="<?php echo $ans?>">
    </form>
</body>
</html>