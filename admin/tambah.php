
<?php
if(isset($_POST['button'])){

  $nama=$_POST['nama'];
  $id_member=$_POST['id_member'];
  $berat=$_POST['berat'];
  $tanggal_ambil=$_POST['tanggal_ambil'];

/*  $error=array();
  if(empty($nama)){
    $error['nama']='Nama TidakBoleh Kosong';

  }if(empty($berat)){
    $error['berat']='Nama TidakBoleh Kosong';

  }else{*/

      $dbh->query("INSERT INTO transaksi (nama, id_member, berat,tanggal_ambil)
      VALUES('$_POST[nama]','$_POST[id_member]','$_POST[berat]','$_POST[tanggal_ambil]')");

        echo "<script>document.location='index.php?page=masuk';</script>";
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Add Data</h5>
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
                <form method="post" class="form-horizontal">
                <div class="form-group"><label class="col-sm-2 control-label">Id Member</label>
                    <div class="col-sm-10"><input type="text" id="id_member" name="id_member" class="form-control"></div>
                </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10"><input type="text" id="nama" name="nama" class="form-control" required></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Berat Cucian</label>
                        <div class="col-sm-10"><input type="text"  name="berat" class="form-control" required></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Tanggan Ambil</label>
                		  	<div class="col-sm-10"><input class="form-control" type="date" name="tanggal_ambil" required></div>
            		    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <a type="button" href=index.php?page=home class="btn btn-white" type="submit">Cancel</a>
                            <button class="btn btn-primary" type="submit" name="button">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script language="javascript">
$(document).ready(function() {
  $("#id_member").keyup(function() {
      var member = $('#id_member').val();
  $.post('load_data_member.php', // request ke file load_data.php
  {parent_id: member},
  function(data){
     $('#nama').val(data[0].nama_member);
     $('#id_member').val(data[0].id_member);
  },'json'
    );
 });
 });
</script>
