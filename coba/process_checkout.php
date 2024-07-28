
<?php
// Langkah 1: Menghubungkan ke database
include 'database.php';



// Langkah 2: Mengambil data dari tabel keranjang
$sql = "SELECT * FROM cart";
$result = mysqli_query($conn, $sql);

$totalPrice = 0; // Variabel untuk menyimpan total harga

if (mysqli_num_rows($result) > 0) {
    // Menghitung total harga dari semua item di dalam keranjang
    while ($row = mysqli_fetch_assoc($result)) {
        $totalPrice += $row['quantity'] * $row['price'];
    }
}

// Langkah 3: Simpan informasi pesanan ke dalam tabel pesanan
$nama_pelanggan = "Nama Pelanggan"; // Ganti dengan nama pelanggan yang sebenarnya
$alamat_pelanggan = "Alamat Pelanggan"; // Ganti dengan alamat pelanggan yang sebenarnya
$email_pelanggan = "email@pelanggan.com"; // Ganti dengan alamat email pelanggan yang sebenarnya
$metode_pembayaran = "Metode Pembayaran"; // Ganti dengan metode pembayaran yang sebenarnya

// Menambahkan total harga ke dalam tabel pesanan
$sql = "INSERT INTO pesanan (nama_pelanggan, alamat_pelanggan, email_pelanggan, metode_pembayaran, total_harga) 
        VALUES ('$nama_pelanggan', '$alamat_pelanggan', '$email_pelanggan', '$metode_pembayaran', '$totalPrice')";

if (mysqli_query($conn, $sql)) {
    echo "Pesanan berhasil dibuat. Total harga: $" . $totalPrice;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Langkah 4: Menutup koneksi
mysqli_close($conn);
?>
