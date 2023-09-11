<?php 
$connect = mysqli_connect("localhost","root","","ayam");
$query = mysqli_query($connect,"SELECT * FROM tb_ayam");
$data = [];
while($rows = mysqli_fetch_assoc($query)){

}


class ayam{
  public  $jenis;
  public  $warna;
  public  $harga;
 
  public function __construct($jenis,$warna,$harga) {
    $this->jenis = $jenis;
    $this->warna = $warna;
    $this->harga = $harga;
  }

  public function getayam(){
    echo "jenis : $this->jenis <br>";
    echo "warna : $this->warna <br>";
    echo "harga : $this->harga <br>";
  }

  public function ngadu(){
    echo "petoookkkkk petok petokkkkk pwtokkkkkkkkkkk";

  }



}


class ayam_2 extends ayam{



}


$ayam1 = new ayam("kate","hitam",1000);
$ayam1->getayam();

echo "<hr>";

$ayam2 = new ayam_2("jago","merah",1200);
$ayam2->getayam();
$ayam2->ngadu();
?>