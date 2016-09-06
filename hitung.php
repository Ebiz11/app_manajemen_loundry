<?php

/*
$querybayar= $dbh->query("SELECT*FROM biaya");
$databayar= $querybayar->fetch();
$harga=$databayar['biaya'];
if($datapelanggan['member'] =="1"){
        //$harga=$databayar['biaya'];
        $biayamember= $datapelanggan['berat']*$harga;
        $diskon=($biayamember*$databayar['diskon'])/100;
        $biaya=$biayamember-$diskon;
} else if($datapelanggan['member'] =="0"){
        $harga=$databayar['biaya'];
        $biaya= $datapelanggan['berat']*$harga;
}*/


==============================================================================================================
/*
$querybayar= $dbh->query("SELECT*FROM biaya");
$databayar= $querybayar->fetch();
$harga=$databayar['biaya'];
if($datapelanggan['member'] =="1" && $datapelanggan['berat'] >=20){
        //$harga=$databayar['biaya'];
        $biayamember= $datapelanggan['berat']*$harga;
        $diskon=($biayamember*$databayar['diskon'])/100;
        $biaya=$biayamember-$diskon;
} else if($datapelanggan['member'] =="1"){
        $harga=$databayar['biaya'];
        $biaya= $datapelanggan['berat']*$harga;

}else if($datapelanggan['member'] =="0"){
        $harga=$databayar['biaya'];
        $biaya= $datapelanggan['berat']*$harga;

}

 ?>
