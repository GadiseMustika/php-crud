
<?php

// include file config.php
require_once('config.php');

// ambil data dari tabel barang
$query = mysqli_query($conn, "SELECT * FROM employees");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>

<body>


    <div class="container mt-4">
        <h4 class="text-center">Daftar Karyawan</h4>
        <div class="row">
            <div class="col-sm-12 my-4">
                <a href="tambah.php"><button class="btn btn-danger"> + Tambah data</button></a>
                <table class="table table-bordered mt-4">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Penghasilan</th>
                            <th scope="col">Hobi</th>
                            <th scope="col">Telpon</th>
                            <th scope="col">Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1 ?>
                        <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $row["nama"] ?></td>
                                <td><?= $row["alamat"] ?></td>
                                <td><?= $row["penghasilan"] ?></td>
                                <td><?= $row["hobi"] ?></td>
                                <td><?= $row["telepon"] ?></td>
                                <td><?= $row["status"] ?></td>
                                <td>
                                    <div class="row p-2">
                                        <div class="col-sm-6">
                                            <a href="">ubah</a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="hapus.php?id=<?=$row["id"]?>">hapus</a>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                    </tbody>
                    <?php $i++; ?>
                <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>