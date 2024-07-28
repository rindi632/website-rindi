<?php 
include 'database.php';


// Langkah 3: Simpan informasi pesanan ke dalam tabel pesanan
$nama_pelanggan = "Nama Pelanggan"; // Ganti dengan nama pelanggan yang sebenarnya
$alamat_pelanggan = "Alamat Pelanggan"; // Ganti dengan alamat pelanggan yang sebenarnya
$email_pelanggan = "email@pelanggan.com"; // Ganti dengan alamat email pelanggan yang sebenarnya
$metode_pembayaran = "Metode Pembayaran"; // Ganti dengan metode pembayaran yang sebenarnya
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Home Green</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* CSS Khusus untuk halaman checkout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        select {
            appearance: none;
            padding: 10px 40px 10px 10px;
            background-image: url('https://cdn.iconscout.com/icon/free/png-256/down-arrow-1767486-1504495.png');
            background-size: 20px;
            background-position: right 10px center;
            background-repeat: no-repeat;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Checkout</h2>
    <form action="process_checkout.php" method="post">
        
    <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
    
    <label for="alamat">Alamat Pengiriman:</label><br>
        <textarea id="alamat" name="alamat" required></textarea><br><label for="metode_pembayaran">Metode Pembayaran:</label><br>
        <select id="metode_pembayaran" name="metode_pembayaran" required>
            <option value="transfer_bank">Transfer Bank</option>
            <option value="cod">Cash on Delivery</option>
        </select><br><br>
        
        <input type="submit" value="Checkout">
        
        
        
    </form>
</body>
</html>
