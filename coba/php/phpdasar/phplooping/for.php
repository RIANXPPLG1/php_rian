<?php 
//looping increament

$bintang='';

for($i = 0; $i <= 5; $i++){
    for($j = 0; $j <= $i - ($i - 1); $j++){
     $bintang.='*';
    }
    echo $bintang;
    echo '<br>';
}


// for($x = 5; $x >= 0; $x--){


// }

?>