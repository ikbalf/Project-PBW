
      <td width="753" height="250" align="left" bgcolor="#FFFFFF"><div align="center">EDIT BERITA
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
                <form enctype="multipart/form-data" method="post" action="?page=update_berita&id=<?php echo $_GET['id'] ?>">
                  <table width="701" border="0">
                  <?php
                            $id = $_GET['id'];
                            $edit = "SELECT * FROM tbl_berita WHERE id_berita = $id";
                            $hasil = mysqli_query($koneksi, $edit); // Use mysqli_query instead of mysql_query
                            $c = mysqli_fetch_array($hasil); // Use mysqli_fetch_array instead of mysql_fetch_array
                            ?>



					<tr>
                      <td><small><strong>Username</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="username" value="<?php echo $c['username']; ?>"></td>
                    </tr>
					<tr>
                      <td><small><strong>Kategori</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="kategori" value="<?php echo $c['kategori']; ?>"></td>
                    </tr>
                    <tr>
                      <td><small><strong>Judul</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="judul" value="<?php echo $c['judul']; ?>"></td>
                    </tr>
                    <tr>
                      <td><small><strong>Isi Berita </strong></small></td>
                      <td>:</td>
                      <td><textarea name="isi" cols="70" rows="30" id="isi"value="<?php echo $c['isi']; ?>"></textarea></td>
                    </tr>
					<tr>
                      <td><small><strong>Tanggal</strong></small></td>
                      <td>:</td>
                      <td><input type="date" name="tanggal" value="<?php echo $c['tanggal']; ?>"></td>
                    </tr>
					<tr>
                      <td><small><strong>Jam</strong></small></td>
                      <td>:</td>
                      <td><input type="time" name="jam" value="<?php echo $c['jam']; ?>"></td>
                    </tr>
                    <tr>
                      <td><small><strong>Gambar</strong></small></td>
                      <td>:</td>
                      <td><input type="file" name="fupload" id="nama_file">
						  <input type="text" name="fupload1" id="nama_file" value="<?php echo $c['gambar']; ?>">
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
    