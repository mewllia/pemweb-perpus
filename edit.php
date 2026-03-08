<?php
include 'koneksi.php';

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$query = "SELECT * FROM buku WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "<p style='color:red; text-align:center;'>Data buku tidak ditemukan!</p>";
    exit;
}

$data = mysqli_fetch_assoc($result);
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
        <h2>Edit Data Buku</h2>

        <form method="POST" action="proses_edit.php" class="form-edit">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

            <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" id="judul" name="judul" value="<?php echo htmlspecialchars($data['judul']); ?>" required>
            </div>

            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" id="penulis" name="penulis" value="<?php echo htmlspecialchars($data['penulis']); ?>" required>
            </div>

            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" id="penerbit" name="penerbit" value="<?php echo htmlspecialchars($data['penerbit']); ?>" required>
            </div>

            <div class="form-group">
                <label for="tahun">Tahun Terbit</label>
                <input type="number" id="tahun" name="tahun" value="<?php echo $data['tahun_terbit']; ?>" min="1900" max="<?php echo date('Y'); ?>" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-update">Update Buku</button>
                <a href="index.php" class="btn btn-kembali">Kembali ke Daftar</a>
            </div>
        </form>
    </div>

</body>
</html>