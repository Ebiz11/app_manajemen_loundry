<?php
	$dbh->query( "DELETE FROM investor WHERE id_investor = '$_GET[id_investor]'");
	  echo "<script>document.location='index.php?page=investor';</script>";
?>
