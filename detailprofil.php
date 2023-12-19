<br>
<div class="wrapper">
  <div class="container">
    <?php
    include "koneksi.php";
    $id = $_GET['id'];

    // Menggunakan MySQLi
    $query = "SELECT * FROM tbl_profil WHERE id_profil='$id'";
    $result = mysqli_query($koneksi, $query);
    $r = mysqli_fetch_array($result);
    ?>
    <br>
    <div class="col-lg-4">
      <img src="admin/admin/profil/foto/<?php echo $r['gambar_profil']; ?>" style="width:250px; height:250px;">
    </div>
    <div class="col-lg-8">
      <h1><?php echo "$r[judul_profil]"; ?></h1>
      <?php echo "$r[isi_profil]"; ?>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
