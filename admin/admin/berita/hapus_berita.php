<?php
//Mengambil nilai ID berita dan nama file gambar dari parameter URL.
$id_berita = $_GET['id'];
$foto = isset($_GET['filenya']) ? $_GET['filenya'] : '';

// Koneksi ke MySQLi
$koneksi = mysqli_connect("localhost:3307", "root", "", "dbmpl");
// Memeriksa apakah koneksi ke database berhasil. Jika tidak,
// script akan berhenti dan menampilkan pesan kesalahan.
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
// Menghapus data berita dari tabel tbl_berita berdasarkan ID
if ($foto == "") {
    $query = mysqli_query($koneksi, "DELETE FROM tbl_berita WHERE id_berita='$id_berita'");
} else {
    $query = mysqli_query($koneksi, "DELETE FROM tbl_berita WHERE gambar='$foto'");
    unlink("berita/foto/$foto");
}

if ($query) {
    echo "<script>alert('data berhasil dihapus...');
    document.location.href='?page=berita'; </script>\n";
} else {
    echo "<script>alert('hapus gagal');
    document.location.href='?page=berita'; </script>\n";
}

mysqli_close($koneksi);
?>
