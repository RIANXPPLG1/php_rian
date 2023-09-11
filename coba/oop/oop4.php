<?php 
class mobil{


    public $merk = "toyota";
    public $tahun_launching = "2006";
    public $tipe = "supra gtr";
    public $gen = "1";
    public $kecepatan = "600km/jam";


    public function menampilkan(){
        echo "merk : $this->merk <br>";
        echo "tahun : $this->tahun_launching <br>";
        echo "tipe : $this->tipe <br>";
        echo "gen : $this->gen <br>";
        echo "kecepatan : $this->kecepatan <br>";
    }

    public function nyalakan(){
        echo "bremmmm bremmmmm";
    }
}

$mobil1 = new mobil();
$mobil1->menampilkan();
$mobil1->nyalakan();



?>