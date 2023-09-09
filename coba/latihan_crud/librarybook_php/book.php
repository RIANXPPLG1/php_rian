<?php
include 'functions.php';
$connn = mysqli_connect("localhost","root","","library");
// $query = mysqli_query($connn,"SELECT * FROM tb_buku");
if ($connn->connect_error) {
    die("Gagal Tersambung: ".$connn->connect_error);
    echo "bejir";
}

$id_buku = $_GET['id_buku'];

$query = $connn->query("SELECT * FROM tb_buku WHERE id_buku=".$id_buku)->fetch_assoc();

// var_dump($query);
// die();


// $data = array();
// while ($row = $query->fetch_assoc()) {
//     $data[] = $row;
// }

// $bjir = mysqli_fetch_assoc($query);

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
<img src="img/<?= $query['src_gambar'] ?>" alt="">
</body>
</html>