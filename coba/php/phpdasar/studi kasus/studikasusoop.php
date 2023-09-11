<?php
class nilai
{
    public $lenght;


    public function __construct($lenght)
    {
        $this->lenght = $lenght;
    }

    public function ganjil_genap()
    {
        for ($i = 1; $i <= $this->lenght; $i++) {
            if ($i % 2 == 0) {
                echo " $i genap <br>";
                $arrgenap[] = $i;
            } else {
                echo "$i ganjil <br>";
                $arrganjil[] = $i;
            }
        }
        echo "<hr>";
        echo "isi array genap <br>";
        var_dump($arrgenap);
        echo "<hr>";
        echo "isi array ganjil <br>";
        var_dump($arrganjil);
      
    }
}

class value extends nilai{

}



$nilai1 = new nilai(6);
$nilai1->ganjil_genap();
echo "<hr>";
$value1 = new value(9);
$value1->ganjil_genap();
// echo "<hr>";
// echo "genap <br>";
// foreach ($arrgenap as $genap) {
//     echo "ini nilai genap :" .  $genap . "<br>";
// }


// echo "<hr>";
// echo "ganjil <br>";
// foreach ($arrganjil as $ganjil) {
//     echo "ini nilai ganjil :" . $ganjil . "<br>";
// }
?>
