<?php
include "config/fungsi_gambar.php";
include "config/koneksi.php"; // Sertakan file koneksi

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];

$username = $_POST['username'];
$kategori = $_POST['kategori'];
$judul    = $_POST['judul'];
$isi      = $_POST['isi'];
$tanggal  = $_POST['tanggal'];
$jam      = $_POST['jam'];

if (empty($kategori) or empty($judul) or empty($isi)) {
    echo "<script>alert('Data tidak boleh kosong');
    document.location.href='?page=input_berita'; </script>\n";
    exit;
}

if (!empty($lokasi_file)) {
    UploadFile($nama_file);
    // Sertakan 'kategori' dalam pernyataan SQL INSERT
    $query = mysqli_query($koneksi, "INSERT INTO tbl_berita (username, kategori, judul, isi, tanggal, jam, gambar) VALUES ('$username', '$kategori', '$judul', '$isi', '$tanggal','$jam', '$nama_file')");
} else {
    // Sertakan 'kategori' dalam pernyataan SQL INSERT
    $query = mysqli_query($koneksi, "INSERT INTO tbl_berita (username, kategori, judul, isi, tanggal, jam) VALUES ('$username', '$kategori', '$judul', '$isi', '$tanggal','$jam')");
}

if ($query) { // Ganti $stmt menjadi $query
    echo "<script>alert('Data berhasil disimpan');
    document.location.href='?page=berita'; </script>\n";
} else {
    echo "<script>alert('Data gagal disimpan');
    document.location.href='?page=berita'; </script>\n";
}
?>
