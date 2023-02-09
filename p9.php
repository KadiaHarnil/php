<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    if(isset($_POST['txtno']))
    {
        $no=$_POST['txtno'];
        // $sum=$no+$no;
    }
?>
<body>
    <form method="post">
        <input type="number" name="txtno" value="<?php echo $no;?>">
        <input type="submit" name="ans">
        <input type="number" name="txno1" value="<?php echo $no+$no;?>">
    </form>
</body>
</html>