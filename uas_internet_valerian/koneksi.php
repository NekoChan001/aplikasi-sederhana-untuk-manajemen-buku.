<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "uas_internet";

$koneksi = new mysqli($host, $user, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}
?>
