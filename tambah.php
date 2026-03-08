<?php
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku Baru - Simper-Lib</title>
    
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
        <h2>Tambah Data Buku Baru</h2>

        <form method="POST" action="proses_tambah.php" class="form-tambah">
            <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" id="judul" name="judul" required placeholder="Masukkan judul buku">
            </div>

            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" id="penulis" name="penulis" required placeholder="Nama penulis">
            </div>

            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" id="penerbit" name="penerbit" required placeholder="Nama penerbit">
            </div>

            <div class="form-group">
                <label for="tahun">Tahun Terbit</label>
                <input type="number" id="tahun" name="tahun" min="1900" max="<?php echo date('Y'); ?>" required placeholder="Contoh: 2024">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-simpan">Simpan Buku</button>
                <a href="index.php" class="btn btn-kembali">Kembali ke Daftar</a>
            </div>
        </form>
    </div>

</body>
</html>