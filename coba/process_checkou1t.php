<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $total = $_POST['total'];
    $metode_pembayaran = $_POST['metode_pembayaran'];
    $query = "INSERT INTO pesanan (nama, alamat, metode) VALUES ('$nama', '$alamat', '$metode_pembayaran')";
    // Proses pembayaran (contoh)
    // Di sini Anda akan memasukkan logika pembayaran sesuai dengan metode pembayaran yang dipilih
    // Misalnya, jika metode pembayaran adalah transfer bank, Anda akan menyimpan informasi pesanan ke database
    // dan menampilkan halaman konfirmasi kepada pengguna.

    // Simpan informasi pesanan ke database (contoh)
    // $koneksi = mysqli_connect("localhost", "username", "password", "nama_database");
    // $query = "INSERT INTO pesanan (nama, alamat, metode_pembayaran) VALUES ('$nama', '$alamat', '$metode_pembayaran')";
    // mysqli_query($koneksi, $query);

    // Setelah proses selesai, tampilkan halaman konfirmasi








    
    echo "<h2>Pesanan Anda berhasil diproses!</h2>";
    echo "<p>Terima kasih, $nama. Pesanan Anda sedang diproses. Kami akan segera mengirimkan pesanan Anda.</p>";
}
?>
