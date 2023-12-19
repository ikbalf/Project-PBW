<?php

include "config/fungsi_agenda.php";
extract($_POST);

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];

$tanggal_agenda = date('Y-m-d');

// Connect to the database using MySQLi
$koneksi = mysqli_connect("localhost:3307", "root", "", "dbmpl");

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

if (empty($judul_agenda) or empty($isi_agenda)) {
    echo "<script>alert('data tidak boleh kosong');
            document.location.href='?page=input_agenda'; </script>\n";
    exit;
}

if (!empty($lokasi_file)) {
    UploadFile($nama_file);

    $query = mysqli_query($koneksi, 'INSERT INTO tbl_agenda (username,judul_agenda,isi_agenda,tanggal_agenda,gambar_agenda) VALUES (
        "'.$username.'",
        "'.$judul_agenda.'",
        "'.$isi_agenda.'",
        "'.$tanggal_agenda.'",
        "'.$nama_file.'"
    )');
} else {
    $query = mysqli_query($koneksi, 'INSERT INTO tbl_agenda (username,judul_agenda,isi_agenda,tanggal_agenda,gambar_agenda) VALUES (
        "'.$username.'",
        "'.$judul_agenda.'",
        "'.$isi_agenda.'",
        "'.$tanggal_agenda.'",
        "'.$nama_file.'"
    )');
}

if ($query) {
    echo "<script>alert('data berhasil disimpan');
            document.location.href='?page=agenda'; </script>\n";
} else {
    echo "<script>alert('data gagal disimpan');
            document.location.href='?page=agenda'; </script>\n";
}

mysqli_close($koneksi);
?>
