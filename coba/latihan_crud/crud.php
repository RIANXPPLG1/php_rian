<?php 

$conect = mysqli_connect('localhost','root','','crud');

echo mysqli_error($conect);

$query = mysqli_query($conect,' SELECT * FROM tb_penduduk');


$queryd = mysqli_query($conect, "SELECT * FROM tb_penduduk JOIN tb_desa ON tb_penduduk.ID_ALAMAT_PENDUDUK = tb_desa.ID_ALAMAT_PENDUDUK");

// $sqlcreate = mysqli_query($conect,"INSERT INTO `tb_penduduk` (`NAMA_PENDUDUK`,`ID_ALAMAT_PENDUDUK`,`JENIS_KELAMIN`) VALUES (\"fajar\",\"111\",\"LAKI-LAKI\");");

// $sqlupdate = mysqli_query($conect,"UPDATE `tb_penduduk` SET `NIP`=11,`NAMA_PENDUDUK`='KANAE',`JENIS_KELAMIN`='PEREMPUAN' WHERE NIP='14'");

//  $sqldelete = mysqli_query($conect, "DELETE FROM `tb_penduduk` WHERE `NIP`=11");


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
        <?php while ($rows = mysqli_fetch_assoc($query)) : ?>
        <tr>
            <td><?= $rows['NIP']; ?></td>
            <td><?= $rows['NAMA_PENDUDUK']; ?></td>
            <td><?= $rows['ID_ALAMAT_PENDUDUK']; ?></td>
            <td><?= $rows['JENIS_KELAMIN']; ?></td>
            <?php endwhile; ?>
        </tr>
     
</body>
</html>