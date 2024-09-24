<?php
   class orang{
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function ucapsalam(){
        echo "woyyy nama akuuuu " . $this->nama . "<br>";
    }
   }