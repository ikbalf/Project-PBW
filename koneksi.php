<?php
$server = "localhost:3307";
$username = "root";
$password = "";
$db_name = "dbmpl";

$koneksi = mysqli_connect($server, $username, $password, $db_name);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memilih basis data
if (!mysqli_select_db($koneksi, $db_name)) {
    die("Gagal memilih basis data: " . mysqli_error($koneksi));
}
?>