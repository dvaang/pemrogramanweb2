<?php

require_once "buku.php";
require_once "Database/Database.php";

class daftarBuku{

    private $koneksi;

public function _construct(){
    $db = new database();
    $this->koneksi = $db->getKoneksi();
}
    public function getData(){
        $db = new database();
        $koneksi = $db->getKoneksi();

        $daftar_buku =[];

        $sql =  "SELECT * FROM buku";
        $query = $koneksi->query($sql);

        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $buku = new Buku($row['judul'], $row['pengarang'], $row['penerbit'], 
                 $row['tahun']);
                 $buku->setId($row['id']);
                 array_push($daftar_buku, $buku);
            }
        }

        return $daftar_buku;
    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }

    public function simpan($buku){
        $db = new database();
        $koneksi = $db->getKoneksi();

        $sql = "INSERT INTO buku VALUES ('".$buku->getJudul()."', '".$buku->getPengarang()."', 
        '".$buku->getPenerbit()."', '".$buku->getTahun()."')";

        $query = $koneksi->query($sql);
        return $query;
    }

    public function hapus($id){
        $sql = "DELETE FROM buku WHERE id =". $id;

        $query  = $this->koneksi->query($sql);

        return $query;
    }

    public function update($buku){
        $sql = "UPDATE buku SET judul = '".$buku->getJudul()."', pengarang ='".$buku->getPengarang()."',
        penerbit = '".$buku->getPenerbit()."', tahun =".$buku->getTahun()." WHERE id = ".$buku->id();

        $query = $this->koneksi->query($sql);
        return $query;
    }
}
