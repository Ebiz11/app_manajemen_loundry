<?php
  $nama=$_POST['nama_investor'];
  $alamat= $_POST['alamat'];
  $no_telp= $_POST['no_telp'];
  $modal=$_POST['modal'];
  $id=$_GET['id_investor'];

if(isset($_POST['button'])){
      $dbh->query("UPDATE investor SET nama_investor='$nama', alamat='$alamat' , no_telp='$no_telp',modal='$modal' WHERE id_investor='$id' ");

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
                  <?php
                  $investor= $dbh->query("SELECT*FROM investor WHERE id_investor='$_GET[id_investor]' ");
                  $datainvestor=$investor->fetch();

                   ?>
                    <div class="form-group"><label class="col-sm-2 control-label">Nama Investor</label>
                      <div class="col-sm-5">
                        <div class="col-sm-10"><input type="text" name="nama_investor" value="<?php echo $datainvestor['nama_investor']; ?>" class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-5">
                        <div class="col-sm-10"><input type="text" name="alamat" value="<?php echo $datainvestor['alamat']; ?>" class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">No Telp</label>
                      <div class="col-sm-5">
                        <div class="col-sm-10"><input type="text" name="no_telp" value="<?php echo $datainvestor['no_telp']; ?>" class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Modal</label>
                      <div class="col-sm-5">
                        <div class="col-sm-10"><input type="text" name="modal" value="<?php echo $datainvestor['modal']; ?>" class="form-control"></div>
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
