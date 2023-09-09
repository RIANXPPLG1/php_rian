<?php 
$connect = mysqli_connect("localhost","root","","db_orang");
$query = mysqli_query($connect,"SELECT * FROM tb_orang");
$data = [];
while ($rows = mysqli_fetch_assoc($query)) {
    $data[] = $rows;
}


class orang{
    public $id_orang;
    public $nama_orang;
    public $id_alamat_orang;
    public $jenis_kelamin;

    public function tampilkan(){
        echo $this->id_orang."<br>";
        echo $this->nama_orang."<br>";
        echo $this->id_alamat_orang."<br>";
        echo $this->jenis_kelamin."<br>";
        echo "<hr>";
    }

}

$orang1 = new orang();
foreach($data as $key){
    $orang1->id_orang= $key["id_orang"];
    $orang1->nama_orang= $key["nama_orang"];
    $orang1->id_alamat_orang= $key["id_alamat_orang"];
    $orang1->jenis_kelamin= $key["jenis_kelamin"];
    $orang1->tampilkan();

}



?>