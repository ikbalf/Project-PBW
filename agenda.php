</div>
		   
		  </div>
		  
		</div>
		
	  </div>

</div>
		
<section class="section-divider textdivider divider7">
    <div class="container">
        <br/>
        <br/>
        <br/>
        <br>
        <p><b><h2 style="color:#fff000;"><marquee>JADWAL PERTANDINGAN MPL</marquee></h2></b></p>
        
    </div><!-- container -->
</section><!-- 
<?php include"koneksi.php"; ?>


			<!-- /row -->
			<br>
			<br>
		<!-- /row -->
<!-- /container -->
	
	

<div class="wrapper "  >
	  <div class="container">
		<div class="content">
		  <div id="featured_slide " >
		  
		   
		   <div>
			  
					<?php  
						include "koneksi.php";  
					   
					$batas=10;
					$paging=@$_GET['paging'];
					if(empty($paging))
						{
						$posisi=0;
						$paging=1;
						}

					else{
						$posisi=($paging-1) * $batas;
						}
						$query = mysqli_query($koneksi, "SELECT * FROM tbl_agenda ORDER BY tanggal_agenda DESC LIMIT $posisi,$batas");
					while ($r = mysqli_fetch_array($query)) {
						echo "<div class='fl_right col-sm-4'>
								<img border=2 src='admin/admin/agenda/foto/$r[gambar_agenda]' border=0 width=300 height=200> <br>
								<strong><a href='?module=detail&id=$r[id_agenda]'>$r[judul_agenda].</a></strong>
								<p><strong>$r[tanggal_agenda]</strong></p>
								<p>  </p> 
							  </div>";
						  
						} 

					?>

		   </div>
		   
		  </div>
		  
		</div>
		
	  </div>

</div>