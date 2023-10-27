<?php 
    // Mengambil variabel $connection yang ada di folder lib/connection.php
    require_once('../lib/connection.php');

    // Mengambil data id kategori dari URL menggunakan method GET
    $idKategori = $_GET['id'];

    // Proses menghapus data kategori berdasarkan id kategori
    $query = "DELETE FROM kategori WHERE id_kategori='$idKategori'";
    $result = mysqli_query($connection, $query);
 
    // Kondisi jika data berhasil ditambahkan atau gagal ditambahkan
    if ($result) {
        echo "
            <script>
                alert('Kategori berhasil dihapus');
                window.location = '../../pages/kategori/kategori.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Kategori gagal dihapus');
                history.go(-1);
            </script>
        ";
    }
?>