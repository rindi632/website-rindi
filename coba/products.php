<?php
session_start(); // Memulai sesi
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Mengarahkan ke login jika belum masuk
}
include 'database.php'; // Meng-include konfigurasi database

// Menjalankan query untuk mendapatkan semua produk
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk - Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        img {
        width: 50%;
        height: auto;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #;
        }
        tr:nth-child(even) {background-color: #f9f9f9;}
        a {
            text-decoration: none;
            color: #0275d8;
        }
        a:hover {
            color: #01447e;
        }
        .header {
            background-color: #0275d8;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .add-btn {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #0275d8;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .add-btn:hover {
            background-color: #01447e;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Tanaman Kami</h1>
    </div>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Tambah ke Keranjang</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row["name"]); ?></td>
                            <td>Rp<?= number_format($row["price"], 2, ',', '.'); ?></td>
                            <td><?= htmlspecialchars($row["image"]);echo "<div class='product'>";
                                                echo "<img src='images/" . htmlspecialchars($row["image"]) . "' alt='" . htmlspecialchars($row["name"]) . "'>"; ?>

                            <td>
                                <a href="keranjang.php" class="add-to-cart">Tambah ke Keranjang</a>
                            
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan='3'>Belum ada Produk yang ditambahkan.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
       
    </div>
</body>
</html>
