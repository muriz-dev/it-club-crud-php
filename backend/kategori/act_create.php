<?php 
    // Mengambil variabel $connection yang ada di folder lib/connection.php
    require_once('../lib/connection.php');

    // Menyiapkan variabel atau wadah untuk menyimpan data dari form
    $namaKategori = $_GET['nama_kategori'];

    // Proses menambahkan data kategori ke dalam database
    $query = "INSERT INTO kategori(nama_kategori) VALUES('$namaKategori')";
    $result = mysqli_query($connection, $query);
 
    // Kondisi jika data berhasil ditambahkan atau gagal ditambahkan
    if ($result) {
        echo "
            <script>
                alert('Kategori berhasil ditambahkan');
                window.location = '../../pages/kategori/kategori.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Kategori gagal ditambahkan');
                history.go(-1);
            </script>
        ";
    }
?>