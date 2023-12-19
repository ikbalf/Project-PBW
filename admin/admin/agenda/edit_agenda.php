
      <td width="753" height="250" align="left" bgcolor="#FFFFFF"><div align="center">EDIT Jadwal
        </div>
        <table width="755" border="0">
          <tr>
            <td width="27">&nbsp;</td>
            <td width="702">&nbsp;</td>
            <td width="10">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><p align="left">        
                <form enctype="multipart/form-data" method="post" action="?page=update_agenda&id=<?php echo $_GET['id'] ?>">
                  <table width="701" border="0">
                    <?php

$id = $_GET['id'];
$edit		= "select * from tbl_agenda where id_agenda=$id";
$hasil = mysqli_query($koneksi, $edit); // Use mysqli_query instead of mysql_query
$c = mysqli_fetch_array($hasil); // Use mysqli_fetch_array instead of mysql_fetch_array
?>

					<tr>
                      <td><small><strong>Username</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="username" value="<?php echo $c['username']; ?>"></td>
                    </tr>
					<tr>
                      <td><small><strong>Judul Jadwal</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="judul_agenda" value="<?php echo $c['judul_agenda']; ?>"></td>
                    </tr>
					<tr>
                      <td><small><strong>Isi Jadwal</strong></small></td>
                      <td>:</td>
                      <td><textarea name="isi_agenda" cols="70" rows="30" id="isi"value="<?php echo $c['isi_agenda']; ?>"></textarea></td>
                    </tr>                 
					<tr>
                      <td><small><strong>Tanggal Jadwal</strong></small></td>
                      <td>:</td>
                      <td><input type="date" name="tanggal_agenda" value="<?php echo $c['tanggal_agenda']; ?>"></td>
                    </tr>
                    <tr>
                      <td><small><strong>Gambar</strong></small></td>
                      <td>:</td>
                      <td><input type="file" name="fupload" id="nama_file">
						  <input type="text" name="fupload1" id="nama_file" value="<?php echo $c['gambar_agenda']; ?>">
					  </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="Submit" value="Submit"></td>
                    </tr>
                  </table>
                </form>
                <p></p>
                <p></p></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
    </tr>
    