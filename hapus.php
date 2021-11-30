<?php
require_once('config.php');
// mengirimkan id yang ditangkap oleh variabel get
$id = $_GET["id"];

// query data untuk menghapus data
$query = mysqli_query($conn,"DELETE FROM employees WHERE id= $id");

// cek apakah data sudah terhapus atau belum
if($query){
    echo "<script>alert('Data berhasil dihapus!');
    document.location.href = 'index.php';
    </script>";
}else{
    echo "<script>alert('Data gagal dihapus!');
    document.location.href = 'index.php';
    </script>";
}


?>