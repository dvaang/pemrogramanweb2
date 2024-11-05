<?php

include_once "model/daftarBuku.php";

class BukuController{
    public function jalankan(){
        // mengakses model
        $data = new daftarBuku();

        // memberi data model ke view dan menampilkan view
        include "view/bukuView.php";
    }

    public function simpan(){
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new daftarBuku();
        $daftar_buku->simpan($buku);

        header('localtion: http://localhost/index.php');
    }

    public function hapus(){
        $id = $_POST['id_hapus'];

        
        $daftar_buku = new daftarBuku();
        $daftar_buku->hapus($id);

        header('localtion: http://localhost/index.php');
        exit;
    }
}