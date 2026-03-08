<?php
include 'koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];

$query = "UPDATE buku SET
          judul='$judul',
          penulis='$penulis',
          penerbit='$penerbit',
          tahun_terbit='$tahun'
          WHERE id='$id'";

mysqli_query($conn, $query);

header("location:index.php");
?>