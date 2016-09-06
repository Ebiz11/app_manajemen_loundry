<?php
  $nama=$_POST['nama_supplier'];
  $alamat= $_POST['alamat'];
  $no_telp= $_POST['no_telp'];
  $nama_barang= $_POST['nama_barang'];
  $id=$_GET['id_supplier'];

if(isset($_POST['button'])){
      $dbh->query("UPDATE supplier SET nama_supplier='$nama', alamat='$alamat' , no_telp='$no_telp', nama_barang='$nama_barang' WHERE id_supplier='$id' ");

      echo "<script>document.location='index.php?page=supplier';</script>";
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Tambah Supplier</h5>
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
                      $no=1;
                      $querysupplier = $dbh->query( "SELECT * FROM supplier  WHERE id_supplier='$id'");
                      $datasupplier = $querysupplier ->fetch();
                  ?>
                  <div class="form-group"><label class="col-sm-2 control-label">Id Supplier</label>
                    <div class="col-sm-10">
                      <div class="col-sm-10"><input type="text" disabled="" value="<?php echo $datasupplier['id_supplier']; ?>" name="id_supplier" class="form-control"></div>
                  </div>
                  </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Nama Supplier</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text" value="<?php echo $datasupplier['nama_supplier']; ?>" name="nama_supplier" class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text" value="<?php echo $datasupplier['alamat']; ?>"  name="alamat" class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">No Telp</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text" value="<?php echo $datasupplier['no_telp']; ?>"  name="no_telp" class="form-control"></div>
                    </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Nama Barang</label>
                      <div class="col-sm-10">
                        <div class="col-sm-10"><input type="text" value="<?php echo $datasupplier['nama_barang']; ?>"  name="nama_barang" class="form-control"></div>
                    </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <a type="button" href=index.php?page=supplier class="btn btn-white" type="submit">Cancel</a>
                            <button class="btn btn-primary" type="submit" name="button">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
