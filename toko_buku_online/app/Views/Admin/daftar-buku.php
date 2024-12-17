<?= $this->extend('admin/template') ?>

<?= $this->section('main') ?>

<div class="container">
    <h1>Daftar Buku</h1>
    <?php if (isset($_SESSION['berhasil'])): ?>
        <div class="alert alert-success mb-3">
            <Strong>success!</Strong> <?= $_SESSION['berhasil'] ?>
        </div>
    <?php
    //  unset($_SESSION['berhasil']);//
    endif;
    ?>

    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger mb-3">
            <Strong>success!</Strong> <?= $_SESSION['gagal'] ?>
        </div>
    <?php
    //  unset($_SESSION['berhasil']);
    endif;
    ?>


    <div class="my-3">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
            <i class="bi-plus-circle-fill"></i> Tambah
        </button>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Pegarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($books as $book): ?>
                        <tr>
                            <th scope="row"><?= $book['id'] ?></th>
                            <td><?= $book['judul'] ?></td>
                            <td><?= $book['pengarang'] ?></td>
                            <td><?= $book['penerbit'] ?></td>
                            <td><?= $book['tahun'] ?></td>
                            <td>
                                <img src="<?= base_url($book['cover'])?>" alt="" style="width: 150px; heigth: auto;">
                            </td>
                            <td><?= $book['harga'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahModalLabel">Form Tambah Buku</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/daftar-buku') ?>" id="formTambah" method="POST"
                    enctype="multipart/form-data" enctype="">
                    <div class="mb-3">
                        <label for="judul">judul</label>
                        <input type="text" name="judul" id="judul" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="judul">Pengarang</label>
                        <input type="text" name="pengarang" id="pengarang" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="judul">Penerbit</label>
                        <input type="text" name="penerbit" id="penerbit" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="judul">Tahun</label>
                        <input type="text" name="tahun" id="tahun" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="cover">Cover</label>
                        <input type="file" name="cover" accept="image/*" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" id="harga">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="formTambah" class="btn btn-primary"><i class="bi bi-floppy">
                    </i> Simpan</button>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="hapusModal" tabindex="-1"
    aria-labelledby="hapusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="hapusModal">konformasi hapus</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/index.php/buku/hapus" method="POST" id="formHapus">
                    <input type="hidden" name="id_hapus" id="hidden_id">
                </form>
                <P>Apakah anda yakin ingin menghapus data dengan id <span
                        id="text_id">...</span>?
                <p>
                    </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="formHapus" class="btn btn-danger"><i
                        class="bi bi-trash"></i>Hapus</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<script>
    const hapusModal = document.getElementById('hapusModal')
    if (hapusModal) {
        hapusModal.addEventListener('show.bs.modal', event => {
            // Button that triggered the modal
            const button = event.relatedTarget
            // Extract info from data-bs-* attributes
            const id = button.getAttribute('data-bs-id')
            // If necessary, you could initiate an Ajax request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            const hidden_id = hapusModal.querySelector('#hidden_id')
            const text_id = hapusModal.querySelector('#text_id')

            hidden_id.value = id;
            text_id.textContent = id;
        })
    }
</script>

<?= $this->endSection(); ?>