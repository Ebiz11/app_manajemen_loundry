
<div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Data Supplier</h5>
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
                  <a type="button" class="btn btn-primary  btn-primary btn-sm" href="index?page=tambah_supplier" >Tambah Data</a></br></br>
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th>No </th>
                    <th>Id Supplier</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Nama Barang</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $no=1;
                      $querysupplier = $dbh->query( "SELECT * FROM supplier  ORDER BY id_supplier");
                      while ($datasupplier = $querysupplier ->fetch())
                      {
                  ?>
                    <tr class="gradeX">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $datasupplier['id_supplier']; ?></td>
                        <td><?php echo $datasupplier['nama_supplier']; ?></td>
                        <td><?php echo $datasupplier['alamat']; ?></td>
                        <td><?php echo $datasupplier['no_telp']; ?> </td>
                        <td> <?php echo $datasupplier['nama_barang'] ?></td>

                        <td>
                          <a ype="button" class="btn btn-info btn-sm" href="index.php?page=edit_supplier&id_supplier=<?php echo $datasupplier['id_supplier']; ?>"><i class="fa fa-pencil-square-o"> Edit</i></a>
                          <a type="button" class="btn btn-danger btn-sm" href="index.php?page=del_supplier&id_supplier=<?php echo $datasupplier['id_supplier']; ?>"><i class="fa fa fa-trash"> Hapus</i></a>
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
