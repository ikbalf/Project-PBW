<?php

include "config/fungsi_agenda.php";

$id_agenda  = $_GET['id'];
$foto       = $_GET['filenya'];

if ($foto == "") {
    // Gunakan koneksi mysqli (sesuai dengan perubahan sebelumnya)
    $query = mysqli_query($koneksi, "DELETE FROM tbl_agenda WHERE id_agenda='$id_agenda'");
} else {
    $query = mysqli_query($koneksi, "DELETE FROM tbl_agenda WHERE gambar_agenda='$foto'");
    unlink("agenda/foto/" . $_GET['filenya']);
}

if ($query) {
    echo "<script>alert('data berhasil dihapus...');
            document.location.href='?page=agenda'; </script>\n";
} else {
    echo "<script>alert('hapus gagal');
            document.location.href='?page=agenda'; </script>\n";
}

?>
