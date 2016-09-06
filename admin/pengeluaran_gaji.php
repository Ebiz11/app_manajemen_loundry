
<div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Gaji Karyawan</h5>
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
                    <th>Id Karyawan</th>
                    <th>Nama Karyawan</th>
                    <th>Gaji</th>
                    <th>Lembur</th>
                    <th>Bonus</th>
                    <th>Total</th>
                    <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                  $querygaji=$dbh->query("SELECT*FROM lembur_insentif ORDER BY id_karyawan");
                  while($datagaji=$querygaji->fetch())
                  {   ?>
                    <tr class="gradeX">
                <td><?php echo $no++ ?> </td>
                <td><?php echo $datagaji['id_karyawan'] ?> </td>
                <td>
                  <?php $querykar=$dbh->query("SELECT*FROM karyawan WHERE id_karyawan='$datagaji[id_karyawan]' ");
                  $datakar=$querykar->fetch(); ?>
                  <?php echo $datakar['nama_karyawan'] ?>
                </td>
                <td>Rp.<?php echo number_format($datagaji['gaji'],0,',','.'); ?> </td>
                <td>Rp.<?php echo number_format($datagaji['lembur'],0,',','.'); ?> </td>
                <td>Rp.<?php echo number_format($datagaji['insentif'],0,',','.'); ?> </td>
                <td>Rp.<?php echo number_format($datagaji['total_gaji'],0,',','.'); ?> </td>
                <td><?php echo $datagaji['tanggal']; ?> </td>

                <?php } ?>
              </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>Total</th>
                  <?php
                  $totalnya=$dbh->query("SELECT SUM(total_gaji) AS total FROM lembur_insentif");
                  $datatotal=$totalnya->fetch();
                   ?>
                  <th>Rp.<?php echo number_format($datatotal['total'],0,',','.') ?>,-</th>
                  <th></th>
                </tr>
                </tfoot>
                </table>

                </div>
            </div>
        </div>
        </div>

        </div>
