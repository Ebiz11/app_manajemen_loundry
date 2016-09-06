<?php
	$dbh->query( "DELETE FROM barang WHERE kd_barang = '$_GET[kd_barang]'");
	  echo "<script>document.location='index.php?page=barang';</script>";
?>
