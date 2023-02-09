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
        $a=$_POST['txtn1'];
        $b=$_POST['txtn2'];
    }
?>
<body>
    <form action="" method="post">
        <input type="number" name="txtn1" value="<?php echo $a?>" ><br>
        <input type="number" name="txtn2" value="<?php echo $b; ?>"><br>
        <input type="submit" name="sub"><br>
        <input type="number" value="<?php echo $a*$b;?>" >
    </form>
</body>
</html>