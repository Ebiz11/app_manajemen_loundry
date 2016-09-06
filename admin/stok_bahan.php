
<div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Stok Bahan</h5>
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
                    <th>Kode Barang </th>
                    <th>Nama Barang </th>
                    <th>Nama Supplier</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $no=1;
                      $querybiaya= $dbh->query("SELECT*FROM biaya");
                      $databiaya=$querybiaya->fetch();
                      $querystok = $dbh->query( "SELECT * FROM barang WHERE kd_barang='$databiaya[kd_detergen]' OR kd_barang='$databiaya[kd_pewangi] '  ORDER BY kd_barang");
                      while ($datastok = $querystok ->fetch())
                      {
                  ?>
                    <tr class="gradeX">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $datastok['kd_barang']; ?></td>
                        <td><?php echo $datastok['nama_barang']; ?></td>
                        <?php
                        $querysupplier = $dbh->query("SELECT*FROM supplier where id_supplier='$datastok[id_supplier]' ");
                        $datasupplier = $querysupplier->fetch();
                         ?>
                        <td><?php echo $datasupplier['nama_supplier']; ?></td>
                        <td>
                          <?php
                          $stok=$datastok['stok']/1000;
                          echo $stok;
                          ?>  Kilogram/Liter
                        </td>
                        <td><a type="button" class="btn btn-info btn-sm" href="index?page=update_stok&kd_barang=<?php echo $datastok['kd_barang']; ?>" >Update Stok</a></td>

                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
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
