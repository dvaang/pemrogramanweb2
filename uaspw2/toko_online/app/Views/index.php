<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Toko Dvaaang</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .hero {
      background-color: #e9f5ff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .hero h1 {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 1rem;
    }

    .hero .btn {
      font-size: 1.2rem;
    }

    .product-card {
        border: none;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
      }
      .product-card:hover {
        transform: scale(1.05);
      }
      .product-card img {
        height: 200px;
        object-fit: cover;
      }
      .product-card .btn {
        width: 100%;
      }
      footer {
        text-align: center;
        background-color: #fde2e2;
        border-top: 2px solid #ff7b7b;
        color: #444;
        padding: 1rem;
        margin-top: 3rem;
      }
      footer a {
        color: #ff7b7b;
        text-decoration: none;
        font-weight: bold;
      }
      .btn:hover {
        opacity: 0.9;
        transform: scale(1.03);
        transition: all 0.3s ease;
      }
      .badge {
        font-size: 0.9rem;
      }
  </style>
</head>

<body>
  <div class="container">
    <div class="row mb-4">
      <div class="col-12 text-end">
        <a href="<?= base_url() ?>chart" class="btn btn-secondary">
          <button type="button" class="btn btn-primary position-relative">
            Keranjang Saya
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
          </button>
        </a>
      </div>
    </div>
    <div class="row hero p-5 mb-5">
      <div class="col-md-6">
        <h1>Selamat Datang di Toko Dvaaang</h1>
        <p>Kami menyediakan berbagai macam bahan-bahan sembako.</p>
        <a href="<?= base_url('product') ?>" class="btn btn-success">Lihat Produk</a>
      </div>
      <div class="col-md-6">
        <h1>Temukan Barang yang anda cari!</h1>
        <form action="search.html" method="GET">
          <div class="mb-3">
            <input
              type="text"
              class="form-control"
              placeholder="Cari Barang" name="Barang" />
            <div class="mb-3">
              <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </form>
      </div>
    </div>

    <h2 class="mb-4">Barang Terlaris</h2>
    <div class="row mb-5 g-3">
      <div class="col-md-3">
        <div class="card product-card">
          <img src="images/download (2).jpg" class="card-img-top" alt="Minyak Kita" />
          <div class="card-body">
            <h5 class="card-title">Minyak Kita</h5>
            <p class="card-text">Rp 18.000,00,-</p>
            <a href="chart" class="btn btn-primary">Add to Chart</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card product-card">
          <img src="images/download (3).jpg" class="card-img-top" alt="Daia" />
          <div class="card-body">
            <h5 class="card-title">Daia</h5>
            <p class="card-text">Rp 5.000,00,-</p>
            <a href="chart" class="btn btn-primary">Add to Chart</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card product-card">
          <img src="images/download (4).jpg" class="card-img-top" alt="Pepsodent" />
          <div class="card-body">
            <h5 class="card-title">Pepsodent</h5>
            <p class="card-text">Rp 5.000,00,-</p>
            <a href="chart" class="btn btn-primary">Add to Chart</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card product-card">
          <img src="images/lifeboy.jpg" class="card-img-top" alt="Lifebuoy" />
          <div class="card-body">
            <h5 class="card-title">Lifebuoy</h5>
            <p class="card-text">Rp 16.000,00,-</p>
            <a href="add-to-cart.html?product=lifebuoy" class="btn btn-primary">Add to Chart</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="py-3">
    <div class="container">
      <p>Copyright 2024. Toko Dvaaang. All Rights Reserved.</p>
    </div>
  </footer>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>