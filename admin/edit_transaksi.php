<?php
  $nama=$_POST['nama'];
  $berat= $_POST['berat'];
  $tanggal_ambil= $_POST['tanggal_ambil'];
  $id=$_GET['id_transaksi'];
if(isset($_POST['button'])){
      $dbh->query("UPDATE transaksi SET nama='$nama', berat='$berat' , tanggal_ambil='$tanggal_ambil' WHERE id_transaksi='$id' ");

      echo "<script>document.location='index.php?page=masuk';</script>";
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>All form elements</h5>
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
              			$querypel = $dbh->query("SELECT * FROM transaksi WHERE id_transaksi = '$id'");
              			$datapel = $querypel->fetch();
              		?>
                      <div class="form-group"><label class="col-sm-2 control-label">Id Transaksi</label>
                          <div class="col-sm-10"><input type="text" name="id_transaksi" disabled=""  value="<?php echo $datapel['id_transaksi']; ?>" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Nama</label>
                          <div class="col-sm-10"><input type="text" name="nama" value="<?php echo $datapel['nama']; ?>" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Berat</label>
                        <div class="col-sm-10"><input type="text" name="berat" value="<?php echo $datapel['berat']; ?>" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Tanggal Ambil</label>
                  		  	<div class="col-sm-10"><input class="form-control" type="date" value="<?php echo $datapel['tanggal_ambil']; ?>" name="tanggal_ambil" /></div>
              		    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-white" type="submit">Cancel</button>
                            <button class="btn btn-primary" type="submit" name="button">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
