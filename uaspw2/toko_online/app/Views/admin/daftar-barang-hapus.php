<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus barang</title>
    <link rel="stylesheet" href="/path/to/your/css/styles.css"> 
</head>
<body>
    <div class="container">
        <h1>Konfirmasi Hapus barang</h1>

        <?php if (isset($barang)): ?>
            <p>Apakah Anda yakin ingin menghapus barang Ini??</p>
            <ul>
                <li><strong>Nama:</strong> <?= htmlspecialchars($barang['nama']); ?></li>
                <li><strong>Harga:</strong> Rp <?= number_format($barang['harga'], 2, ',', '.'); ?></li>
                <li><strong>Stok:</strong> <?= htmlspecialchars($barang['stok']); ?></li>
            </ul>

            <form action="/admin/daftar-barang/hapus/<?= $barang['id']; ?>" method="post">
                <?= csrf_field(); ?> 
                <button type="submit" class="btn btn-danger">Hapus</button>
                <a href="/admin/daftar-barang" class="btn btn-secondary">Batal</a>
            </form>
        <?php else: ?>
            <p>Data Barang tidak ditemukan.</p>
            <a href="/admin/daftar-barang" class="btn btn-secondary">Kembali ke Daftar Barang</a>
        <?php endif; ?>
    </div>
</body>
</html>