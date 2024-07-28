<?php
include 'database.php'; // Include konfigurasi database


// Tangkap data dari formulir
$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

// Query SQL untuk memasukkan data ke dalam tabel
$sql = "INSERT INTO contact_person (nama, email, telpon, alamat) VALUES ('$nama', '$email', '$telepon', '$alamat')";

if (mysqli_query($conn, $sql)) {
    echo "<p>Data contact person berhasil disimpan.</p>";
} else {
    echo "<p>Terjadi kesalahan: " . mysqli_error($conn) . "</p>";
}

// Tutup koneksi
mysqli_close($conn);
?>
