
<div class="wrapper wrapper-content animated fadeInRight">
      <div class="row">
          <div class="col-lg-6">
          <div class="ibox float-e-margins">
              <div class="ibox-content">
                  <div id='printarea'>
                  <div class="hr-line-dashed"></div>
                  <p>Tanggal: <?php echo date("d/m/Y") ?><center><h4>Nota Loundry</h4></center></p>
                  <div class="hr-line-dashed"></div>

                    <form  class="form-horizontal">
                        <div class="form-group"><label class="col-sm-2 control-label">No Transaksi</label>
                            <div class="col-sm-10"><input type="text" disabled="" value="<?php echo $_GET['id_transaksi'] ?>" class="form-control"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Id Cucian</label>
                            <div class="col-sm-10"><input type="text" disabled="" value=" C-<?php echo $_GET['id_transaksi'] ?>" class="form-control"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10"><input type="text" disabled="" value="<?php echo $_GET['nama'] ?>" class="form-control"></div>
                        </div>
                        <div class="hr-line-dashed"></div>

                    </form>

                  <table class="table table-bordered">
                      <thead>
                      <tr>
                          <th>Berat</th>
                          <th>Total Bayar</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php $biaya= $_GET['biaya']; ?>
                      <tr>
                          <td><?php echo $_GET['berat'] ?> kg</td>
                            <td>Rp.<?php echo number_format ($_GET['biaya'],0,',','.') ?>,- </td>
                      </tr>
                      </tbody>
                  </table>
                  <div class="hr-line-dashed"></div>

                  <p>Yogyakarta, <?php echo date("d/m/Y") ?></p>
                  <br>
                  <br>
                  <br>
                  <p>(------------------)</p>

                  <div class="hr-line-dashed"></div>
                  <center><p>Terimakasih sudah menggunakan jasa kami :)</p></center>
                  <div class="hr-line-dashed"></div>
                </div>

                    <a type="button" href=index.php?page=finish class="btn btn-white" type="submit">Cancel</a>
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
