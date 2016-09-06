

	<?php
mysql_connect("localhost","root","");
mysql_select_db("putri");
//$jumlah=$dbh->query("SELECT SUM(berat) as total  from pelanggan where status='1'");
$sql="SELECT SUM(berat) as total,tanggal_ambil from pelanggan where status='1' GROUP BY tanggal_ambil";
$rs=mysql_query($sql);
$penjualan=array();
while ($row = mysql_fetch_object($rs)) {
	$penjualan[]=array(
		'y'=>$row->tanggal_ambil,
		'jumlah'=>$row->total,
		);
}
	echo json_encode($penjualan);
?>
