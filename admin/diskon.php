<?php
$querybayar= $dbh->query("SELECT*FROM biaya");
$databayar= $querybayar->fetch();
$querymember = $dbh->query("SELECT*FROM member where id_member='$datatransaksi[id_member]' ");
$datamember = $querymember->fetch();


$harga=$databayar['biaya'];
if($datamember['id_member'] == $datatransaksi['id_member']/*$datamember['id_member']*/ && $datatransaksi['berat'] >=$databayar['kg']){
        //$harga=$databayar['biaya'];
        $biayamember= $datatransaksi['berat']*$harga;
        $diskon=($biayamember*$databayar['diskon'])/100;
        $biaya=$biayamember-$diskon;
} else{
        $biaya= $datatransaksi['berat']*$harga;

}

 ?>
