
<div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Laporan</h5>
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
                    <th>Id Transaksi</th>
                    <th>Nama</th>
                    <th>Berat</th>
                    <th>Detergen</th>
                    <th>Pewangi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $no=1;
                      $queryjasa = $dbh->query( "SELECT * FROM transaksi where proses='2' ");
                      while ($datajasa = $queryjasa ->fetch())
                      {
                  ?>
                    <tr class="gradeX">
                        <td><?php echo $no++; ?></td>
                        <td>C-<?php echo $datajasa['id_transaksi'] ?></td>
                        <td><?php echo $datajasa['nama'] ?></td>
                        <td><?php echo $datajasa['berat'] ?> Kg</td>
                        <?php
                        $det=$datajasa['detergen']/1000;
                        $pew=$datajasa['pewangi']/1000;
                         ?>
                        <td><?php echo $det ?> Kg</td>
                        <td><?php echo $pew ?> Liter</td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
                <thead>
                <tr>

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
