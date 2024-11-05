<?php

include_once "model/daftarBuku.php";

class BukuController{
    public function jalankan(){
        // mengakses model
        $data = new daftarBuku();

        // memberi data model ke view dan menampilkan view
        include "view/bukuView.php";
    }
}