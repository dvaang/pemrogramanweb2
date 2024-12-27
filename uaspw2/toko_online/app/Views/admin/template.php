<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Toko Dvaaang</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?= base_url()?>css/style.css">
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
      }
      .sidebar {
        background-color: #6c757d;
        color: #fff;
        min-height: 100vh;
        padding: 15px 10px;
      }
      .sidebar a {
        color: #ddd;
        text-decoration: none;
        display: block;
        padding: 12px;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
        font-weight: bold;
      }
      .sidebar a:hover {
        background-color: #5a6268;
        color: #fff;
      }
      .sidebar .active {
        background-color: #343a40;
        color: #fff;
      }
      .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: linear-gradient(45deg, #ff7f50,rgb(206, 154, 135));
        color: #fff;
        padding: 15px 20px;
        border-radius: 5px;
        margin-bottom: 20px;
      }
      .footer {
        background-color: #343a40;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        margin-top: 20px;
        border-radius: 5px;
      }
      .header h2 {
        font-family: "Comic Sans MS", cursive, sans-serif;
      }
      .content {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <!-- Sidebar -->
        <nav class="col-3 sidebar">
          <h4 class="text-center">Admin Toko Dvaaang</h4>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a href="<?= base_url('admin/dashboard')?>" class="nav-link active">Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/daftar-barang')?>" class="nav-link">Daftar Toko Dvaaang</a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/transaksi')?>" class="nav-link">Transaksi</a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/pelanggan')?>" class="nav-link">Pelanggan</a>
            </li>
          </ul>
        </nav>

        <!-- Main Content -->
        <main class="col-9">
          <div class="header">
            <h2>Welcome, Admin Toko Dvaaang</h2>
            <a href="<?= base_url('logout')?>" class="btn btn-light text-danger">Logout</a>
          </div>
          <div class="content">
            <?= $this->renderSection('main'); ?>
          </div>
        </main>
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        Copyright 2024. Toko Dvaaang . All rights reserved.
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
