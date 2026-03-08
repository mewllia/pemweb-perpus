<?php
include 'koneksi.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php?pesan=error&id_tidak_valid");
    exit;
}

$id = mysqli_real_escape_string($conn, $_GET['id']);

$query = "DELETE FROM buku WHERE id = '$id'";

if (mysqli_query($conn, $query)) {
    header("Location: index.php?pesan=berhasil_hapus");
} else {
    header("Location: index.php?pesan=gagal_hapus&error=" . urlencode(mysqli_error($conn)));
}

exit;
?>