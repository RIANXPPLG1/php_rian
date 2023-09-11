<?php 
$nilai = 60;
$kkm = 75;
$remed = 50;


if($nilai >= $kkm){//karena kondisi ini tidak terpenuhi jadi lanjut ke kondisi selanjut nya
    echo "selamat kamu lulus";
}else if($nilai >= $remed && $nilai < $kkm){//karena kondisi ini terpenuhi jadi ini yang di jalankan
    echo "masih bisa remed";
}else{//karena kondisi ini tidak terpenuhi jadi lanjut ke kondisi selanjut nya
    echo "kamu gx naek kelas";
}
?>