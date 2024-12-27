<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Keranjang Belanja - Toko Dvaaang</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
</head>

<body>
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-end">
      </div>
    </div>

    <h2 class="mb-5 text-center">Keranjang Belanja</h2>

    <div class="row mb-5 g-3">
      <div class="col-12">
        <div class="row p-3 bg-warning-subtle g-3">
          <div class="col-4">
            <img
              src="images/download (2).jpg"
              alt="Baju 1"
              style="width: 200px; height: auto" />
          </div>
          <div class="col-4">
            <span>Minyak Kita</span>
          </div>
          <div class="col-1">
            <span>x1</span>
          </div>
          <div class="col-2">
            <a href="<?= base_url('hapus') ?>" class="btn btn-danger">Hapus</a>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="row p-3 bg-warning-subtle g-3">
          <div class="col-4">
            <img
              src="images/download (3).jpg"
              alt="Baju 2"
              style="width: 200px; height: auto" />
          </div>
          <div class="col-4">
            <span>Daia</span>
          </div>
          <div class="col-1">
            <span>x1</span>
          </div>
          <div class="col-2">
            <a href="<?= base_url('hapus') ?>" class="btn btn-danger">Hapus</a>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="row p-3 bg-warning-subtle g-3">
          <div class="col-4">
            <img
              src="images/download (4).jpg"
              alt="Baju 3"
              style="width: 200px; height: auto" />
          </div>
          <div class="col-4">
            <span>Pepsodent</span>
          </div>
          <div class="col-1">
            <span>x1</span>
          </div>
          <div class="col-2">
            <a href="<?= base_url('hapus') ?>" class="btn btn-danger">Hapus</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-end mb-5">
      <div class="">
        <h2>Total: Rp50.ooo,oo</h2>
      </div>
    </div>

    <div class="row d-flex mb-5">
      <div class="col-12">
        <a href="<?= base_url() ?>" class="btn btn-secondary">Kembali berbelanja</a>
        <a href="<?= base_url('checkout') ?> " class="btn btn-primary">Checkout</a>
      </div>
    </div>

  </div>

  <footer class="bg-danger-subtle py-3">
    <div class="container">
      Copyright 2024. Toko Dvaaang. All Rights Reserved.
    </div>
  </footer>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>