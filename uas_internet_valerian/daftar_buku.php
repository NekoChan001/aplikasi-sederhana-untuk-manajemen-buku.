<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* CSS yang sudah ada */

        /* Container styling */
        .container {
            width: 50%;
            max-width: 800px; /* Set maksimum lebar container */
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.5); /* Transparansi 50% */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        /* Table styling */
        table {
            width: 100%;
            max-width: 800px; /* Set maksimum lebar tabel */
            margin: auto; /* Tengahkan tabel */
            background: rgba(128, 128, 128, 0.5); /* Transparansi 50% */
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        /* Table cell styling */
        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        /* Table header styling */
        th {
            background-color: #333;
            color: white;
        }

        /* Link styling */
        a {
            color: #333;
            text-decoration: none;
            display: inline-block;
            text-align: center; /* Tengahkan teks */
        }

        /* Hover effect for links */
        a:hover {
            color: #e8491d;
        }

        /* Center the text */
        h2 {
            text-align: center;
        }
        nav {
            text-align: center;
        }
        nav a.highlight {
            text-align: center;
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

    <!-- Konten daftar_buku.php -->
</body>
</html>


<?php
include 'koneksi.php';

$query = "SELECT * FROM buku";
$result = $koneksi->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h2>Daftar Buku</h2>
    <table border="1">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>ISBN</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td>" . $row["author"] . "</td>";
            echo "<td>" . $row["published_year"] . "</td>";
            echo "<td>" . $row["isbn"] . "</td>";
            echo "<td><a href='edit_buku.php?id=" . $row["id"] . "'>Edit</a> | <a href='hapus_buku.php?id=" . $row["id"] . "'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <a href="tambah_buku.php">Tambah Buku Baru</a>
    
</body>
</html>
