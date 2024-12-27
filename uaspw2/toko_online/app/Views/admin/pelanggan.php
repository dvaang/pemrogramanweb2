<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<h2 class="mb-5">Pelanggan</h2>
<div class="mb-5">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">No HP</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <th scope="row">jamal</th>
                <th scope="row">082289423948</th>
                <th scope="row">Jl. Km 16, Simp Sungai Duren, Muaro Jambi</th>
                <th scope="row">
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn btn-danger">Hapus</a>
                </th>
            </tr>
            <tr>
                <th scope="row">2</th>
                <th scope="row">Ridwan</th>
                <th scope="row">0809876543</th>
                <th scope="row">Jl.menantiDirimu, Simp Menunggu, mars</th>
                <th scope="row">
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn btn-danger">Hapus</a>
                </th>
            </tr>
        </tbody>
    </table>
</div>
<?= $this->endSection();?>