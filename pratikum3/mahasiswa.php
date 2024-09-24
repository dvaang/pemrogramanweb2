<?php 
   include "orang.php";

   class Mahasiswa extends orang{
      public $nim;
      public $prodi;

      public function getNilaisemester(){

      }
   }

   class mahasiswaAsing extends Mahasiswa{

      //override
      public function ucapsalam()
      {
        echo "Hello my name " . $this->nama . "<br>";
      }
   }