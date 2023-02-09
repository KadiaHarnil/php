<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$a="";
$b="";
    if(isset($_POST['sub']))
    {
        $a=$_POST['in1'];
        $b=$_POST['in2'];
    }
?>
<body>
    <form action="" method="post">
        <input type="text" name="in1" value="<?php echo $a; ?>"><br>
        <input type="text" name="in2" value="<?php echo $b; ?>"><br>
        <input type="submit" value="<?php echo $a+$b; ?>" name="sub">
    </form>
</body>
</html>