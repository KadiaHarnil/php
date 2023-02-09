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
    $con='';
    $ans='';
    if(isset($_POST['txt1']))
    {
        $a=$_POST['txt1'];
        $b=$_POST['txt2'];
        $con=$_POST['selops'];
        if($con=="add")
            $ans=$a+$b;
        elseif($con=="mul")
            $ans=$a*$b;

    }
?>
<body>
    <form action="" method="post">
        <input type="text" name="txt1">
        <input type="text" name="txt2">
        <select name="selops">
            <option value="add">Addition</option>
            <option value="mul">multiplication</option>
            <option value="sub">subtration</option>
        </select>
        <input type="submit">
        <input type="text" value="<?php echo $ans ?>">
    </form>
</body>
</html>