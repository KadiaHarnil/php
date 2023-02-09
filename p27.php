<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $i='';  
    if(isset($_POST['btn']))
    {
        
        if(isset($_POST['cric'])) 
            $i.=" Cricket ";     
        if(isset($_POST['base'])) 
            $i.=" BaseBall ";     
        if(isset($_POST['ten'])) 
            $i.=" Tennis ";     
    }
?>
<body>
    <form action="" method="post">
        <input type="checkbox" name="cric" id="" value="Cricket">Cricket
        <input type="checkbox" name="base" id="" value="Baseball">BaseBall
        <input type="checkbox" name="ten" id="" value="Tennis">Tennis
        <input type="submit" name="btn">
        <input type="text" value="<?php echo $i?>">
    </form>
</body>
</html>