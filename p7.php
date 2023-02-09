<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<?php

print_r($_POST);

?>
<body>
    <form method="post">
        <input type="number" placeholder="Enter number" name="txtno" id=""><br>
        <input type="submit" name="btnsubmit">
        <input type="number"  name="txtans" id=""><br>
    </form>
</body>
</html>