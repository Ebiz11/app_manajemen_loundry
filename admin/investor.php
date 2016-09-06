
<div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Data Investor</h5>
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
                  <a type="button" class="btn btn-primary  btn-primary btn-sm" href="index?page=tambah_investor" >Tambah Data</a></br></br>
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th>No </th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Modal</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $no=1;
                      $queryinvestor = $dbh->query( "SELECT * FROM investor  ORDER BY id_investor");
                      while ($datainvestor = $queryinvestor ->fetch())
                      {
                  ?>
                    <tr class="gradeX">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $datainvestor['nama_investor']; ?></td>
                        <td><?php echo $datainvestor['alamat']; ?></td>
                        <td><?php echo $datainvestor['no_telp']; ?> </td>
                        <td>Rp.<?php echo number_format($datainvestor['modal'],0,',','.'); ?>,- </td>

                        <td>
                          <a  type="button" class="btn btn-info" href="index.php?page=edit_investor&id_investor=<?php echo $datainvestor['id_investor']; ?>"><i class="fa fa-pencil-square-o"> Edit</i></a>
                          <a type="button" class="btn btn-danger" href="index.php?page=del_investor&id_investor=<?php echo $datainvestor['id_investor']; ?>"><i class="fa fa fa-trash"> Hapus</i></a>
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
