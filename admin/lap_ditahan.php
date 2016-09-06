
<div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Laporan Pendapatan Ditahan</h5>
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
                    <th>Id transaksi</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $no=1;
                      $querylaporan = $dbh->query( "SELECT * FROM detail_transaksi WHERE st_bayar='0' ORDER BY nota");
                      while ($datalaporan = $querylaporan ->fetch())
                      {
                  ?>
                    <tr class="gradeX">
                        <td><?php echo $no++; ?></td>
                        <td>C-<?php echo $datalaporan['id_transaksi'] ?></td>
                            <td><?php echo $datalaporan['nama'] ?></td>
                        <td>Rp.<?php echo number_format ($datalaporan['total'],0,',','.'); ?>,-</td>
                        <td><?php echo $datalaporan['tanggal']; ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
                <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th>Total</th>
                  <?php
                  $totalnya=$dbh->query("SELECT SUM(total) AS total FROM detail_transaksi WHERE st_bayar='0'");
                  $datatotal=$totalnya->fetch();
                   ?>
                  <th>Rp.<?php echo number_format($datatotal['total'],0,',','.') ?>,-</th>
                  <th></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                </tr>
                </tfoot>
                </table>

                </div>
            </div>
        </div>
        </div>

        </div>
