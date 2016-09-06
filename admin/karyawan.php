
<div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Data Karyawan</h5>
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
                  <a type="button" class="btn btn-primary  btn-primary btn-sm" href="index?page=tambah_karyawan" >Tambah Data</a></br></br>
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th>No </th>
                    <th>Nama Karyawan</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Gaji/Bulan</th>
                    <th>Lembur</th>
                    <th>Bonus</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Slip Gaji</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $no=1;
                      $querykaryawan = $dbh->query( "SELECT * FROM karyawan  ORDER BY id_karyawan");
                      while ($datakaryawan = $querykaryawan ->fetch())
                      {
                  ?>
                    <tr class="gradeX">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $datakaryawan['nama_karyawan']; ?></td>
                        <td><?php echo $datakaryawan['alamat']; ?></td>
                        <td><?php echo $datakaryawan['no_telp']; ?> </td>
                        <?php
                        $qbiaya=$dbh->query("SELECT*FROM biaya");
                        $databiaya=$qbiaya->fetch();
                        $a=$datakaryawan['lembur']*$databiaya['gaji_lembur'];
                        $b=$datakaryawan['insentif']*$databiaya['gaji_insentif'];
                        $c=$datakaryawan['gaji'];
                        $total=$a+$b+$c;
                         ?>
                        <td>Rp.<?php echo number_format($datakaryawan['gaji'],0,',','.'); ?>,- </td>
                        <td>Rp.<?php echo number_format($a,0,',','.'); ?>
                        (<?php echo $datakaryawan['lembur']?>)</td>
                        <td>Rp.<?php echo number_format($b,0,',','.'); ?>
                        (<?php echo $datakaryawan['insentif']?>)</td>
                        <td>Rp.<?php echo number_format($total,0,',','.'); ?></td>
                        <td>
                        <?php if($datakaryawan['st_gaji']=="0"){?>
                        <a><?php  echo "Belum";?></a>
                         <?php  }elseif ($datakaryawan['st_gaji']=="1"){?>
                          <a> <?php  echo "Sudah";?></a>
                        <?php
                         }
                         ?>
                       </td>
                       <td><a  href="index?page=slip_gaji&id_karyawan=<?php echo $datakaryawan['id_karyawan'];?>">lihat</a></td>

                        <td>
                          <a type="button" class="btn   btn-primary btn-sm" href="index?page=update_karyawan&id_karyawan=<?php echo $datakaryawan['id_karyawan']; ?>" href="index.php?page=editpelangan&id_barang=<?php echo $databarang['id_barang']; ?>"><i class="fa fa-pencil-square-o"> Edit</i></a>
                          <a type="button" class="btn   btn-danger btn-sm" href="index.php?page=hapus_karyawan&id_karyawan=<?php echo $datakaryawan['id_karyawan']; ?>"><i class="fa fa fa-trash"> Hapus</i></a>
                          <?php if($datakaryawan['st_gaji']=="0"){?>
                          <a type="button" class="btn   btn-warning btn-sm" href="index.php?page=bayargaji&id_karyawan=<?php echo $datakaryawan['id_karyawan']; ?>&st_gaji=1&gaji=<?php echo $datakaryawan['gaji']; ?>&lembur=<?php echo $a ?>&insentif=<?php echo $b; ?>">Bayar Gaji</a>
                        <?php }elseif ($datakaryawan['st_gaji']=="1"){ ?>
                          <a type="button" class="btn   btn-success btn-sm" href="index.php?page=update_gaji&id_karyawan=<?php echo $datakaryawan['id_karyawan']; ?>&st_gaji=0">Set Ulang</a>
                        <?php
                        }
                          ?>
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
