<!DOCTYPE html>
<html>
<head>
    <title>Hapus Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- Konten hapus_buku.php -->
</body>
</html>

<?php
include 'koneksi.php';

$id = $_GET["id"];
$query = "DELETE FROM buku WHERE id=$id";
$result = $koneksi->query($query);

if ($result) {
    header("Location: daftar_buku.php");
} else {
    echo "Gagal menghapus buku.";
}
?>
