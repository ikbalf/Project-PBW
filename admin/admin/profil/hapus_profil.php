<?php

$id_profil = $_GET['id'];

// Periksa apakah kunci "filenya" sudah ada atau belum
$foto = isset($_GET['filenya']) ? $_GET['filenya'] : "";

if ($foto == "") {
    $query = mysqli_query($koneksi, "DELETE FROM tbl_profil WHERE id_profil='$id_profil'");
} else {
    $query = mysqli_query($koneksi, "DELETE FROM tbl_profil WHERE gambar_profil='$foto'");
    unlink("profil/foto/$_GET[filenya]");
}

if ($query) {
    echo "<script>alert('Data berhasil dihapus...');
          document.location.href='?page=profil'; </script>\n";
} else {
    echo "<script>alert('Hapus gagal');
          document.location.href='?page=profil'; </script>\n";
}
?>
