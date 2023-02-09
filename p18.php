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
    $ans='';
    if(isset($_POST['txtno1']))
    {
        $a=$_POST['txtno1'];
        for($i=1;$i<=$a;$i++)
        {  
            $ans .= "$i";
        }
    }
?>
<body>
    <form action="" method="post">
        Number<input type="text" name="txtno1">
        <input type="submit">
        <!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->
        <textarea name="" id="" cols="10">
            <?php echo $ans;
            ?>
        </textarea>
    </form>
</body>
</html>