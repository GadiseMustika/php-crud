<?php
require_once("config.php");
// mengecek apakah tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {


    // tangkap data id dari url
    $id = $_GET["id"];
    /* Menangkap data dari form input dan dimasukkan kedalam variabel superglobal $_POST */
    $nama = htmlspecialchars($_POST["nama"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $penghasilan = htmlspecialchars($_POST["penghasilan"]);
    $hobi = htmlspecialchars($_POST["hobi"]);
    $telepon = htmlspecialchars($_POST["telepon"]);
    $status = htmlspecialchars($_POST["status"]);

    //  query data untuk update
    $query = mysqli_query($conn, "UPDATE employees SET 
     nama = '$nama',
     alamat = '$alamat',
     penghasilan = '$penghasilan',
     hobi = '$hobi',
     telepon = '$telepon',
     status = '$status'

     WHERE id = $id
    ");  

    // tampilkan pesan ketika user menambahkan
    if ($query) {
        echo "<script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "data gagal diubah!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karyawan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>

    <a href="./index.php">Kembali ke halaman</a>
    <div class="container mt-4">
        <h4 class="text-center">Tambah Data Karyawan</h4>

        <?php
        // tangkap id dengan melalui url 
        $id = $_GET["id"];
        // tampilkan data yang ada di dalam database yang id sudah ditangkap tadi
        $result =  mysqli_query($conn, "SELECT * FROM employees WHERE id = '$id'");

        // mengambil isi dari database karyawan
        while ($row = mysqli_fetch_assoc($result)) :
        ?>

            <form action="" method="post" class="my-4 mx-2">
                <div class="row">
                            <input type="hidden" name="id" id="id" class="form-control" placeholder="id Karyawan" value="<?= $row["id"]; ?>">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Karyawan" value="<?= $row["nama"]; ?>">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Karyawan" value="<?= $row["alamat"]; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="penghasilan" class="form-label">Penghasilan</label>
                                <input type="text" name="penghasilan" id="penghasilan" class="form-control" placeholder="Penghasilan Karyawan" value="<?= $row["penghasilan"]; ?>">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="hobi" class="form-label">Hobi</label>
                                <input type="text" name="hobi" id="hobi" class="form-control" placeholder="Hobi Karyawan" value="<?= $row["hobi"]; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="telepon" class="form-label">Telepon</label>
                                <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Telepon Karyawan" value="<?= $row["telepon"]; ?>">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="status" class="form-label">Status</label>
                                <?php $status = $row["status"]; ?>
                                <select class="form-select" name="status" >
                                    <option value="Menikah"<?= ($status === 'Menikah') ? 'selected' : '' ?> >Menikah</option>
                                    <option value="Single"<?= ($status === 'Single') ? 'selected' : '' ?> >Single</option>
                                    <option value="Jomblo"<?= ($status === 'Jomblo') ? 'selected' : '' ?> >Jomblo</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" value="simpan" name="submit" class="btn btn-danger my-4">Upd Data</button>
                    </div>
                </div>
            </form>
        <?php endwhile; ?>
    </div>
</body>

</html>