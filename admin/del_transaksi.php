<?php
	$dbh->query( "DELETE FROM transaksi WHERE id_transaksi = '$_GET[id_transaksi]'");
	  echo "<script>document.location='index.php?page=masuk';</script>";
?>
