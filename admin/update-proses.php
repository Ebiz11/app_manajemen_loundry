<?php
  include("../koneksi.php");

  $id=$_GET['id_transaksi'];
  $berat=$_GET['berat'];
  $proses=$_GET['proses'];

      /*   $biayanya = $dbh->query("SELECT*FROM biaya");
         $databiaya= $biayanya->fetch();
         $stok1 = $dbh->query("SELECT*FROM barang WHERE kd_barang='$databiaya[kd_detergen]'");
         $stokdetergen= $stok1->fetch();
         $stok2 = $dbh->query("SELECT*FROM barang WHERE kd_barang='$databiaya[kd_pewangi]'");
         $stokpewangi= $stok2->fetch();

         $stokdetergen=$stokdetergen['stok'];
         $stokpewangi=$stokpewangi['stok'];

           $detergen=$databiaya['detergen'];
           $kddetergen=$databiaya['kd_detergen'];
           $pewangi=$databiaya['pewangi'];
           $tanggal= date("Y-n-j");
           $kdpewangi=$databiaya['kd_pewangi'];
           $kurangdetergen=$berat*$detergen;
           $kurangpewangi=$berat*$pewangi;

           if ($kurangdetergen>=$stokdetergen){
              if ( $kurangpewangi >=$stokpewangi) {
             header("location:index?page=masuk")
           }
         }else{*/

             $dbh->query( "UPDATE transaksi SET proses = '$proses' WHERE id_transaksi = '$id'");
          // }
            header("location:index?page=masuk")
//echo "Semua Stok Habis";


 ?>
