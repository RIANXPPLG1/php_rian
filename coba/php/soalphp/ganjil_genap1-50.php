<?php 

$nilai = null;

for($i = 0; $i <= 50;$i++){
    $nilai += 1;
    if($nilai % 2 == 0){
        echo $i.' adalah genap'.'<br>';
    }else{
        echo $i.' adalah ganjil'.'<br>';
    }
}

?>