<?php
	$dbh->query( "DELETE FROM supplier WHERE id_supplier = '$_GET[id_supplier]'");
	  echo "<script>document.location='index.php?page=supplier';</script>";
?>
