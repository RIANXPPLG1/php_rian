<?php

$connect = mysqli_connect('localhost','root','','db_sekolah');
echo mysqli_error($connect);
$query = mysqli_query($connect,'SELECT * FROM tb_siswa');
$queryd = mysqli_query($connect, "SELECT * FROM tb_siswa JOIN tb_kelas ON tb_siswa.ID_KELAS = tb_kelas.ID_KELAS");
  



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




?>

    <table border="1">
        <?php while ($rows = mysqli_fetch_assoc($query)) : ?>
        <tr>
            <td><?= $rows['ID_SISWA']; ?></td>
            <td><?= $rows['NAMA_SISWA']; ?></td>
            <?php
           
            $kelas = mysqli_fetch_assoc($queryd);
            ?>
            <td><?= $kelas['NAMA_KELAS']; ?></td>
       
         
        </tr>
        <?php endwhile; ?>
    </table>


    
</body>
</html>