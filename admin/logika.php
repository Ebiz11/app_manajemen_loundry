<?php
  include("../koneksi.php");

$berat=4;
$stokdetergen=500;
$stokpewangi=1000;

$biayanya = $dbh->query("SELECT*FROM biaya");
$databiaya= $biayanya->fetch();
     $detergen=$databiaya['detergen'];
     $kddetergen=$databiaya['kd_detergen'];
     $pewangi=$databiaya['pewangi'];
     $kdpewangi=$databiaya['kd_pewangi'];
     $kurangdetergen=$berat*$detergen;
     $kurangpewangi=$berat*$pewangi;
?>
Pemakaian Detergen    <?php echo "$kurangdetergen" ; ?>

Pemakaian Pewangi         <?php   echo "$kurangpewangi" ; ?>

<?php
//if($stokdetergen<=$kurangdetergen OR $stokpewangi<=$kurangpewangi){
  if ($kurangdetergen>=$stokdetergen){
          echo "STOK DETERGEN HABIS !!";
  }if ( $kurangpewangi >=$stokpewangi) {
          echo "STOK PEWANGI HABIS !!";
  }else{
        echo "Stok Masih ada";
      }

?>


==============
<?php
  include("../koneksi.php");
  $id=$_GET['id_transaksi'];
  $biaya=$_GET['biaya'];
  $berat=$_GET['berat'];

         $biayanya = $dbh->query("SELECT*FROM biaya");
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
             echo " Stok Detergen Habis";

        }if ( $kurangpewangi >=$stokpewangi) {
            echo " Stok Pewangi Habis";
           }else{
                 $dbh->query( "UPDATE transaksi SET proses = '$_GET[proses]' WHERE id_transaksi = '$_GET[id_transaksi]'");
                 $dbh->query( "INSERT INTO detail_transaksi (id_transaksi, total, berat) VALUES ($id, $biaya, $berat) ");
                 $dbh->query( "UPDATE transaksi SET  detergen='$kurangdetergen', pewangi='$kurangpewangi' , status = '$st' WHERE id_transaksi = '$id'");
                 $dbh->query( "INSERT INTO jual (kd_barang,id_transaksi, stok, berat) VALUES ($kddetergen,$id, $kurangdetergen, $berat) ");
                 $dbh->query( "INSERT INTO jual (kd_barang,id_transaksi, stok, berat) VALUES ($kdpewangi,$id, $kurangpewangi, $berat) ");
                 header("location:index?page=proses")
               }
              // header("location:index?page=proses")
              echo " Stok Habis Semua";
 ?>
