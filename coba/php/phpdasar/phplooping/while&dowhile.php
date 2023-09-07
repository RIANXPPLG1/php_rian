<?php 
$i = 1;
$rusak = 5;

while($i <= 10){
    if($i < $rusak){
        echo "alat $i beroprasi <br>";
    }elseif($i >= $rusak ){
        echo "alat $i rusak <br>";
    }
    $i++;
}

$benarkah = 6;
do{
echo 'tidak benar <br>';
$benarkah++;
}while($benarkah < 5);

?>