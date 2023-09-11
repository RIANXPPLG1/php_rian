<?php 
$namasiswa = ['rian','keidjaru','adam','shaka'];
$namakelas = ['pplg','tkj','tm','mplb'];

foreach($namasiswa as $nama){
    echo 'nama: '.$nama.'<br>';
    echo ' kelas: '.$namakelas[0].'<br>';
}

echo '<hr>';

$kendaraan = array('merk' => 'toyota','tipe' => 'supra','tahun' => '2006' );

foreach($kendaraan as $mobil => $nilai){
    echo $mobil.':  '.$nilai.'<br>';
}




?>