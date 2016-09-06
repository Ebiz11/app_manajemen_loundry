
<div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Cucian Finish</h5>
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
                    <th>Biaya</th>
                    <th>Diskon</th>
                    <th>Status</th>
                    <th>Nota</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $no=1;

                      $querytransaksi = $dbh->query( "SELECT * FROM transaksi  where proses='2'  ORDER BY status");
                      while ($datatransaksi = $querytransaksi ->fetch())
                      {
                  ?>
                    <tr class="gradeX">
                        <td><?php echo $no++; ?></td>
                        <td>C-<?php echo $datatransaksi['id_transaksi']; ?></td>
                        <td><?php echo $datatransaksi['nama']; ?></td>
                        <td><?php echo $datatransaksi['berat']; ?> Kg</td>
                        <?php include("diskon.php"); ?>
                        <td>Rp. <?php echo number_format($biaya,0,',','.');?>,-</td>
                        <td>
                          <?php if($datamember['id_member'] == $datatransaksi['id_member'] && $datatransaksi['berat'] >=$databayar['kg']) { ?>
                          <a>Rp.<?php echo number_format($diskon,0,',','.'); ?>,-</a>
                            <?php } else {?>
                              Rp.0 <?php } ?>
                        </td>
                        <td>
                          <?php if($datamember['id_member'] == $datatransaksi['id_member'] && $datatransaksi['berat'] >=$databayar['kg']) { ?>
                          <a>Member</a>
                            <?php } else {?>
                              Bukan <?php } ?>
                        </td>
                        <td><a  href="index?page=nota&id_transaksi=<?php echo $datatransaksi['id_transaksi'];?>&status=1&biaya=<?php echo $biaya; ?>&berat=<?php echo $datatransaksi['berat']; ?>&nama=<?php echo $datatransaksi['nama']; ?> ">Nota</a></td>
                        <td>
                          <?php if($datatransaksi['status'] == "0") { ?>
                          <a type="button" class="btn  btn-warning btn-sm"  href="update_status.php?id_transaksi=<?php echo $datatransaksi['id_transaksi'];?>&status=1&biaya=<?php echo $biaya; ?>&berat=<?php echo $datatransaksi['berat']; ?> ">Belum Diambil</a>
                          <?php } else if($datatransaksi['status'] == "1") { ?>
                          <a type="button" class="btn btn-primary btn-sm" disabled="" href="update_status.php?id_transaksi=<?php echo $datatransaksi['id_transaksi'];?>&status=0" >Diambil</a>
                          <?php } ?>
                          <a type="button" class="btn  btn-info btn-sm" href="index.php?page=edit_transaksi&id_transaksi=<?php echo $datatransaksi['id_transaksi']; ?>"><i class="fa fa-pencil-square-o"> Edit</i></a>
                          <a type="button" class="btn  btn-danger btn-sm" href="index.php?page=del_transaksi&id_transaksi=<?php echo $datatransaksi['id_transaksi']; ?>"><i class="fa fa fa-trash"></i> Hapus</a>

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
              </form>

                </div>
            </div>
        </div>
        </div>

        </div>
