
<div id="headerwrap" id="home" name="home">

    <header style="position: relative; top: 370px; left:100pk;">
        <p style="color:yellow"><marquee>INFO SEPUTAR MOBILE LEGENDS </marquee></p>
        
    </header>
</div><!-- /headerwrap -->

<!-- ==== GREYWRAP ==== -->
<div id="greywrap">
    <p>BERITA UTAMA</p>
 

    <div class="row" class='fl_right col-sm-4'>
        <?php  
        include "koneksi.php";  

       
        $query = mysqli_query($koneksi, "SELECT id_berita, gambar, judul, isi, tanggal, jam FROM tbl_berita WHERE id_berita='1'");
        while($r=mysqli_fetch_array($query)) {
            echo "<div class='fl_right col-sm-4'>
                    <img border=2 src='admin/admin/berita/foto/$r[gambar]' border=0 width=300 height=200> 
                    <br><strong><a href='?module=readmore&id=$r[id_berita]'>$r[judul].</a></strong>
                    <p><strong>$r[tanggal]</strong> | <strong>$r[jam]</strong></p>
                    ".substr($r['isi'],0,100)." .....<a href='?module=readmore&id=$r[id_berita]'>Read More</a> </p> </div>";
        }
        ?>
        
        <?php  
       
        $query = mysqli_query($koneksi, "SELECT id_berita, gambar, judul, isi, tanggal, jam FROM tbl_berita WHERE id_berita='8'");
        while($r=mysqli_fetch_array($query)) {
            echo "<div class='fl_right col-sm-4'>
                    <img border=2 src='admin/admin/berita/foto/$r[gambar]' border=0 width=300 height=200> 
                    <br><strong><a href='?module=readmore&id=$r[id_berita]'>$r[judul].</a></strong>
					</a></strong>
                    <p><strong>$r[tanggal]</strong> | <strong>$r[jam]</strong></p>
                    ".substr($r['isi'],0,100)." .....<a href='?module=readmore&id=$r[id_berita]'>Read More</a> </p> </div>";
        }
        ?>

        <?php  
        
        $query = mysqli_query($koneksi, "SELECT id_berita, gambar, judul, isi, tanggal, jam FROM tbl_berita WHERE id_berita='3'");
        while($r=mysqli_fetch_array($query)) {
            echo "<div class='fl_right col-sm-4'>
                    <img border=2 src='admin/admin/berita/foto/$r[gambar]' border=0 width=300 height=200> 
                    <br><strong><a href='?module=readmore&id=$r[id_berita]'>$r[judul].</a></strong>
                    <p><strong>$r[tanggal]</strong> | <strong>$r[jam]</strong></p>
                    ".substr($r['isi'],0,100)." .....<a href='?module=readmore&id=$r[id_berita]'>Read More</a> </p> </div>";
        }
        ?>
			
				
				
			</div><!-- row -->
		</div><!-- greywrap -->