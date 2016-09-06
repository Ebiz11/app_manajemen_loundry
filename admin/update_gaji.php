<?php
include("../koneksi.php");
$id=$_GET['id_karyawan'];
$st_gaji=0;
    $dbh->query( "UPDATE karyawan SET st_gaji = '$st_gaji' WHERE id_karyawan = '$id'");

           echo "<script>document.location='index.php?page=karyawan';</script>";
 ?>
