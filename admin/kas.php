<?php

$ket="Penanaman Modal";
//$ids=123;

if(isset($_POST['button'])){

  /*$querysaldo=$dbh->query("SELECT*FROM ss ");
  $datasaldo=$querysaldo->fetch();*/

//  $saldo=$_POST['modal'];
//===========query debet================
$querydebet=$dbh->query("SELECT SUM(debet) AS totaldebet FROM pembukuan");
$datadebet=$querydebet->fetch();

$querykredit=$dbh->query("SELECT SUM(kredit) AS totalkredit FROM pembukuan");
$datakredit=$querykredit->fetch();

  $debet=$datadebet['totaldebet'];
  $kredit=$datakredit['totalkredit'];
  $saldo=($debet+$_POST['modal'])-$kredit;


  //===========================================================

  $dbh->query("INSERT INTO pembukuan (debet, saldo, keterangan)
  VALUES('$_POST[modal]','$saldo', '$ket')");

/*  $querysaldo=$dbh->query("SELECT*FROM ss ");
  $datasaldo=$querysaldo->fetch();
  $saldonya=$datasaldo['coba']+$saldo;

    $dbh->query("UPDATE ss SET coba='$saldonya' WHERE id='$ids' ");*/

  $dbh->query("INSERT INTO investor (nama_investor, alamat, no_telp, modal)
  VALUES('$_POST[nama_investor]','$_POST[alamat]','$_POST[no_telp]', '$_POST[modal]')");

      echo "<script>document.location='index.php?page=investor';</script>";
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Tambah Investor</h5>
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
                    <div class="form-group"><label class="col-sm-2 control-label">Nama Investor</label>
                      <div class="col-sm-5">
                        <div class="col-sm-10"><input type="text" name="nama_investor" class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-5">
                        <div class="col-sm-10"><input type="text" name="alamat" class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">No Telp</label>
                      <div class="col-sm-5">
                        <div class="col-sm-10"><input type="text" name="no_telp" class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Modal</label>
                      <div class="col-sm-5">
                        <div class="col-sm-10"><input type="text" name="modal" class="form-control"></div>
                    </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <a type="button" href=index.php?page=investor class="btn btn-white" type="submit">Cancel</a>
                            <button class="btn btn-primary" type="submit" name="button">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
