<?php
include "config/fungsi_gambar.php"; //  berisi fungsi-fungsi terkait pengelolaan gambar.  termasuk fungsi UploadFile()
extract($_POST);

$lokasi_file = $_FILES['fupload']['tmp_name']; // Mengambil informasi tentang file yang diunggah melalui formulir, seperti lokasi sementara dan nama file.
$nama_file   = $_FILES['fupload']['name'];
$tgl         = date('Y-m-d'); // Mengambil tanggal saat ini dalam format Y-m-d (tahun-bulan-tanggal).

// Connect to the database using MySQLi
$koneksi = mysqli_connect("localhost:3307", "root", "", "dbmpl");
// Memeriksa apakah koneksi ke database berhasil. Jika tidak, 
//script akan berhenti dan menampilkan pesan kesalahan.
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

// Mengecek apakah ada file yang diunggah. Jika tidak, hanya data teks yang diupdate. 
//Jika ada, file akan diunggah menggunakan fungsi UploadFile()
// dan data berserta nama file akan diupdate.
if (empty($lokasi_file))
//Menggunakan query SQL untuk mengupdate data berita di tabel tbl_berita berdasarkan parameter yang diberikan
 {
    $q = mysqli_query($koneksi, "UPDATE tbl_berita SET 
                                    username        = '$_POST[username]',
                                    kategori        = '$_POST[kategori]',
                                    judul           = '$_POST[judul]',
                                    isi             = '$_POST[isi]',
                                    tanggal         = '$tgl',
                                    jam             = '$jam'
                                    WHERE id_berita  = '$_GET[id]'");
} else {
    UploadFile($nama_file);

    $q = mysqli_query($koneksi, "UPDATE tbl_berita SET 
                                    username        = '$_POST[username]',
                                    kategori        = '$_POST[kategori]',
                                    judul           = '$_POST[judul]',
                                    isi             = '$_POST[isi]',
                                    tanggal         = '$tgl',
                                    jam             = '$jam',
                                    gambar          = '$nama_file'
                                    WHERE id_berita  = '$_GET[id]'");
}
//Menampilkan pesan berhasil atau gagal berdasarkan hasil dari query SQL.
if ($q) {
    echo "<script>alert('data berhasil di update...');
            document.location.href='?page=berita'; </script>\n";
} else {
    echo "<script>alert('gagal di update');
            document.location.href='?page=berita'; </script>\n";
}

mysqli_close($koneksi);
?>
