<?php 
//looping increment

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}

//looping decrement
for ($i = 4; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
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
<table border="1" cellspacing='0'>
        <?php 
        for($f = 0;$f < 10; $f++){
        echo '<tr>';
        for($t = 0; $t <= 5; $t++){
            echo "<td>$f.$t</td>";
        }
        echo '</tr>';
      
    }
        ?>
    </table>
</body>
</html>
