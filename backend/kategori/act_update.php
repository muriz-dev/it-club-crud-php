<?php 
    // Mengambil variabel $connection yang ada di folder lib/connection.php
    require_once('../lib/connection.php');

    // Menyiapkan variabel atau wadah untuk menyimpan data dari form
    $idKategori = $_GET['id_kategori'];
    $namaKategori = $_GET['nama_kategori'];

    // Proses mengubah data kategori berdasarkan id kategori
    $query = "UPDATE kategori SET nama_kategori='$namaKategori' WHERE id_kategori='$idKategori'";
    $result = mysqli_query($connection, $query);
 
    // Kondisi jika data berhasil ditambahkan atau gagal ditambahkan
    if ($result) {
        echo "
            <script>
                alert('Kategori berhasil diubah');
                window.location = '../../pages/kategori/kategori.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Kategori gagal diubah');
                history.go(-1);
            </script>
        ";
    }
?>