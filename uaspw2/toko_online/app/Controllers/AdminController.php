<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function daftarbarang()
    {
        $barangModel = new BarangModel();

        $data['barangs'] = $barangModel->findAll();

        return view('admin/daftar-barang', $data);
    }

    public function daftarbarangTambah()
    {
        return view('admin/daftar-barang-tambah');
    }

    public function createBarang()
    {
        $data = $this->request->getPost();
        $file = $this->request->getFile('gambar');

        if ($file && !$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path;
        }

        $barangModel = new BarangModel();

        if ($barangModel->insert($data, false)) {
            return redirect()->to('admin/daftar-barang')->with('berhasil', 'Data berhasil disimpan!');
        } else {
            return redirect()->to('admin/daftar-barang')->with('gagal', 'Data gagal disimpan!');
        }
    }

    public function daftarBarangEdit($id)
    {
        $barangModel = new BarangModel();
        $barang = $barangModel->find($id);
    
        if (!$barang) {
            return redirect()->to('admin/daftar-barang')->with('gagal', 'Data Barang tidak ditemukan!');
        }
    
        return view('admin/daftar-barang-edit', ['barang' => $barang]);
    }
    
    public function changeBarang($id)
    {
        $barangModel = new BarangModel(); 
        $existingbarang = $barangModel->find($id); 
    
        if (!$existingbarang) {
            return redirect()->to('admin/daftar-barang')->with('gagal', 'Data barang tidak ditemukan!');
        }
    
        $data = $this->request->getPost(); 
        $file = $this->request->getFile('gambar');
    
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path; 
        } else {
            $data['gambar'] = $existingbarang['gambar'];
        }
    
        if ($barangModel->update($id, $data)) {
            return redirect()->to('admin/daftar-barang')->with('berhasil', 'Data berhasil diperbarui!');
        } else {
            return redirect()->to('admin/daftar-barang')->with('gagal', 'Data gagal diperbarui!');
        }
    }
    public function hapusBarang($id)
    {
        $barangModel = new \App\Models\BarangModel();
    
        $barang = $barangModel->find($id);
    
        if ($barang) {
            $barangModel->delete($id);
    

            return redirect()->to('/admin/daftar-barang')->with('success', 'Barang berhasil dihapus.');
        }

        return redirect()->to('/admin/daftar-barang')->with('error', 'Barang tidak ditemukan.');
    }
    
    

    public function transaksi()
    {
        return view('admin/transaksi');
    }
 
    public function transaksiUbahStatus()
    {
        return view('admin/transaksi-ubah-status');
    }

    public function transaksiHapus()
    {
        return view('admin/transaksi-hapus');
    }

    public function pelanggan()
    {
        return view('admin/pelanggan');
    }

    public function pelangganHapus()
    {
        return view('admin/pelanggan-hapus');
    }
}