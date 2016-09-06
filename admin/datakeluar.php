	<?php
mysql_connect("localhost","u241789732_root","39133494");
mysql_select_db("u241789732_putri");
//$jumlah=$dbh->query("SELECT SUM(berat) as total  from transaksi where status='1'");
$sql="SELECT SUM(harga) as total,tanggal from pembelian  GROUP BY tanggal";
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
