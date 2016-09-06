<?php
	$dbh->query( "DELETE FROM karyawan WHERE id_karyawan = '$_GET[id_karyawan]'");
	  echo "<script>document.location='index.php?page=karyawan';</script>";
?>
