<?php

$connect = mysqli_connect('localhost','root','','db_sekolah');
echo mysqli_error($connect);
$query = mysqli_query($connect,'SELECT * FROM tb_siswa');

$rows = [];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$test = mysqli_fetch_array($query);
var_dump($test['NAMA_SISWA']);



?>


    
</body>
</html>