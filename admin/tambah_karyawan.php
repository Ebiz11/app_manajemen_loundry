<?php
if(isset($_POST['button'])){
      $dbh->query("INSERT INTO karyawan (nama_karyawan, alamat, no_telp, gaji)
      VALUES('$_POST[nama_karyawan]','$_POST[alamat]','$_POST[no_telp]', '$_POST[gaji]')");

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
                    <div class="form-group"><label class="col-sm-2 control-label">Nama Karyawan</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text" name="nama_karyawan" class="form-control" required></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text" name="alamat" class="form-control" required></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">No Telp</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text" name="no_telp"  class="form-control"required></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Gaji</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text" name="gaji" class="form-control" required></div>
                    </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <a type="button" href=index.php?page=home class="btn btn-white" type="submit">Cancel</a>
                            <button class="btn btn-primary" type="submit" name="button">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
