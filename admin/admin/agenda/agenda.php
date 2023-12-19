<td width="753" height="250" align="left" bgcolor="#FFFFFF">
    <div align="center">DAFTAR Jadwal
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
                <p align="left"><a href="?page=input_agenda">+ Tambah Jadwal </a></p>
                <p>
                    <?php
                    include "koneksi.php";

                    // mengambil data dari tabel tbl_agenda dan diurutkan berdasarkan kolom id_agenda.
                    $query = "SELECT * FROM tbl_agenda ORDER BY id_agenda ";
                    $sql = mysqli_query($koneksi, $query);
                    ?>
                    <table border="0">
                        <tr bgcolor="#B0B0B0">
                            <th><small>NO</small></th>
                            <th><small>username</small></th>
                            <th><small>Judul Jadwal</small></th>
                            <th><small>Isi Jadwal</small></th>
                            <th><small>Tanggal Jadwal</small></th>
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
                                <td><small><?php echo $data['judul_agenda']; ?></small></td>
                                <td><small><?php echo $data['isi_agenda']; ?></small></td>
                                <td><small><?php echo $data['tanggal_agenda']; ?></small></td>
                                <td><small><img src="agenda/foto/<?php echo $data['gambar_agenda']; ?>" height="30" width="30"></small></td>
                                <td><small><a href="?page=hapus_agenda&id=<?php echo $data['id_agenda']; ?>" onClick="return confirm('Apakah Anda ingin menghapus data <?php echo $data['id_agenda']; ?>?')"> Hapus </a> | <a href="?page=edit_agenda&id=<?php echo $data['id_agenda']; ?>">Edit</a> </small></td>
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
