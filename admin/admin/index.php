<?php
session_start();
include "koneksi.php";

if (!empty($_SESSION['usernameku']) && !empty($_SESSION['passwordku'])) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Halaman Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #000033;
}
a:link {
	color: #0000FF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #0000FF;
}
a:hover {
	text-decoration: none;
	color: #000000;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<div align="center">
  <table width="100" border="0" cellpadding="0">
    <tr>
      <td colspan="2"><img src="timmpl9.png" width="961" height="400"></td>
    </tr>
    <tr>
      <td width="206" align="center" valign="top" bgcolor="#000099"><table width="206" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="258" align="center" bgcolor="#000000"><span class="style1"><strong>Menu</strong></span></td>
        </tr>
        <tr>
          <td bgcolor="#00006A"><a href="?page=berita"><span class="style1">- Input Berita</span></a></td>
        </tr>
		<tr>
          <td bgcolor="#00006A"><a href="?page=agenda"><span class="style1">- Input Jadwal</span></a></td>
        </tr>
		<tr>
          <td bgcolor="#00006A"><a href="?page=profil"><span class="style1">- Input TIM</span></a></td>
        </tr>
       
        <tr>
          <script language="javascript">
<!--
function logout()
{
	tanya=confirm("Apakah anda yakin akan keluar ?")
	if (tanya !="0")
	{
		top.location="logout.php"
	}
}
//-->
</script>
<td bgcolor="#000048"><span class="style1"><a href="../index.php"onClick="logout()"><strong>- Logout</strong></a></span></td>
        </tr>
      </table></td>
	  
      
	  <?php include "content.php"; ?>
	  
	  
    </tr>
    <tr align="center" valign="middle" bgcolor="#000099">
     </tr>
  </table>
</div>
</body>
</html>
<?php

}else{
  echo "<script language='javascript'>alert('Silakan Login Terlebih Dahulu')</script>";
 echo"<script language='javascript'>window.location = 'index.php'</script>";
}
?>