
<div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Data Cucian Masuk</h5>
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
                  <a type="button" class="btn btn-primary  btn-primary btn-sm" href="index?page=tambah" >Tambah Data</a></br></br>
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th>No </th>
                    <th>Id</th>
                    <th>Nama </th>
                    <th>Berat</th>
                    <th>Biaya</th>
                    <th>Diskon</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Ambil</th>
                    <th>Deadline</th>
                    <th>Aksi </th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $no=1;
                      $querytransaksi = $dbh->query( "SELECT * FROM transaksi where status='0' and proses='0'  ORDER BY id_transaksi");
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
                        <td><?php echo $datatransaksi['tanggal_masuk']; ?></td>
                        <td><?php echo $datatransaksi['tanggal_ambil']; ?></td>
                        <?php include("str.php"); ?>
                        <td><?php echo $sisa_hari ; ?> Hari</td>
                        <td>
                        <?php if($datatransaksi['proses'] == "0") { ?>
                        <a type="button" class="btn btn-success   btn-sm" href="update-proses.php?id_transaksi=<?php echo $datatransaksi['id_transaksi'];?>&proses=1&berat=<?php echo $datatransaksi['berat'];?>" >Proses</a>
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
                <?php
                $querytransaksi = $dbh->query( "SELECT SUM(berat) AS totalberat FROM transaksi where status='0' and proses='0'");
                $datatransaksi = $querytransaksi ->fetch();
                $totalberat=$datatransaksi['totalberat'];

                $biayanya = $dbh->query("SELECT*FROM biaya");
                 $databiaya= $biayanya->fetch();
                 $stok1 = $dbh->query("SELECT*FROM barang WHERE kd_barang='$databiaya[kd_detergen]'");
                 $stokdetergen= $stok1->fetch();
                 $stok2 = $dbh->query("SELECT*FROM barang WHERE kd_barang='$databiaya[kd_pewangi]'");
                 $stokpewangi= $stok2->fetch();

                 $stokdetergen=$stokdetergen['stok'];
                 $stokpewangi=$stokpewangi['stok'];

                   $detergen=$databiaya['detergen'];
                   $kddetergen=$databiaya['kd_detergen'];
                   $pewangi=$databiaya['pewangi'];
                   $tanggal= date("Y-n-j");
                   $kdpewangi=$databiaya['kd_pewangi'];
                   $kurangdetergen=$totalberat*$detergen;
                   $kurangpewangi=$totalberat*$pewangi;
                 ?>
                 <br><br>
                  <?php
                  $det=$stokdetergen/1000;
                  $pew=$stokpewangi/1000;
                  if($kurangdetergen>=$stokdetergen OR $kurangpewangi >=$stokpewangi) { ?>
                    <div class="alert alert-danger">
                  <h4> Status Stok: <?php echo "Stok Habis !!" ?></h4> </p>Stok Detergen: <?php echo $det ?> Kg <br>Stok Pewangi: <?php echo $pew ?> Liter</p>
                  </div>
                <?php  }else{ ?>
                  <div class="alert alert-info">
                  <h4> Status Stok:  </p></h4><?php  echo "Stok Masih Mencukupi.." ?></p>
                    </div>
                <?php  }
                   ?>
                </div>
            </div>
        </div>
        </div>

        </div>
