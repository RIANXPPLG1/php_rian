<?php 
$connect = mysqli_connect('localhost','root','','gambar');
$query = mysqli_query($connect,"SELECT * FROM tb_gambar WHERE id_img = 1");
$image1 = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card{
            width: 30%;
            height: 300px;
            margin: auto;
            margin-top: 300px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 7px 7px 30px black;
            padding: 10px;
            display: flex;
        }

        .gambar{
            background-color: red;
            border-radius: 15px;
            width: 40%;
            height: 60%;
            <?php 

            echo "background-image:url((".$image1['nama_img'].");";
            ?>
        }

        .keterangan{
            margin-left: 10px;
            width: 55%;
            height: 90%;
            border-radius: 15px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
        <div class="card">
            <div class="gambar"></div>
            <div class="keterangan">
                <h1><?php ?></h1>
            </div>
        </div>

</body>
</html>