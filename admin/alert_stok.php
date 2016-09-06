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
