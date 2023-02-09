<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<?php

if(isset($_POST["btnsubmit"]))
{
$no=$_POST["txtno"];
$ans=$no*$no;
}
?>
<body>
    <form method="post">
        <input type="number" placeholder="Enter number" name="txtno" value="<?php echo"$no";?>"><br>
        <input type="submit" name="btnsubmit">
        <input type="number"  name="txtans" id="hel" value="<?php echo $ans;?>"><br>
    </form>
</body>
</html>