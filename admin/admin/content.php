<?php
  @$page = $_GET['page'];

  if ($page == "home") {
    include "home.php";
	
  }elseif ($page == "berita") {
    include "berita/berita.php";
  }elseif ($page == "edit_berita") {
    include "berita/edit_berita.php";
  }elseif ($page == "proses_berita") {
    include "berita/proses_berita.php";
  }elseif ($page == "input_berita") {
    include "berita/input_berita.php";
  }elseif ($page == "update_berita") {
    include "berita/update_berita.php";
  }elseif ($page == "hapus_berita") {
    include "berita/hapus_berita.php";
	
  }elseif ($page == "pelayanan") {
    include "pelayanan/pelayanan.php";
  }elseif ($page == "edit_pelayanan") {
    include "pelayanan/edit_pelayanan.php";
  }elseif ($page == "proses_pelayanan") {
    include "pelayanan/proses_pelayanan.php";
  }elseif ($page == "input_pelayanan") {
    include "pelayanan/input_pelayanan.php";
  }elseif ($page == "update_pelayanan") {
    include "pelayanan/update_pelayanan.php";
  }elseif ($page == "hapus_pelayanan") {
    include "pelayanan/hapus_pelayanan.php";
	
	
  }elseif ($page == "profil") {
    include "profil/profil.php";
  }elseif ($page == "edit_profil") {
    include "profil/edit_profil.php";
  }elseif ($page == "proses_profil") {
    include "profil/proses_profil.php";
  }elseif ($page == "input_profil") {
    include "profil/input_profil.php";
  }elseif ($page == "update_profil") {
    include "profil/update_profil.php";
  }elseif ($page == "hapus_profil") {
    include "profil/hapus_profil.php";
	
	
  }elseif ($page == "agenda") {
    include "agenda/agenda.php";
  }elseif ($page == "edit_agenda") {
    include "agenda/edit_agenda.php";
  }elseif ($page == "proses_agenda") {
    include "agenda/proses_agenda.php";
  }elseif ($page == "input_agenda") {
    include "agenda/input_agenda.php";
  }elseif ($page == "update_agenda") {
    include "agenda/update_agenda.php";
  }elseif ($page == "hapus_agenda") {
    include "agenda/hapus_agenda.php";
	
  }else {
    include "home.php";
  }

?>
