<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];

$query = "INSERT INTO buku (judul, penulis, penerbit, tahun_terbit)
          VALUES ('$judul','$penulis','$penerbit','$tahun')";

mysqli_query($conn, $query);

header("location:index.php");
?>