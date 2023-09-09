<?php
include 'functions.php';
$connn = mysqli_connect("localhost","root","","library");
// $query = mysqli_query($connn,"SELECT * FROM tb_buku");
$query = $connn->query("SELECT * FROM tb_buku");
if ($connn->connect_error) {
    die("Gagal Tersambung: ".$connn->connect_error);
    echo "bejir";
}

$data = array();
while ($row = $query->fetch_assoc()) {
    $data[] = $row;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($data as $key) : ?>
    <a href="book.php?id_buku=<?= $key['id_buku'] ?>"><?= $key['id_buku'] ?></a>

    <?php endforeach; ?>
</body>
</html>