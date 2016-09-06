<?php


  include("../koneksi.php");
  $id=$_GET['id_transaksi'];
  $biaya=$_GET['biaya'];
  $berat=$_GET['berat'];
   $dbh->query ("INSERT INTO detail_transaksi (id_transaksi, nama_customer,  total, berat) VALUES ($id, $nama, $biaya, $berat) ");
  $proses=$_GET['proses'];
  $nama=$_GET['nama'];

    $biayanya = $dbh->query("SELECT*FROM biaya");
    $databiaya= $biayanya->fetch();
         $detergen=$databiaya['detergen'];
         $kddetergen=$databiaya['kd_detergen'];
         $pewangi=$databiaya['pewangi'];
         $tanggal= date("Y-n-j");
         $kdpewangi=$databiaya['kd_pewangi'];
         $kurangdetergen=$berat*$detergen;
         $kurangpewangi=$berat*$pewangi;

      $dbh->query ("INSERT INTO detail_transaksi (id_transaksi, nama_customer,  total, berat) VALUES ($id, $nama, $biaya, $berat) ");

       $dbh->query( "UPDATE transaksi SET proses = '$proses' WHERE id_transaksi = '$id'");

      // $dbh->query( "UPDATE transaksi SET  detergen='$kurangdetergen', pewangi='$kurangpewangi' , status = '$st' WHERE id_transaksi = '$id'");
       $dbh->query( "INSERT INTO jual (kd_barang,id_transaksi, stok, berat) VALUES ($kddetergen,$id, $kurangdetergen, $berat) ");
       $dbh->query( "INSERT INTO jual (kd_barang,id_transaksi, stok, berat) VALUES ($kdpewangi,$id, $kurangpewangi, $berat) ");


 header("location:index?page=proses")


 ?>
