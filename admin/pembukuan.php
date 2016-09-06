
<div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Laporan Pembukuan</h5>
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

                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th>No </th>
                    <th>Keterangan</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $no=1;
                      $querypembukuan = $dbh->query( "SELECT * FROM pembukuan  ORDER BY id_buku");
                      while ($databuku = $querypembukuan ->fetch())
                      {
                  ?>
                    <tr class="gradeX">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $databuku['keterangan']; ?></td>
                        <td>Rp.<?php echo number_format ($databuku['debet'],0,',','.'); ?>,-</td>
                        <td>Rp.<?php echo number_format ($databuku['kredit'],0,',','.'); ?>,-</td>
                        <td><?php echo $databuku['tanggal']; ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
                <thead>
                <tr>
                    <th> </th>
                    <th>Total</th>
                    <th>Rp.
                    <?php
                    $querydebet=$dbh->query("SELECT SUM(debet) AS totaldebet FROM pembukuan");
                    $datadebet=$querydebet->fetch();
                    echo number_format($datadebet['totaldebet'],0,',','.');
                     ?>
                   </th>
                    <th>Rp.
                      <?php
                      $querydebet=$dbh->query("SELECT SUM(kredit) AS totalkredit FROM pembukuan");
                      $datadebet=$querydebet->fetch();
                      echo number_format($datadebet['totalkredit'],0,',','.');
                       ?>
                    </th>
                    <th></th>

                </tr>
                </thead>
                <tfoot>
                <tr>
                </tr>
                </tfoot>
                </table>
                <?php
              /*  $debetakhir=$dbh ->query("SELECT SUM(debet) AS debetakhir FROM pembukuan");
                $datadebet=$debetakhir->fetch();

                $kreditakhir=$dbh ->query("SELECT SUM(kredit) AS kreditakhir FROM pembukuan");
                $datakredit=$kreditakhir->fetch();

                $saldoakhir= $datadebet['debetakhir']-$datakredit['kreditakhir']; */
                 ?>

                </div>
            </div>
        </div>
        </div>

        </div>
