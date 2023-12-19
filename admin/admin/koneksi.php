<?php
$servername = "localhost:3307";
$username   = "root";
$password   = "";
$dbname     = "dbmpl";

// Create connection
$koneksi = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
