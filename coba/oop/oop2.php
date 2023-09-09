<?php 
class pegawai {
    public $nama;
    public $jabatan;
    public $gajihperjam;
    public $jamkerja;


    public function keterangan(){
        echo "nama : $this->nama <br>";
        echo " jababtan : $this->jabatan <br>";
        echo " gajih : ".$this->gajihperjam*$this->jamkerja."<br>";
        echo " jamkerja : $this->jamkerja <br>";
     
    }
}

$pegawai1 = new pegawai();
$pegawai1->nama="rian";
$pegawai1->jabatan="oprator";
$pegawai1->gajihperjam=100000;
$pegawai1->jamkerja=8;
$pegawai1->keterangan();



?>