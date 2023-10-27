<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori</title>
</head>
<body>
    <h3>Daftar Kategori</h3>
    <a href="tambah_kategori.php"><button>Tambah Kategori</button></a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php 
                require_once('../../backend/lib/connection.php');

                $query = "SELECT * FROM kategori";
                $result = mysqli_query($connection, $query);

                $loop = 1;
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "
                        <tr>
                            <td>$loop</td>
                            <td>$data[nama_kategori]</td>
                            <td>
                                <a href='ubah_kategori.php?id=$data[id_kategori]'>Edit</a>
                                <a href='../../backend/kategori/act_delete.php?id=$data[id_kategori]'>Hapus</a>
                            </td>
                        </tr>
                    ";

                    $loop++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>