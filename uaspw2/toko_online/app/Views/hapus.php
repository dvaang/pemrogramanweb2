<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Hapus</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      .notification {
        background-color: #fff;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 400px;
      }
      .notification h5 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
      }
      .notification p {
        margin-bottom: 1.5rem;
      }
    </style>
  </head>
  <body>
    <div class="notification">
      <h5>Konfirmasi Penghapusan</h5>
      <p>Apakah Anda yakin ingin menghapus item ini dari keranjang?</p>
      <div class="d-flex justify-content-center gap-3">
        <a href="<?= base_url('hapus')?>" class="btn btn-danger">Hapus</a>
        <a href="<?= base_url('chart')?>" class="btn btn-secondary">Batal</a>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
