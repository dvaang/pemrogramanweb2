<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            background:rgb(51, 127, 242);
        }

        .sidebar {
            width: 260px;
            background: linear-gradient(135deg,rgb(19, 56, 124) 0%, #2a5298 100%);
            padding: 25px 15px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: rgba(45, 32, 127, 0.1);
            margin: 5px 0;
        }

        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(5px);
        }

        .content {
            flex: 1;
            padding: 25px;
            overflow-y: auto;
        }

        .header {
            background: white;
            padding: 15px 25px;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .logout {
            background:rgb(18, 55, 223);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .logout:hover {
            background:rgb(38, 47, 175);
            transform: translateY(-2px);
        }

        h2 {
            color:rgb(3, 17, 21);
            margin-bottom: 20px;
            font-size: 24px;
        }

        table {
            width: 100%;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-collapse: collapse;
        }

        th {
            background:rgb(109, 149, 174);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 500;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        tr:hover {
            background:rgb(0, 0, 0);
        }

        .img-thumbnail {
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .img-thumbnail:hover {
            transform: scale(1.05);
        }

        .action-buttons {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .action-buttons button {
            padding: 8px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .action-buttons button:first-child {
            background:rgb(133, 46, 204);
            color: white;
        }

        .btn-hapus {
            background:rgb(6, 26, 114);
            color: white;
        }

        .action-buttons button:hover {
            transform: translateY(-2px);
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .btn-tambah {
            display: inline-block;
            background: linear-gradient(135deg,rgb(15, 214, 194) 0%,rgb(11, 179, 151) 100%);
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 8px;
            margin-top: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(12, 25, 210, 0.1);
        }

        .btn-tambah:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(7, 78, 154, 0.2);
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .content {
                padding: 15px;
            }

            table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
        <a href="<?= base_url()?>">Barang Store</a>
        <a href="<?= base_url('admin/transaksi')?>">Transaksi</a>
        <a href="<?= base_url('admin/pelanggan')?>">Pelanggan</a>
    </div>
    <div class="content">
        <div class="header">
            <a href="<?= base_url('admin/dashboard') ?>">
            <button class="logout" >Kembali</button>
            </a>
        </div>

        <h2>Barang Store</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($barangs as $barang): ?>
                    <tr>
                        <td><?= htmlspecialchars($barang['nama']) ?></td>
                        <td><?= htmlspecialchars($barang['harga']) ?></td>
                        <td class="text-center">
                            <img src="<?= base_url($barang['gambar'])?>" 
                                alt="<?= $barang['nama'] ?>" 
                                class="img-thumbnail"
                                style="width: 100px; height: 100px; object-fit: cover;">
                        </td>
                        <td><?= htmlspecialchars($barang['stok']) ?></td>
                        <td>
                            <div class="action-buttons">
                                <a href="<?= base_url('admin/daftar-barang/edit') ?>/<?= $barang['id'] ?>">
                                    <button>Edit</button>
                                </a>
                                <button class="btn btn-hapus" onclick="if(confirm('Apakah Anda yakin ingin menghapus data ini?')) location.href='<?= base_url('admin/daftar-barang/hapus/' . $barang['id']) ?>';">Hapus</button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="<?= base_url('admin/daftar-barang/tambah') ?>" class="btn-tambah">Tambah barang</a>
    </div>
</body>
</html>