<?php

require_once "buku.php";

class daftarBuku{
    public function getData(){
        $daftar_buku = array(
            new buku('belajar pemrograman web', 'Emely w.', 'informatika', '2024'),
            new buku('matematika Diskrit', 'Rinaldi Munir', 'Andi Publisher', '2020'),
            new buku('Kalkulus', 'Robert T.', 'Erlangga', '2019'),
            new buku('Metodologi Penelitian', 'James W.', 'Pustaka UIN', '2024'),
        );

        return $daftar_buku;
    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
}