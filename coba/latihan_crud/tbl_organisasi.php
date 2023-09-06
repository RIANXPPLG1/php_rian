<?php

$connect = mysqli_connect('localhost','root','','organisasi');
echo mysqli_error($connect);
$query = mysqli_query($connect,"SELECT * FROM tb_anggota");
$queryd = mysqli_query($connect, "SELECT * FROM tb_anggota JOIN ditel ON tb_anggota.ID_ANGGOTA = ditel.ID_ANGGOTA");


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
<table border="1">
        <th>
    
            <td>NAMA_ANGGOTA</td>
            <td>JABATAN_ANGGOTA</td>
            <td>SEKSI_ANGGOTA</td>
            <td>SENJATA</td>
        </th>

        <?php while ($rows = mysqli_fetch_assoc($queryd)) : ?>
        <tr>
            <td><?= $rows['ID_ANGGOTA']; ?></td>
            <td><?= $rows['NAMA_ANGGOTA']; ?></td>
            <td><?= $rows['JABATAN_ANGGOTA']; ?></td>
            <td><?= $rows['SEKSI_ANGGOTA']; ?></td>
            <?php
           
           $detail_query = mysqli_fetch_assoc($queryd);
           ?>
            <td><?= $rows['SENJATA']; ?></td>
           
         
        </tr>
        <?php endwhile; ?>
    </table>


    
</body>
</html>