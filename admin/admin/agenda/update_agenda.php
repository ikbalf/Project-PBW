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

// Apabila ada gambar yang diupload
if (empty($lokasi_file)) {
    $q = mysqli_query($koneksi, "UPDATE tbl_agenda SET 
                                    username        = '$_POST[username]',
                                    judul_agenda    = '$_POST[judul_agenda]',
                                    isi_agenda      = '$_POST[isi_agenda]',
                                    tanggal_agenda  = '$tanggal_agenda'
                                    WHERE id_agenda  = '$_GET[id]'");
} else {
    UploadFile($nama_file);

    $q = mysqli_query($koneksi, "UPDATE tbl_agenda SET 
                                    username        = '$_POST[username]',
                                    judul_agenda    = '$_POST[judul_agenda]',
                                    isi_agenda      = '$_POST[isi_agenda]',
                                    tanggal_agenda  = '$tanggal_agenda',
                                    gambar_agenda   = '$nama_file'
                                    WHERE id_agenda  = '$_GET[id]'");
}

if ($q) {
    echo "<script>alert('data berhasil di update...');
            document.location.href='?page=agenda'; </script>\n";
} else {
    echo "<script>alert('gagal di update');
            document.location.href='?page=agenda'; </script>\n";
}

mysqli_close($koneksi);
?>
