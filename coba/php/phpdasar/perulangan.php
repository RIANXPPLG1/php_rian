<?php 

$connect = mysqli_connect('localhost','root','','gambar');
$query = mysqli_query($connect,"SELECT * FROM tb_gambar");
$data = [];
while ($rows = mysqli_fetch_assoc($query)) {
    $data[] = $rows;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }

        .container{
            width: 100%;
            display: grid;
            justify-content: center;
            grid-template-columns:30% 30% 30% ;
            grid-template-rows: 400px 400px 400px;
            gap: 20px;
        }

        .item{
            background-color: blue;
            background-size: cover;
            background-position: center;
           
        }

        <?php
         
        foreach($data as $key){
            echo "#img_".$key['id_img']."{";
            echo "background-image:url(".$key['nama_img'].");";
            echo "}";
        }
        
        ?>

    </style>
</head>
<body>
    <div class="container">
    
      <?php for($i = 0; $i < 9; $i++): ?>
        <?php foreach ($data as $key) : ?>
            <div id="img_<?= $key["id_img"]; ?>" class="item">
            <!-- <img  src="" alt="" width="100%"> -->
            </div>
   <?php endforeach; ?>
      <?php endfor; ?>
      
    </div>
</body>
</html>