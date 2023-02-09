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
    if(isset($_POST['sub']))
    {
        $a=$_POST['txtno1'];
    }
?>
<body>
    <form action="" method="post">
        <input type="text" name="txtno1" value=" <?php echo $a;?>" id="">
        <input type="submit" value="submit" name="sub">
        <input type="text" value="<?php echo $a*$a*$a; ?>">
        <input type="text" value="<?php echo $a*$a; ?>">
    </form>
</body>
</html>