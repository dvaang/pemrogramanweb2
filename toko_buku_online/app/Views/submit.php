<?= $this->extend('template')?>

<?= $this->section('main')?>

<div class="container">
    <h2 class="mb-5">Anda berhasil membuat order</h2>
    <div class="mb-3">
        <div class="alert alert-success">
            <strong>Sukses!</strong>Silakan melakukan pembayaran dan megirim bukti bayar ke
            Admin Via Whatsaap. <a href="https://wa.me/6282289423948" 
            class="btn btn-success">Hubungi Admin</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>