<td width="753" height="250" align="left" bgcolor="#FFFFFF">
    <div align="center">DAFTAR TIM
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
                <p align="left"><a href="?page=input_profil">+ Tambah TIM </a></p>
                <p>
                    <?php
                    include "koneksi.php";

                    // Menggunakan MySQLi
                    $query = "SELECT * FROM tbl_profil ORDER BY id_profil ";
                    $sql = mysqli_query($koneksi, $query);
                    ?>
                    <table border="0">
                        <tr bgcolor="#B0B0B0">
                            <th><small>NO</small></th>
                            <th><small>Judul TIM</small></th>
                            <th><small>Isi TIM</small></th>
                            <th><small>Gambar</small></th>
                            <th><small>AKSI</small></th>
                        </tr>
                        <?php
                        $no = 1;
                        while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <tr bgcolor="#E4E4E4">
                                <td><small><?php echo $no ?></small></td>
                                <td><small><?php echo $data['judul_profil']; ?></small></td>
                                <td><small><?php echo $data['isi_profil']; ?></small></td>
                                <td><small><img src="profil/foto/<?php echo $data['gambar_profil']; ?>" height="30" width="30"></small></td>
                                <td><small><a href="?page=hapus_profil&id=<?php echo $data['id_profil']; ?>" onClick="return confirm('Apakah Anda ingin menghapus data <?php echo $data['id_profil']; ?>?')"> Hapus </a> | <a href="?page=edit_profil&id=<?php echo $data['id_profil']; ?>">Edit</a> </small></td>
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
