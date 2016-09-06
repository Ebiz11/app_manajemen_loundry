<?php
include("../koneksi.php");

$ket="Piutang Loundry";
$ket1="Kas";

$id=$_GET['id_transaksi'];
$biaya=$_GET['biaya'];
$st=$_GET['status'];
$berat=$_GET['berat'];
$st_bayar=1;

/*$querysaldo=$dbh->query("SELECT id_buku, saldo FROM pembukuan ORDER BY id_buku");
$datasaldo=$querysaldo->fetch();
$saldo1=end($datasaldo['saldo']);

$saldo=$saldo1+$biaya;*/

//===========query debet================
$querydebet=$dbh->query("SELECT SUM(debet) AS totaldebet FROM pembukuan");
$datadebet=$querydebet->fetch();

$querykredit=$dbh->query("SELECT SUM(kredit) AS totalkredit FROM pembukuan");
$datakredit=$querykredit->fetch();

  $debet=$datadebet['totaldebet'];
  $kredit=$datakredit['totalkredit'];
  $saldo=($debet+$biaya)-$kredit;


  //===========================================================


  $dbh->query("INSERT INTO pembukuan (kredit,saldo,  keterangan)
  VALUES('$biaya','$saldo', '$ket')");

  $dbh->query("INSERT INTO pembukuan (debet,saldo,  keterangan)
  VALUES('$biaya','$saldo', '$ket1')");

// echo "idnya ".$id."Biayanya ".$biaya."Statusnya ".$st."Beratnya ".$berat;
  $dbh->query( "UPDATE transaksi SET status = '$st' WHERE id_transaksi = '$id'");
    $dbh->query( "UPDATE detail_transaksi SET st_bayar = '$st_bayar' WHERE id_transaksi = '$id'");
  // $dbh->query( "INSERT INTO detail_transaksi (id_transaksi, total, berat) VALUES ($id, $biaya, $berat) ");
//   header("location:index?page=finish")

//$biayanya = $dbh->query("SELECT*FROM biaya");
//$databiaya= $biayanya->fetch();
  //   $detergen=$databiaya['detergen'];
    // $kddetergen=7;
     //$pewangi=$databiaya['pewangi'];
     //$tanggal= date("Y-n-j");
     //$kdpewangi=8;
     //$kurangdetergen=$berat*$detergen;
     //$kurangpewangi=$berat*$pewangi;
     //$st_bayar=1;

  //   $dbh->query( "INSERT INTO jual (kd_barang,id_transaksi, stok) VALUES ($kddetergen,$id, $kurangdetergen) ");
    // $dbh->query( "INSERT INTO jual (kd_barang,id_transaksi, stok) VALUES ($kdpewangi,$id, $kurangpewangi) ");

  //    $dbh->query( "UPDATE jual SET st_bayar='$st_bayar' WHERE id_transaksi = '$id' ");
//        $dbh->query( "UPDATE jual SET st_bayar='$st_bayar' WHERE id_transaksi = '$id'");

  //$dbh->query( "UPDATE jual (st_bayar) VALUES ($st_bayar) ");
  //  $dbh->query( "UPDATE jual (st_bayar VALUES ($st_bayar) ");
    // $dbh->query( "UPDATE transaksi SET  detergen='$kurangdetergen', pewangi='$kurangpewangi' , status = '$st' WHERE id_transaksi = '$id'");

           echo "<script>document.location='index.php?page=finish';</script>";
 ?>
