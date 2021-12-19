 
<?php
// deklarasi parameter koneksi database
$server   = "localhost";
$username = "root";
$password = "";
$database = "db_siswa";


// koneksi database
$db_siswa = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$db_siswa) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
?>