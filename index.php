<?php
include 'koneksi.php';

if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == 'berhasil_hapus') {
        echo '<div class="alert alert-success">Buku berhasil dihapus!</div>';
    } elseif ($_GET['pesan'] == 'gagal_hapus') {
        $error = isset($_GET['error']) ? $_GET['error'] : 'Terjadi kesalahan.';
        echo '<div class="alert alert-danger">Gagal menghapus buku: ' . htmlspecialchars($error) . '</div>';
    }
    
}

$query = "SELECT * FROM buku";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku - Simper-Lib</title>
    <link rel="stylesheet" href="style.css">

    <!-- Google Fonts: Mountains of Christmas -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mountains+of+Christmas:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>ʚɞ Sistem Informasi Perpustakaan Cilik ʚɞ</h1>
    </header>

    <div class="container">
        <div class="header-page">
            <h2>Data Buku Perpustakaan</h2>
            <a href="tambah.php" class="btn btn-tambah">+ Tambah Buku Baru</a>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($result) > 0): ?>
                        <?php while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td data-label="ID"><?php echo $row['id']; ?></td>
                            <td data-label="Judul"><?php echo htmlspecialchars($row['judul']); ?></td>
                            <td data-label="Penulis"><?php echo htmlspecialchars($row['penulis']); ?></td>
                            <td data-label="Penerbit"><?php echo htmlspecialchars($row['penerbit']); ?></td>
                            <td data-label="Tahun"><?php echo $row['tahun_terbit']; ?></td>
                            <td data-label="Aksi" class="aksi">
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-edit">Edit</a>
                                <a href="hapus.php?id=<?php echo $row['id']; ?>" 
                                   class="btn btn-hapus"
                                   onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center">Belum ada data buku.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>