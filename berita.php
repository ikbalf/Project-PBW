</div>
   
</div>

</div>
    
<section class="section-divider textdivider divider6">
    <div class="container">
    <br/>
    <br/>
				<br>
				<br>		
				<p><b><h2 style="color:#fff000;"><marquee>Berita Seputar Dunia Mobile Legend</marquee><b></h2></p>
			</div><!-- container -->
</section><!-- section -->
</br>
<?php include "koneksi.php"; ?>

<!-- /row -->
<br>
<br>
<!-- /row -->
<!-- /container -->

<div class="wrapper">
    <div class="container">
        <div class="content">
            <div id="featured_slide">

                <div>

                    <?php
                    include "koneksi.php";

                    $batas = 10;
                    $paging = @$_GET['paging'];
                    if (empty($paging)) {
                        $posisi = 0;
                        $paging = 1;
                    } else {
                        $posisi = ($paging - 1) * $batas;
                    }

                    $query = mysqli_query($koneksi, "select * from tbl_berita order by id_berita desc limit $posisi,$batas");
                    while ($r = mysqli_fetch_array($query)) {
                        echo "<div class='fl_right col-sm-4'>
                        <img border=2 src='admin/admin/berita/foto/$r[gambar]' border=0 width=300 height=200> 
                        <br><strong><a href='?module=readmore&id=$r[id_berita]'>$r[judul].</a></strong>
                        <p><strong>$r[tanggal]</strong> | <strong>$r[jam]</strong></p>
                        <p> " . substr($r['isi'], 0, 100) . " .....<a href='?module=readmore&id=$r[id_berita]'>Read More</a> </p> </div>";
                    }

                    ?>

                </div>

            </div>

        </div>

    </div>

</div>
