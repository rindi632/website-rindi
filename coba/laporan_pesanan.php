<!DOCTYPE html>
<html>
<head>
    <title>Laporan Transaksi Pesanan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function printReport() {
            window.print();
        }
    </script>
</head>
<body>

<h1>Laporan Pesanan Harian</h1>
<form method="get" id="form-input">
    <label for="tanggal">Pilih Tanggal:</label>
    <input type="date" id="tanggal" name="tanggal" value="<?php echo isset($_GET['tanggal']) ? $_GET['tanggal'] : date('Y-m-d'); ?>">
    <br><br>
    <label for="pimpinan">Nama Pimpinan:</label>
    <input type="text" id="pimpinan" name="pimpinan" value="<?php echo isset($_GET['pimpinan']) ? $_GET['pimpinan'] : ''; ?>">
    <br><br>
    <button type="submit">Tampilkan</button>
</form>
<button onclick="printReport()">Cetak Laporan</button>

<?php
include 'database.php';

$tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : date('Y-m-d');
$pimpinan = isset($_GET['pimpinan']) ? $_GET['pimpinan'] : '';

$sql = "SELECT t.id, t.total_harga, t.tanggal_pemesanan FROM pesanan p 
        JOIN products p ON t.id = p.id 
        WHERE t.tanggal = '$tanggal'";
$result = $conn->query($sql);

echo "<h2>Pesanan pada $tanggal</h2>";
if ($result->num_rows > 0) {
    echo "<table><tr><th>t.id</th><th>total_harga</th><th>tanggal_pemesanan</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["total_harga"]."</td><td>".$row["tanggal_pemesanan"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada transaksi pada tanggal ini.";
}

if ($pimpinan) {
    echo "<div class='signature'>";
    echo "<h3>Disetujui oleh:</h3>";
    echo "<p><strong>$pimpinan</strong></p>";
    echo "<br><br>";
    echo "<p>_______________________</p>";
    echo "<p>Tanda Tangan</p>";
    echo "</div>";
}
?>

</body>
</html>
