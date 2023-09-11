<?php 
$arrgenap = [];
$arrganjil = [];

for($i = 1; $i < 20; $i++){
    if($i % 2 == 0){
        echo " $i genap <br>";
        $arrgenap[] = $i ;
    }else{
        echo "$i ganjil <br>";
        $arrganjil[] = $i ;
    }
}



echo "<hr>";
echo "genap <br>";
foreach($arrgenap as $genap){
    echo"ini nilai genap :".  $genap."<br>" ;
}

echo "<hr>";
echo "ganjil <br>";
foreach($arrganjil as $ganjil){
    echo"ini nilai ganjil :". $ganjil."<br>" ;
}

?>