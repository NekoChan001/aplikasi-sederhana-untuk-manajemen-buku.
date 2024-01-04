<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.5); /* Warna abu dengan opasitas 50% */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        form {
            width: 100%;
            background: rgba(128, 128, 128, 0.5); /* Warna abu dengan opasitas 50% untuk form */
            padding: 20px;
            border-radius: 8px;
        }

        form input[type="text"],
        form input[type="number"],
        form input[type="submit"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            display: inline-block;
        }

        form input[type="submit"] {
            background-color: #e8491d;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #333;
        }
        
        h2 {
            text-align: center;
        }

        /* Footer styling */
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Manajemen Buku</span></h1>
            </div>
            <nav>
                <a href="tambah_buku.php" class="highlight">Tambah Buku</a>
                <a href="daftar_buku.php">daftar Buku</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <h2>Tambah Buku</h2>
        <form method="post" action="">
            Judul: <input type="text" name="judul" required><br>
            Penulis: <input type="text" name="penulis" required><br>
            Tahun Terbit: <input type="number" name="tahun_terbit" required><br>
            ISBN: <input type="text" name="isbn" required><br>
            <input type="submit" value="Tambahkan">
        </form>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2024 Valerian Permana Sukma
    </footer>
</body>
</html>

<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $tahun_terbit = $_POST["tahun_terbit"];
    $isbn = $_POST["isbn"];

    // Jangan menyertakan nilai untuk kolom id
    $query = "INSERT INTO buku (title, author, published_year, isbn) VALUES ('$judul', '$penulis', $tahun_terbit, '$isbn')";
    $result = $koneksi->query($query);

    if ($result) {
        header("Location: daftar_buku.php");
    } else {
        echo "Gagal menambahkan buku.";
    }
}
?>
