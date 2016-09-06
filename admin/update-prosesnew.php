<?php
include("../koneksi.php");

$id=$_GET['id_transaksi'];
$biaya=$_GET['biaya'];
$berat=$_GET['berat'];
$proses=$_GET['proses'];
//$nama_customer=$_GET['nama_customer'];
$querydebet=$dbh->query("SELECT SUM(debet) AS totaldebet FROM pembukuan");
$datadebet=$querydebet->fetch();

$querykredit=$dbh->query("SELECT SUM(kredit) AS totalkredit FROM pembukuan");
$datakredit=$querykredit->fetch();

  $debet=$datadebet['totaldebet'];
  $kredit=$datakredit['totalkredit'];
  $saldo=($debet+$biaya)-$kredit;


  //===========================================================

  $ket="Piutang Loundry";
  $ket1="Kas";

  $dbh->query("INSERT INTO pembukuan (debet,saldo,  keterangan)
  VALUES('$biaya','$saldo', '$ket')");

  $dbh->query("INSERT INTO pembukuan (kredit,saldo,  keterangan)
  VALUES('$biaya','$saldo', '$ket1')");


 $dbh->query( "INSERT INTO detail_transaksi (id_transaksi, total, berat, nama) VALUES ($id, $biaya, $berat, '$_GET[nama_customer]') ");

$biayanya = $dbh->query("SELECT*FROM biaya");
$databiaya= $biayanya->fetch();
     $detergen=$databiaya['detergen'];
     $kddetergen=$databiaya['kd_detergen'];
     $pewangi=$databiaya['pewangi'];
     $tanggal= date("Y-n-j");
     $kdpewangi=$databiaya['kd_pewangi'];
     $kurangdetergen=$berat*$detergen;
     $kurangpewangi=$berat*$pewangi;
     $dbh->query( "UPDATE transaksi SET  proses = '$proses', detergen='$kurangdetergen', pewangi='$kurangpewangi' WHERE id_transaksi = '$id'");
     $dbh->query( "INSERT INTO jual (kd_barang,id_transaksi, stok, berat) VALUES ($kddetergen,$id, $kurangdetergen, $berat) ");
     $dbh->query( "INSERT INTO jual (kd_barang,id_transaksi, stok, berat) VALUES ($kdpewangi,$id, $kurangpewangi, $berat) ");

header("location:index?page=proses")
?>
