<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Details</h5>
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
              <?php
                $querycalon_penerima = $dbh->query("SELECT * FROM calon_penerima WHERE id_calon_penerima = '$_GET[id_calon_penerima]'");
                $datacalon_penerima = $querycalon_penerima->fetch();
              ?>
                <form method="get" class="form-horizontal">
                    <div class="form-group"><label class="col-sm-2 control-label">Id</label>
                        <div class="col-sm-10"><input type="text" disabled="" class="form-control" value="<?php echo $datacalon_penerima['id_calon_penerima']; ?>"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10"><input type="text"  disabled="" class="form-control" value="<?php echo $datacalon_penerima['nama_calon_penerima']; ?>"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">No Ktp</label>
                        <div class="col-sm-10"><input type="text" disabled="" class="form-control" value="<?php echo $datacalon_penerima['no_ktp']; ?>"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">No kk</label>
                        <div class="col-sm-10"><input type="text" disabled="" class="form-control" value="<?php echo $datacalon_penerima['no_kk']; ?>"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">No Warmis</label>
                        <div class="col-sm-10"><input type="text" disabled="" class="form-control" value="<?php echo $datacalon_penerima['no_warmis']; ?>"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Jenis Bantuan</label>
                        <div class="col-sm-10"><input type="text" disabled="" class="form-control" value="<?php echo $datacalon_penerima['jenis_bantuan']; ?>"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-10"><input type="text" disabled="" class="form-control" value="<?php echo $datacalon_penerima['status']; ?>"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Tanggal</label>
                        <div class="col-sm-10"><input type="text" disabled="" class="form-control" value="<?php echo $datacalon_penerima['tanggal']; ?>"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Latitude</label>
                        <div class="col-sm-10"><input type="text" disabled="" class="form-control" value="<?php echo $datacalon_penerima['latitude']; ?>"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">longitude</label>
                        <div class="col-sm-10"><input type="text" disabled="" class="form-control" value="<?php echo $datacalon_penerima['longitude']; ?>"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <a herf="index?page=hasil_analisis"> <button class="btn btn-primary" type="submit">Kembali</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
