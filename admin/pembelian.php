
<div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Data Pembelian</h5>
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
                    <th>Nama Barang </th>
                    <th>Nama Supplier</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $no=1;
                      $querypembelian = $dbh->query( "SELECT * FROM pembelian  ORDER BY id_pembelian");
                      while ($datapembelian = $querypembelian ->fetch())
                      {
                  ?>
                    <tr class="gradeX">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $datapembelian['nama_barang']; ?></td>
                        <?php
                        $querysupplier = $dbh->query("SELECT*FROM supplier where id_supplier='$datapembelian[id_supplier]' ");
                        $datasupplier = $querysupplier->fetch();
                         ?>
                        <td><?php echo $datasupplier['nama_supplier']; ?></td>
                        <td><?php echo number_format($datapembelian['stok'],0,',','.'); ?> </td>
                        <td>Rp.<?php echo number_format($datapembelian['harga'],0,',','.'); ?>,- </td>
                        <td><?php echo $datapembelian['tanggal']; ?> </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
                <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>Total</th>
                  <?php
                  $totalnya=$dbh->query("SELECT SUM(harga) AS total FROM pembelian");
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
