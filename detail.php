<?php
include "koneksi.php";

// Menggunakan MySQLi
$query = mysqli_query($koneksi, "SELECT * FROM tbl_agenda WHERE id_agenda='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>

<br>
<div class="wrapper">
  <div class="row">
    <div class="col-md-3" style="margin:30px;">
      <img src="admin/admin/agenda/foto/<?php echo $data['gambar_agenda']; ?>" style="width:300px; height:250px;">
    </div>
    <div class="col-md-6" style="margin-left:10px ; margin-top:10px;">
      <center> <td><b>Detail Agenda </b></td> </center>
      <table>
        <tr>
          <h3><td><b>Judul</b></td> <td> : <?php echo $data['judul_agenda']; ?></td></h3>
        </tr>

        <tr>
          <h3><td><b>Isi</b></td> <td> <?php echo $data['isi_agenda']; ?></td></h3>
        </tr>

        <tr>
          <h3><td><b>Tanggal</b></td> <td> : <?php echo $data['tanggal_agenda']; ?></td></h3>
        </tr>
      </table><br><br>

    </div>
  </div>
</div>
