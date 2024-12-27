<?= $this->extend('admin/template') ?>

<?= $this->section('main') ?>

<h2 class="mb-5">Edit Barang</h2>

<form action="<?= base_url('admin/daftar-barang/change/'.$barang['id']); ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama">Nama Barang</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?= $barang['nama']; ?>"
            autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga"value="<?= $barang['harga']; ?>"
            autocomplete="off" required>
        </div>
        <div class="mb-3">
        <label for="gambar" class="form-label">Gambar barang Baru Jika Mau</label>
        <input type="file" class="form-control" id="gambar" name="gambar" autocomplete="off">
        
    </div>
        <div class="mb-3">
            <label for="stok">Stok Barang</label>
            <input type="text" class="form-control" name="stok" id="stok"value="<?= $barang['stok']; ?>"
            autocomplete="off" required>
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/daftar-barang') ?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection()?>
