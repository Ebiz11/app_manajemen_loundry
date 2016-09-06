
<div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Cucian Dalam Proses</h5>
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
                    <th>Id </th>
                    <th>Nama </th>
                    <th>Berat</th>
                    <th>tanggal_ambil</th>
                    <th>Deadline</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $no=1;
                      $querytransaksi = $dbh->query( "SELECT * FROM transaksi where proses='1' ORDER BY id_transaksi");
                      while ($datatransaksi = $querytransaksi ->fetch())
                      {
                  ?>
                    <tr class="gradeX">
                        <td><?php echo $no++; ?></td>
                        <td>C-<?php echo $datatransaksi['id_transaksi']; ?></td>
                        <td><?php echo $datatransaksi['nama']; ?></td>
                        <td><?php echo $datatransaksi['berat']; ?> Kg</td>
                        <td><?php echo $datatransaksi['tanggal_ambil']; ?></td>
                        <?php
                        include("str.php");
                        include("diskon.php");
                        $biaya;
                        ?>
                        <td><?php echo $sisa_hari ; ?> Hari</td>
                        <td>
                          <?php if($datatransaksi['proses'] == "1") { ?>
                          <a type="button" class="btn btn-success   btn-sm" href="update-prosesnew.php?&id_transaksi=<?php echo $datatransaksi['id_transaksi'];?>&proses=2&biaya=<?php echo $biaya; ?>&berat=<?php echo $datatransaksi['berat']; ?>&nama_customer=<?php echo $datatransaksi['nama']; ?>" >Finish</a>
                          <?php } ?>
                          <a type="button" class="btn  btn-info btn-sm" href="index.php?page=edit_transaksi&id_transaksi=<?php echo $datatransaksi['id_transaksi']; ?>"><i class="fa fa-pencil-square-o"> Edit</i></a>
                          <a type="button" class="btn  btn-danger btn-sm" href="index.php?page=del_transaksi&id_transaksi=<?php echo $datatransaksi['id_transaksi']; ?>"><i class="fa fa fa-trash"> Hapus</i></a>
                        </td>
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
