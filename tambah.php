<?php
require_once("config.php");
// mengecek apakah tombol submit sudah ditekan apa belum
if(isset($_POST["submit"] )){
    

    /* Menangkap data dari form input dan dimasukkan kedalam variabel superglobal $_POST */
    $nama = htmlspecialchars($_POST["nama"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $penghasilan = htmlspecialchars($_POST["penghasilan"]);
    $hobi = htmlspecialchars($_POST["hobi"]);
    $telepon = htmlspecialchars($_POST["telepon"]);
    $status = htmlspecialchars($_POST["status"]);

    // query insert data
   $result =  mysqli_query($conn, "INSERT INTO employees VALUES ('','$nama','$alamat', '$penghasilan','$hobi','$telepon','$status' )");
   
// tampilkan pesan ketika user menambahkan
    if($result){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }else{
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>";
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

        <form action="" method="post" class="my-4 mx-2">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Karyawan">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Karyawan">
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="penghasilan" class="form-label">Penghasilan</label>
                        <input type="text" name="penghasilan" id="penghasilan" class="form-control" placeholder="Penghasilan Karyawan">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="hobi" class="form-label">Hobi</label>
                        <input type="text" name="hobi" id="hobi" class="form-control" placeholder="Hobi Karyawan">
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Telepon Karyawan">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" name="status">
                            <option selected>-- Pilih Status Karyawan --</option>
                            <option value="menikah">Menikah</option>
                            <option value="single">Single</option>
                            <option value="jomblo">Jomblo</option>
                        </select>
                    </div>
                </div>

                <button type="submit" value="simpan" name="submit" class="btn btn-danger my-4">Tambah Data</button>
            </div>
    </div>


    </form>
    </div>


</body>

</html>