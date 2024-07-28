<?php
session_start(); // Memulai sesi
include 'database.php'; // Memasukkan file konfigurasi database
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - HOME GREEN</title>
    <link rel="stylesheet" href="assets/css/Style.css"> <!-- Sesuaikan path jika diperlukan -->
</head>
<body>    
    <nav class="main-nav">
        <div class="wrapper">
            <div class="logo"><a href=''></a></div>
            <div class="main-menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Produk</a></li>
                <li><a href="keranjang.php">Keranjang</a></li>
                <li><a href="about.php">Tentang Kami</a></li>
                <li><a href="contact.php">Kontak</a></li>
                <li><a href="laporan_stok.php">laporan stok</a></li>
                <li><a href="laporan_harian.php">laporan harian </a></li>
                <li><a href="laporan_bulanan.php">laporan bulanan</a></li>
                <li><a href="laporan_tahunan.php">laporan tahunan</a></li>
                <li><a href="laporan_user.php">laporan user</a></li>
                <li><a href="laporan_produk.php">laporan produk</a></li>
                <?php if(isset($_SESSION['user_id'])): ?>
                    <li><a href="profile.php">Profil</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="Register.php">Register</a></li>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>

        <!-- Home -->
        <div class="home-wrapper">
            <section class="wrapper" id="Home">
            <div class="kolom">
                    <p class="deskripsi">Selamat Datang </p>
                    <H2 class="deksripsi-h2">HOME GREEN<br/>
                    
                      <p class="deksripsi-h3">Tersedia Tanaman Berkualitas<br/>
                </div>
            </section>
        </div>
    

    <main>
        <section id="featured-products">
            <h2>Tanaman Unggulan</h2>
            <div class="products">
                <?php
                // Query untuk mendapatkan produk unggulan
                $query = "SELECT * FROM products LIMIT 9";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='product'>";
                        echo "<img src='./images/" . htmlspecialchars($row["image"]) . "' alt='" . htmlspecialchars($row["name"]) . "'>";
                        echo "<h3>" . htmlspecialchars($row["name"]) . "</h3>";
                        echo "<p>" . htmlspecialchars($row["description"]) . "</p>";
                        echo "<p>Rp" . htmlspecialchars($row["price"]) . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Tidak ada produk unggulan saat ini.</p>";
                }
                
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> HOME GREEN. Pilihan Terbaik.</p>
    </footer>
</body>
</html>
