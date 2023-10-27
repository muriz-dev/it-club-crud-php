<?php 
    // Mengambil variabel $connection yang ada di folder backend/lib/connection.php
    require_once('../../backend/lib/connection.php');

    // Mengambil data id dari URL menggunakan method GET
    $id = $_GET['id'];

    // Proses mendapatkan data kategori saat ini berdasarkan id kategori
    $query = "SELECT * FROM kategori WHERE id_kategori='$id'";
    $result = mysqli_query($connection, $query);
    $data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Kategori</title>
</head>
<body>
    <form action="../../backend/kategori/act_update.php" method="get">
        <input type="hidden" name="id_kategori" value="<?= $data['id_kategori'] ?>">
        <label>Nama Kategori: </label><input type="text" name="nama_kategori" value="<?= $data['nama_kategori'] ?>">
        <br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>