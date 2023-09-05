<?php 
$connect = mysqli_connect('localhost','root','','db_chat');
//create
//$sqlcreate = mysqli_query($connect,"INSERT INTO `tb_cht` (`ID_CHAT`,`USER`,`CHAT`) VALUES (null,\"yanto\",\"etah lu mah blok\");");


//update
$sqlupdate = mysqli_query($connect,"UPDATE `tb_cht` SET `CHAT`='angjayyyyyy' WHERE ID_CHAT = 5");


//delete
$sqldelete = mysqli_query($connect,"DELETE FROM `tb_cht` WHERE ID_CHAT = 1 ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>testing</h1>
</body>
</html>