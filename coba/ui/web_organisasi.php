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
    <link rel="stylesheet" href="ui.css">
</head>
<body>
<?php
$test = mysqli_fetch_array($query);


?>
    <header id="header">
        <nav class="navbar">
            <ul class="wp_menu">
                <li>menu</li>
                <li>about</li>
                <li>contact</li>
            </ul>
        </nav>
    </header>

    <main id="content">
        <div class="item"><h1><?= var_dump(($test['NAMA_SISWA'])) ?></h1></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
    </main>

    <footer id="footer">
        <h1 class="ctn-txt_footer">lets talk about future!</h1>
    </footer>

    <script src="ui.js"></script>
</body>
</html>