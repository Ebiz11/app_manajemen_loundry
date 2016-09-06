<?php
$id=$_GET['id_karyawan'];
$querykaryawan=$dbh->query("SELECT*FROM karyawan WHERE id_karyawan='$id' ");
$datakaryawan=$querykaryawan->fetch();
$qbiaya=$dbh->query("SELECT*FROM biaya");
$databiaya=$qbiaya->fetch();
 ?>


<div class="wrapper wrapper-content animated fadeInRight">
      <div class="row">
          <div class="col-lg-6">
          <div class="ibox float-e-margins">
              <div class="ibox-content">
                  <div id='printarea'>
                  <div class="hr-line-dashed"></div>
                  <center><h4>Slip Gaji</h4></center>
                  <div class="hr-line-dashed"></div>

                    <form  class="form-horizontal">
                        <div class="form-group"><label class="col-sm-2 control-label">Id karyawan</label>
                            <div class="col-sm-10"><input type="text" disabled="" value="<?php echo $datakaryawan['id_karyawan'] ?>" class="form-control"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Nama karyawan</label>
                            <div class="col-sm-10"><input type="text" disabled="" value="<?php echo $datakaryawan['nama_karyawan'] ?>" class="form-control"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-10"><input type="text" disabled="" value=" <?php echo $datakaryawan['alamat'] ?>" class="form-control"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">No Telp</label>
                            <div class="col-sm-10"><input type="text" disabled="" value="<?php echo $datakaryawan['no_telp'] ?>" class="form-control"></div>
                        </div>
                        <div class="hr-line-dashed"></div>

                    </form>

                  <table class="table table-bordered">
                      <thead>
                      <tr>
                        <th>Keterangan</th>
                        <th>Gaji</th>
                        <th>Jumlah</th>
                        <th>Sub Total</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>Gaji/bln</td>
                        <td>Rp.<?php echo number_format($datakaryawan['gaji'],0,',','.') ?>,-</td>
                        <td>1</td>
                        <td>Rp.<?php echo number_format($datakaryawan['gaji'],0,',','.') ?>,-</td>
                      </tr>
                      <tr>
                        <td>Lembur</td>
                        <td>Rp.<?php echo number_format($databiaya['gaji_lembur'],0,',','.') ?>,-</td>
                        <td><?php echo $datakaryawan['lembur'] ?></td>
                        <td>Rp.<?php echo number_format($datakaryawan['total_lembur'],0,',','.') ?>,-</td>
                      </tr>
                      <tr>
                        <td>Bonus</td>
                        <td>Rp.<?php echo number_format($databiaya['gaji_insentif'],0,',','.') ?>,-</td>
                        <td><?php echo $datakaryawan['insentif'] ?></td>
                        <td>Rp.<?php echo number_format($datakaryawan['total_insentif'],0,',','.') ?>,-</td>
                      </tr>
                      </tbody>
                      <thead>
                      <tr>
                          <th></th>
                          <th></th>
                          <th>Total</th>
                          <?php

                          $a=$datakaryawan['lembur']*$databiaya['gaji_lembur'];
                          $b=$datakaryawan['insentif']*$databiaya['gaji_insentif'];
                          $c=$datakaryawan['gaji'];
                          $total=$a+$b+$c;
                           ?>
                          <th>Rp.<?php echo number_format($total,0,',','.'); ?>,-</th>
                      </tr>
                      </thead>
                  </table>
                  <div class="hr-line-dashed"></div>
                  <p>Yogyakarta, <?php echo date("d/m/Y") ?></p>
                  <br>
                  <br>
                  <br>
                  <p>(------------------)</p>
                  <div class="hr-line-dashed"></div>
                  <center><p>Selamat menikmati hasil keringatmu.. :) </p></center>
                  <div class="hr-line-dashed"></div>

                </div>

                    <a type="button" href=index.php?page=karyawan class="btn btn-white" type="submit">Cancel</a>
                  <button class="btn  btn-primary btn-sm"  onclick='printContent(&apos;printarea&apos;)'>Print Nota</button>
              </div>
          </div>
      </div>

      </div>
      </div>
      <script type='text/javascript'>
          function printContent(el){
          	var restorepage = document.body.innerHTML;
          	var printcontent = document.getElementById(el).innerHTML;
          	document.body.innerHTML = printcontent;
          	window.print();
          	document.body.innerHTML = restorepage;
          }
</script>
