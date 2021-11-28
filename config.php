<?php
/* database kredensial. diasumsikan kamu sedanga berjalan di server mysql dengan settingan default (user,'root' tidak menggunakan password)*/ 
define('db_server','localhost');
define('db_username', 'root');
define('db_password','');
define('db_name', 'latihan_crud');


// Menyambungkan database
$conn = mysqli_connect(db_server,db_username,db_password,db_name);

// cek koneksi
if($conn === false){
    die("Error: could not connect".mysqli_connect_error());
}

/* mengecek tombol pesan ditekan  data tersebut sudah di update / dihapus*/



?>