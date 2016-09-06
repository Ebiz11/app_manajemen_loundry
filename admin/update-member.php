<?php
  include("../koneksi.php");
  $dbh->query( "UPDATE transaksi SET member = '$_GET[member]' WHERE id_transaksi = '$_GET[id_transaksi]'");
  header("location:index?page=finish")
 ?>
