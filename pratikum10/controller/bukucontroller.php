<?php

include_once "model/daftarBuku.php";

class BukuController{
    public function jalankan(){
        $theme_value = "light";

        //mengambil nilai GET
        if(isset($_GET['theme'])){
        $theme_value = $_GET['theme'];
        }

        //set cookie
        if(!isset($_COOKIE['theme']) || isset($_GET['theme'])){
            setcookie('theme', $theme_value, time()+3600*24);
          }else{
            $theme_value = $_COOKIE['theme'];
          }

          // hapus cookie
          if(isset($_COOKIE['theme']) && isset($_GET['hapus_theme'])){
              setcookie('theme');
          }

        // mengakses model
        $data = new daftarBuku();

        // memberi data model ke view dan menampilkan view
        include "view/bukuView.php";
    }

    public function simpan(){
        session_start();

        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new daftarBuku();

        $status = $daftar_buku->simpan($buku);

        if($status){
            $_SESSION['berhasil'] = 'Data berhasil disimpan';
        }else{
            $_SESSION['gagal'] = 'Data gagal';
        }

        header('Location: http://localhost/index.php');
    }

    public function hapus(){
        session_start();

        $id = $_POST['id_hapus'];

        
        $daftar_buku = new daftarBuku();

        $status= $daftar_buku->hapus($id);

        
        if($status){
            $_SESSION['berhasil'] = 'Data berhasil dihapus';
        }else{
            $_SESSION['gagal'] = 'Data gagal di hapus';
        }

        header('location: http://localhost/index.php');
        exit;
    }

    public function edit(){
        session_start();
        //index.php/edit?id=5

        //menangkap nilai query string id dari view
        $id = $_GET['id'];

        //membuat objek model daftar buku
        $daftar_buku = new DaftarBuku();

        //mengambil dan membuat objek model buku berdasarkan id buku dari objek daftar_buku; 
        $buku = $daftar_buku->getBukuById($id);

        //jika buku ada atau ketemu
        if($buku){
            //tampilkan view edit buku
            include_once "view/EditBukuView.php";
        }else{
            header("Location: http://localhost/index.php");
        }
    }

    public function update(){
        session_start();
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);
        $buku->setId($_POST['id']);

        //var_dump($buku);
        //die();

        $daftar_buku = new DaftarBuku();

        $status = $daftar_buku->update($buku);

        if($status){
            $_SESSION['berhasil'] = 'Data Berhasil Diupdate';
        }else{
            $_SESSION['gagal'] = 'Data Gagal Diupdate';
        }

        header('Location: http://localhost/index.php');
        exit;
    }
}