<?php 
$connect = mysqli_connect('localhost','root','','organisasi');

$sqlupdate = mysqli_query($connect,"UPDATE `tb_anggota` SET `NAMA_ANGGOTA`='SOLDIER', `JABATAN_ANGGOTA`='KADET' WHERE SEKSI_ANGGOTA = 'ANGKATAN_DARAT'");

$sqlupdate = mysqli_query($connect,"UPDATE `tb_anggota` SET `NAMA_ANGGOTA`='PILOT', `JABATAN_ANGGOTA`='KADET' WHERE SEKSI_ANGGOTA = 'ANGKATAN_UDARA'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>testing update</h1>
</body>
</html>