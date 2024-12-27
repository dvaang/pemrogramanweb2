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
            <?php foreach ($pelangganList as $pelanggan): ?>
            <tr>
                <th scope="row"><?= $pelanggan['id'] ?></th>
                <td><?= $pelanggan['nama'] ?></td>
                <td><?= $pelanggan['no_hp'] ?></td>
                <td><?= $pelanggan['alamat'] ?></td>
                <td>
                    <a href="<?= base_url('admin/pelanggan/hapus/' . $pelanggan['id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pelanggan ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>
