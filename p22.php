<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    session_start();
    $_SESSION['no1']=$_POST['txtno1'];
?>
<body>
    <form action="p23.php" method="post">
        <input type="text" name="txtno2">
        <input type="submit" value="Next">
    </form>
</body>
</html>