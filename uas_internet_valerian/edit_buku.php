<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- Konten edit_buku.php -->
</body>
</html>

<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $tahun_terbit = $_POST["tahun_terbit"];
    $isbn = $_POST["isbn"];

    $query = "UPDATE buku SET title='$judul', author='$penulis', published_year=$tahun_terbit, isbn='$isbn' WHERE id=$id";
    $result = $koneksi->query($query);

    if ($result) {
        header("Location: daftar_buku.php");
    } else {
        echo "Gagal mengedit buku.";
    }
} else {
    $id = $_GET["id"];
    $query = "SELECT * FROM buku WHERE id=$id";
    $result = $koneksi->query($query);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Buku</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Judul: <input type="text" name="judul" value="<?php echo $row['title']; ?>" required><br>
        Penulis: <input type="text" name="penulis" value="<?php echo $row['author']; ?>" required><br>
        Tahun Terbit: <input type="number" name="tahun_terbit" value="<?php echo $row['published_year']; ?>" required><br>
        ISBN: <input type="text" name="isbn" value="<?php echo $row['isbn']; ?>" required><br>
        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
