<?php 

require_once "orang.php";
require_once "nilai.php";

class mahasiswa extends orang{
     protected  string $nim;
     protected Nilai $nilai;
     
     public function setNim($nim){
        $this->nim = $nim;
     }
      
     public function setNilai($nilai){
        $this->nilai = $nilai;
     }

     public function getNim(){
        return $this->nim;
     }

     public function getNilai(){
        return $this->nilai;
     }

     public function tampilkanData(){
        echo "Nama :" . $this->nama . "<br>";
        echo "NIM :" . $this->nim . "<br>";
        echo "Nilai tugas :" . $this->nilai->getTugas() . "<br>";
        echo "Nilai UTS :" . $this->nilai->getUTS() . "<br>";
        echo "Nilai UAS :" . $this->nilai->getUAS() . "<br>"; 
     }
}