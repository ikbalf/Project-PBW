<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <?php
    include "koneksi.php";
    $id = $_GET['id'];

    // Gunakan MySQLi
    $query = "SELECT * FROM tbl_berita WHERE id_berita='$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
      $r = mysqli_fetch_array($result);
    ?>
      <br>
      <div class="col-lg-4">
        <img src="admin/admin/berita/foto/<?php echo $r['gambar']; ?>" style="width:250px; height:250px;">
      </div>
      <div class="col-lg-8">
        <h1><?php echo $r['judul']; ?></h1>
        <?php echo $r['isi']; ?>
      </div>
      <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<?php
} else {
  echo "Error in query: " . mysqli_error($koneksi);
}

// Pastikan untuk menutup koneksi setelah selesai
mysqli_close($koneksi);
?>
