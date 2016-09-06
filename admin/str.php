<?php
    $sekarang = time();
    $deadline = strtotime($datatransaksi['tanggal_ambil']);
    $beda = $deadline - $sekarang;
    $sisa_hari = floor($beda/(60*60*24));
?>
