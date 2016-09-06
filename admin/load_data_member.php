<?php
$c=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('putri',$c)or die(mysql_error()); 

		$sql="select * from member where id_member='$_POST[parent_id]'";
		$response = array();
		$query = mysql_query($sql);
		if($query){
			if(mysql_num_rows($query) > 0){
				while($row = mysql_fetch_object($query)){

					$response[] = $row;
				}
			}else{
				$response['error'] = 'Data kosong';
			}
		}else{
			$response['error'] = mysql_error();
		}
		die(json_encode($response));

?>
