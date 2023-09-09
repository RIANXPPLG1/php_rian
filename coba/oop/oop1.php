<?php 
class soldiers {
    // Atribut (variabel) kelas
    public $nama;
    public $senjata;

    // Metode (fungsi) kelas
    public function sapa() {
        echo $this->nama . "nembak pake $this->senjata ";
    }
}

// Membuat objek dari kelas soldiers
$soldiers1 = new soldiers();
$soldiers1->nama = " shaka ";
$soldiers1->senjata = " ak47 ";
$soldiers1->sapa(); // Output: "Halo, saya John"
;
?>