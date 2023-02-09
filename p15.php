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
    $min='';
    $ans='';
    if(isset($_POST['sub']))
    {
        $max=$_POST['txtno1'];
        $min=$_POST['txtno2'];
        if($max>$min)
            $ans="$max is maximum";
        else
            $ans="$min is maxium";

    }
?>
<body>
    <form action="" method="post">
        <span>Number 1</span><input type="text" name="txtno1" value="<?php echo $max;?>">
        <span>Number 2</span><input type="text" name="txtno2" value="<?php echo $min;?>">
        <input type="submit" name="sub" >
        <input type="text" value="<?php echo $ans?>">
    </form>
</body>
</html>