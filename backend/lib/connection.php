<?php 
    $hostname = 'localhost';
    $username = 'root';
    $password = ''; // Secara default dikosongkan
    $database = 'crud_dasar'; // Nama database kalian

    // Koneksi ke database
    $connection = mysqli_connect($hostname, $username, $password, $database);
?>