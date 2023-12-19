<?php
include "config/fungsi_profil.php";
extract($_POST);

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];

// Apabila ada gambar yang diupload
if (empty($lokasi_file)) {
    $q = mysqli_query($koneksi, "UPDATE tbl_profil SET 
                                   judul_profil = '$_POST[judul_profil]',
                                   isi_profil = '$_POST[isi_profil]'
                                   WHERE id_profil = '$_GET[id]'");
} else {
    UploadFile($nama_file);

    $q = mysqli_query($koneksi, "UPDATE tbl_profil SET 
                                    judul_profil = '$_POST[judul_profil]',
                                    isi_profil = '$_POST[isi_profil]',
                                    gambar_profil = '$nama_file'
                                    WHERE id_profil = '$_GET[id]'");
}

if ($q) {
    echo "<script>alert('Data berhasil diupdate...');
          document.location.href='?page=profil'; </script>\n";
} else {
    echo "<script>alert('Gagal diupdate');
          document.location.href='?page=profil'; </script>\n";
}
?>
