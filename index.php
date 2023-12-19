<!DOCTYPE html>
<?php include "fungsi_kalender.php";?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
    <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title> Mobile Legend</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">


    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  	

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  
  	<div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="?module=home" class="smoothScroll">Home</a></li>
			<li> <a href="?module=profil" class="smoothScroll">Tim</a></li>
			<li> <a href="?module=berita" class="smoothScroll"> Berita</a></li>
			<li> <a href="?module=agenda" class="smoothScroll"> Jadwal</a></li>
			<li> <a href="?module=saran" class="smoothScroll"> Saran</a></li>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>
	<br>

  
  
		<!-- ==== HEADERWRAP ==== -->
	    
		
		<!-- ==== ABOUT ==== -->
		
		<?php include"content.php"; ?>
		
  		

		<!-- ==== SECTION DIVIDER2 -->
		

		<!-- ==== TEAM MEMBERS ==== -->
		
		
		<div class="container" id="contact" name="contact">
			<div class="row">
			<br>
				<h2 class="centered">THANKS FOR VISITING US</h2>
				<hr>
				<br>
				<br>
				<div class="col-lg-4">
					<h3>Contact Information</h3>
					<p><span class="icon icon-home"> <a href="https://goo.gl/maps/vdeL1BWN1RK2"></span> Jln. tangerang kota no 13</a><br/>
						<span class="icon icon-phone"> <a href="tel:0751 93632"> </span> 0212345678 </a><br/>
						<span class="icon icon-envelop"></span> <a href="https://www.gmail.com/"> mlbbceria@gmail.com</a> <br/>
						<span class="icon icon-facebook"></span> <a href="https://www.facebook.com/disbudparkotapariaman">  mlbbpedia </a> <br/>
					</p>
				</div><!-- col -->
				
				
				
				<div class="col-lg-4">
						<div id='judul_header'>&#187; Calender </div>
					<div class='agenda'>
									<?php 
						  $tgl_skrg=date("d");
						  $bln_skrg=date("n");
						  $thn_skrg=date("Y");
						  echo buatkalender($tgl_skrg,$bln_skrg,$thn_skrg); 
						  ?>
					</div>
				</div><!-- col -->

			</div><!-- row -->
		
		</div><!-- container -->

		<div id="footerwrap">
			<div class="container">
			</div>
		</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		

	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery-func.js"></script>
  </body>
</html>
