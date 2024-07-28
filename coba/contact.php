

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Person</title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        form {
            max-width: 700px;
            margin: 20px auto;
            background: white;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin: 15px 0 30px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box; /* Makes sure the padding does not affect the total width of the inputs */
        }
        input[type="submit"] {
            background-color: #0275d8;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #01447e;
        }
        form br {
            display: none;
        }
    </style>
</head>
<body>
    <h2>Formulir Contact Person</h2>
    <form action="submit_contact.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        
        <label for="telepon">Telepon:</label><br>
        <input type="text" id="telepon" name="telepon"><br>
        
        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat"></textarea><br>
        
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
