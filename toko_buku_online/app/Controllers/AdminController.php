<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        //
    }
    public function dashboard(){
        return view('admin/dashboard');
    }
    public function daftarbuku(){
        $bookModel = model('BookModel');
        $data['books'] = $bookModel->findAll();


        return view('admin/daftar-buku', $data);
    }
    public function createBuku(){
        $data = $this->request->getPost();
        $fileCover = $this->request->getFile('cover');

        if(!$fileCover->hasMoved()){
            $path = $fileCover->store('images');
            $data['cover'] = $path;
        }

        $bookModel = model('bookModel');

        if($bookModel->insert($data, false)){
            return redirect()->to('admin/daftar-buku')->with('berhasil', 'Data berhasil di simpan');
        }else{
            return redirect()->to('admin/daftar-buku')->with('error', 'Data gagal disimpan');
        }
    }
    public function editBuku($id){
        $bookModel = model('bookModel');
        $book = $bookModel->find($id);

    }
    public function transaksi(){
        return view('admin/transaksi');
    }
    public function pelanggan(){
        return view('admin/pelanggan');
    }
}
