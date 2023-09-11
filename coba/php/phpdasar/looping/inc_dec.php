<?php 
$bintang="";

for($i = 1;$i <= 5; $i++){
    for($j = 1; $j <= $i-($i - 1) ; $j++){
        $bintang.="*";
    }
    echo $bintang;
    echo "<br>";
}

$bintang = "";

for ($i = 5; $i >= 1; $i--) { // Mulai dengan nilai $i maksimum dan kurangi hingga mencapai 1
    for ($j = 1; $j <= $i; $j++) {
        $bintang .= "*";
    }
    $bintang .= "<br>";
}

echo $bintang;





$star = "";

for ($x = 1; $x <= 5; $x++) {
    for ($y = 1; $y <= $x; $y++) { // Perubahan di sini
        $star .= "*";
    }
    $star .= "<br>";
}

echo $star;




?>