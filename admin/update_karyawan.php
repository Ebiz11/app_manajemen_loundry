<?php
$qbiaya=$dbh->query("SELECT*FROM biaya");
$databiaya=$qbiaya->fetch();

$kd=$_GET['id_karyawan'];
$totallembur=$_POST['lembur']*$databiaya['gaji_lembur'];
$totalinsentif= $_POST['insentif']*$databiaya['gaji_insentif'];

if(isset($_POST['button'])){
      $dbh->query(" UPDATE karyawan SET nama_karyawan='$_POST[nama_karyawan]',alamat='$_POST[alamat]',no_telp='$_POST[no_telp]',gaji='$_POST[gaji]',lembur='$_POST[lembur]', insentif='$_POST[insentif]', total_lembur='$totallembur',total_insentif='$totalinsentif' WHERE id_karyawan='$kd'  ");

      echo "<script>document.location='index.php?page=karyawan';</script>";
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Tambah Barang</h5>
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
                  $querytampil= $dbh->query("SELECT*FROM karyawan WHERE id_karyawan='$kd'");
                  $datatampil= $querytampil->fetch();
                   ?>
                    <div class="form-group"><label class="col-sm-2 control-label">Nama Karyawan</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text"  value="<?php echo $datatampil['nama_karyawan'] ?> " name="nama_karyawan" class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text"  value="<?php echo $datatampil['alamat'] ?> " name="alamat" class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">No Telp</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text"  value="<?php echo $datatampil['no_telp'] ?> " name="no_telp"  class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Gaji</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text"  value="<?php echo $datatampil['gaji'] ?> " name="gaji" class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Lembur</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text" value="<?php echo $datatampil['lembur'] ?> " name="lembur" class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Insentif</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text" value="<?php echo $datatampil['insentif'] ?> " name="insentif" class="form-control"></div>
                    </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <a type="button" href=index.php?page=karyawan class="btn btn-white" type="submit">Cancel</a>
                            <button class="btn btn-primary" type="submit" name="button">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
