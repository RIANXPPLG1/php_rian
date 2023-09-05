<?php 
$connect = mysqli_connect('localhost','root','','organisasi');
$sql = mysqli_query($connect,"INSERT INTO `tb_anggota` (`ID_ANGGOTA`,`NAMA_ANGGOTA`,`JABATAN_ANGGOTA`,`SEKSI_ANGGOTA`) VALUES (null,\"fajar\",\"JENDRAL\",\"ANGKATAN_UDARA\");");

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