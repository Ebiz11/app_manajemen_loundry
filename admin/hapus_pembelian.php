<?php
	$dbh->query( "DELETE FROM pembelian WHERE id_pembelian = '$_GET[id_pembelian]'");
	  echo "<script>document.location='index.php?page=pembelian';</script>";
?>
