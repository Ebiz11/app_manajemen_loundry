	<?php
mysql_connect("localhost","root","");
mysql_select_db("putri");
//$jumlah=$dbh->query("SELECT SUM(berat) as total  from transaksi where status='1'");
$sql="SELECT SUM(total) as total,tanggal from detail_transaksi where st_bayar='1' GROUP BY tanggal";
//$biaya=3000;
//$sub=$sql['total']*$biaya;
$rs=mysql_query($sql);
$penjualan=array();
while ($row = mysql_fetch_object($rs)) {
	$penjualan[]=array(
		'y'=>$row->tanggal,
		'jumlah'=>$row->total,
		);
}
	echo json_encode($penjualan);
?>
