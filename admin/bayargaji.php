<?php

//$ids=123;
include("../koneksi.php");
$ket="Pembayaran Gaji Karyawan";
$id=$_GET['id_karyawan'];
$gaji=$_GET['gaji'];
$lembur=$_GET['lembur'];
$insentif=$_GET['insentif'];
$st_gaji=$_GET['st_gaji'];
$total=$gaji+$lembur+$insentif;
$ket1="Kas";

  /*  $querysaldo=$dbh->query("SELECT SUM(saldo) AS saldoakhir FROM pembukuan ");
    $datasaldo=$querysaldo->fetch();

    $saldo=$datasaldo['saldoakhir']-$total;*/

  /*  $querysaldo=$dbh->query("SELECT*FROM ss ");
    $datasaldo=$querysaldo->fetch();

    $saldo=$datasaldo['coba']-$total;*/

    //===========query debet================
      $querydebet=$dbh->query("SELECT SUM(debet) AS totaldebet FROM pembukuan");
      $datadebet=$querydebet->fetch();

      $querykredit=$dbh->query("SELECT SUM(kredit) AS totalkredit FROM pembukuan");
      $datakredit=$querykredit->fetch();

      $debet=$datadebet['totaldebet'];
      $kredit=$datakredit['totalkredit'];
      $saldo=$debet-($kredit+$total);


      //===========================================================

    $dbh->query("INSERT INTO pembukuan (debet, saldo,  keterangan)
    VALUES('$total','$saldo','$ket')");

    $dbh->query("INSERT INTO pembukuan (kredit, saldo,  keterangan)
    VALUES('$total','$saldo','$ket1')");
/*    $querysaldo=$dbh->query("SELECT*FROM ss ");
    $datasaldo=$querysaldo->fetch();
    $saldonya=$datasaldo['coba'];

      $dbh->query("UPDATE ss SET coba='$saldonya' WHERE id='$ids' ");*/

    $dbh->query( "INSERT INTO lembur_insentif  (gaji, lembur, insentif,total_gaji, id_karyawan)
                  VALUES ('$gaji','$lembur','$insentif',$total, '$id')");

    $dbh->query( "UPDATE karyawan SET st_gaji = '$st_gaji', lembur='0', insentif='0', total_lembur='0', total_insentif='0' WHERE id_karyawan = '$id'");

           echo "<script>document.location='index.php?page=karyawan';</script>";
 ?>
