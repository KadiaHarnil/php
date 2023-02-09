<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$h="";
$b="";
    if(isset($_POST['txtno1']))
    {
        $h=$_POST['txtno1'];
        $b=$_POST['txtno2'];
    }
?>
<body>
    <form action="" method="post">
        <span>Height</span><input type="text" name="txtno1"value="<?php echo $h;?>">
        <span>Base</span><input type="text" name="txtno2" value="<?php echo $b; ?>">
        <input type="submit" value="Submit">
        <input type="text" value="<?php echo $h*$b; ?>">
    </form>
</body>
</html>