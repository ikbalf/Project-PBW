<td width="753" height="250" align="left" bgcolor="#FFFFFF">
    <div align="center">DAFTAR BERITA
    </div>
    <table width="755" border="0">
        <tr>
            <td width="27">&nbsp;</td>
            <td width="702">&nbsp;</td>
            <td width="10">&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <p align="left"><a href="?page=input_berita">+ Tambah berita </a></p>
                <p>
                    <?php
                    include "koneksi.php";

                    // Menggunakan MySQLi
                    $query = "SELECT * FROM tbl_berita ORDER BY id_berita ";
                    $sql = mysqli_query($koneksi, $query);
                    ?>
                    <table border="0">
                        <tr bgcolor="#B0B0B0">
                            <th><small>NO</small></th>
                            <th><small>username</small></th>
                            <th><small>kategori</small></th>
                            <th><small>Judul </small></th>
                            <th><small>Isi</small></th>
                            <th><small>Tanggal</small></th>
                            <th><small>Jam</small></th>
                            <th><small>Gambar</small></th>
                            <th><small>AKSI</small></th>
                        </tr>
                        <?php
                        $no = 1;
                        while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <tr bgcolor="#E4E4E4">
                                <td><small><?php echo $no ?></small></td>
                                <td><small><?php echo $data['username']; ?></small></td>
                                <td><small><?php echo $data['kategori']; ?></small></td>
                                <td><small><?php echo $data['judul']; ?></small></td>
                                <td><small><?php echo $data['isi']; ?></small></td>
                                <td><small><?php echo $data['tanggal']; ?></small></td>
                                <td><small><?php echo $data['jam']; ?></small></td>
                                <td><small><img src="berita/foto/<?php echo $data['gambar']; ?>" height="30" width="30"></small></td>
                                <td><small><a href="?page=hapus_berita&id=<?php echo $data['id_berita']; ?>" onClick="return confirm('Apakah Anda ingin menghapus data <?php echo $data['id_berita']; ?>?')"> Hapus </a> | <a href="?page=edit_berita&id=<?php echo $data['id_berita']; ?>">Edit</a> </small></td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </table>
                </p>
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
</td>
