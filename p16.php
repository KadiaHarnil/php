<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $max='';
    $a='';
    if(isset($_POST['sub']))
    {
        $a=$_POST['txtno1'];
        if($a>0)
            $max="$a is positive";
        else
            $max="$a is negative";

    }
?>
<body>
    <form action="" method="post">
        <span>Number 1</span><input type="text" name="txtno1" value="<?php echo $a;?>">
        <input type="submit" name="sub" >
        <input type="text" value="<?php echo $max?>">
    </form>
</body>
</html>