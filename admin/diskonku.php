<?php
$ambilkode= $dbh->query("SELECT*FROM set_kode_biaya");
$datakode=$ambilkode->fetch();
$id_biaya=$datakode['kd_biaya'];

/*
$biaya=$_POST['biaya'];
$diskon=$_POST['diskon'];
$kg=$_POST['kg'];
$detergen=$_POST['detergen'];
$pewangi=$_POST['pewangi'];

*/


if(isset($_POST['button'])){
      $dbh->query("UPDATE biaya SET biaya='$_POST[biaya]', diskon='$_POST[diskon]',kg='$_POST[kg]', detergen='$_POST[detergen]',
        pewangi='$_POST[pewangi]',kd_detergen='$_POST[kd_detergen]', kd_pewangi='$_POST[kd_pewangi]', gaji_lembur='$_POST[gaji_lembur]', gaji_insentif='$_POST[gaji_insentif]'  WHERE id_biaya='$id_biaya'");

      echo "<script>document.location='index.php?page=home';</script>";
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Settings</h5>
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
              			$querybiaya1 = $dbh->query("SELECT * FROM biaya WHERE id_biaya = '$id_biaya'");
              			$databiaya1 = $querybiaya1->fetch();
              		?>
                      <div class="form-group"><label class="col-sm-2 control-label">Biaya /kg</label>
                          <div class="col-sm-10"><input type="text" name="biaya" value="<?php echo $databiaya1['biaya']; ?>" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Diskon Member</label>
                        <div class="col-sm-10"><input type="text" name="diskon" value="<?php echo $databiaya1['diskon']; ?>" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Batas Diskon</label>
                        <div class="col-sm-10"><input type="text" name="kg" value="<?php echo $databiaya1['kg']; ?>" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Detergen(gram)</label>
                        <div class="col-sm-10"><input type="text" name="detergen" value="<?php echo $databiaya1['detergen']; ?>" class="form-control"></div>
                      </div><div class="form-group"><label class="col-sm-2 control-label">Pewangi(mililiter)</label>
                        <div class="col-sm-10"><input type="text" name="pewangi" value="<?php echo $databiaya1['pewangi']; ?>" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Kode Detergen</label>
                          <div class="col-sm-10"><input type="text" name="kd_detergen" value="<?php echo $databiaya1['kd_detergen']; ?>" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Kode Pewangi</label>
                        <div class="col-sm-10"><input type="text" name="kd_pewangi" value="<?php echo $databiaya1['kd_pewangi']; ?>" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Gaji Lembur/jam</label>
                        <div class="col-sm-10"><input type="text" name="gaji_lembur" value="<?php echo $databiaya1['gaji_lembur']; ?>" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Gaji Bonus/Target</label>
                        <div class="col-sm-10"><input type="text" name="gaji_insentif" value="<?php echo $databiaya1['gaji_insentif']; ?>" class="form-control"></div>
                      </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <a type="button" href="index.php?page=home" class="btn btn-white" type="submit">Cancel</a>
                            <button class="btn btn-primary" type="submit" name="button">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
