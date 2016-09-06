<?php

$ket="Pembelian Barang";
$kd=$_GET['kd_barang'];

if(isset($_POST['button'])){

  /*    $querysaldo=$dbh->query("SELECT SUM(saldo) AS saldoakhir FROM pembukuan ");
      $datasaldo=$querysaldo->fetch();

      $saldo=$datasaldo['saldoakhir']-$_POST['harga']; */

      //===========query debet================
        $querydebet=$dbh->query("SELECT SUM(debet) AS totaldebet FROM pembukuan");
        $datadebet=$querydebet->fetch();

        $querykredit=$dbh->query("SELECT SUM(kredit) AS totalkredit FROM pembukuan");
        $datakredit=$querykredit->fetch();

        $debet=$datadebet['totaldebet'];
        $kredit=$datakredit['totalkredit'];
        $saldo=$debet-($kredit+$_POST['harga']);


        //===========================================================

      $dbh->query("INSERT INTO pembukuan (kredit,saldo, keterangan)
      VALUES('$_POST[harga]','$saldo', '$ket')");

      $dbh->query("INSERT INTO pembelian (id_supplier,nama_barang,stok, harga, kd_barang)
      VALUES('$_POST[id_supplier]','$_POST[nama_barang]','$_POST[stok]','$_POST[harga]', $kd)");

      echo "<script>document.location='index.php?page=barang';</script>";
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Tambah Stok</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <form method="post" class="form-horizontal">
                  <?php
                    $querytampil = $dbh->query("SELECT*FROM barang WHERE kd_barang='$kd' ");
                    $datatampil= $querytampil->fetch();
                   ?>
                    <div class="form-group"><label class="col-sm-2 control-label">Nama Barang</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text" value="<?php echo $datatampil['nama_barang'] ?> " name="nama_barang"  class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Id Supplier</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text" value="<?php echo $datatampil['id_supplier'] ?>" name="id_supplier" class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Jumlah</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text"  placeholder="Gram/Mililiter/Qty" name="stok"  class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Harga</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text" name="harga"  class="form-control"></div>
                    </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <a type="button" href=index.php?page=barang class="btn btn-white" type="submit">Cancel</a>
                            <button class="btn btn-primary" type="submit" name="button">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
