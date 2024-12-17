<?= $this->extend('template')?>

<?= $this->section('main')?>
<div class="container">
    <h2 class="mb-5">Checkout</h2>
    <div class="mb-3">
    <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Detail Buku</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="<?= base_url("images/images (1).png"); ?>" alt=""
                        style="width: 150px; height:auto;">
                        <h6>Laut Bercerita</h6>
                    </td>
                    <td>
                        x1
                    </td>
                    <td>
                        95.000
                    </td>
                    <td>
                        95.000
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <h2 class="mb-3">Total: Rp100.000</h2>
    <h2 class="mb-3">Data Pembeli</h2>
    <div class="mb-5">
        Emely Smith <br/>
        081237456 <br/>
        emeley.007@gmail.com
    </div>
    <h2 class="mb-3">Alamat Pengirim</h2>
    <div class="mb-5">
        <span>Jl.km.16, simpang sungai duren, muaro Jambi</span>
    </div>
    <h2 class="mb-3">Metode Bayar</h2>
    <div class="mb-5">
        Transfer Bank <br />
        Bca, Dvaaang <br />
        130706130706
    </div>
    <div class="mb-5">
        <a href="<?= base_url('submit')?>" class="btn btn-primary">Submit</a>
    </div>
</div>

<?= $this->endSection() ?>