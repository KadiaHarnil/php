<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $a=$_POST['txtno1'];
    $b=$_POST['txtno2'];
    $ans=$a+$b;
?>
<body>
    <form>
        <span>Number1</span><input type="text" name="txtno1" value="<?php echo $a?>"><br>
        <span>Number2</span><input type="text" name="txtno2" value="<?php echo $b?>"><br>
        <span>Answer</span><input type="text" name="btn" value="<?php echo $ans?>">
    </form>
</body>
</html>