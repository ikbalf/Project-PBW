<?php

include "config/fungsi_profil.php";
// Ganti fungsi mysql_query dengan mysqli_query dan sesuaikan koneksi ke database
$koneksi = mysqli_connect("localhost:3307", "root", "", "dbmpl");

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];

$judul_profil = $_POST['judul_profil'];
$isi_profil   = $_POST['isi_profil'];

if (empty($judul_profil) or empty($isi_profil)) {
    echo "<script>alert('data tidak boleh kosong');
    document.location.href='?page=input_profil'; </script>\n";
    exit;
}

if (!empty($lokasi_file)) {
    UploadFile($nama_file);

    // Gunakan parameter $koneksi untuk mysqli_query
    $query = mysqli_query($koneksi, 'INSERT INTO tbl_profil (judul_profil, isi_profil, gambar_profil) VALUES ("' . $judul_profil . '"
    ,"' . $isi_profil . '"
    ,"' . $nama_file . '")');
} else {
    // Gunakan parameter $koneksi untuk mysqli_query
    $query = mysqli_query($koneksi, 'INSERT INTO tbl_profil (judul_profil, isi_profil, gambar_profil) VALUES ("' . $judul_profil . '"
    ,"' . $isi_profil . '"
    ,"' . $nama_file . '")');
}

if ($query) {
    echo "<script>alert('data berhasil disimpan');
    document.location.href='?page=profil'; </script>\n";
} else {
    echo "<script>alert('data gagal disimpan');
    document.location.href='?page=profil'; </script>\n";
}

// Tutup koneksi setelah penggunaan
mysqli_close($koneksi);

?>
