<?php
try {
	$dbh = new PDO('mysql:dbname=yc_rebate', 'root','12345678');
//	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTIOT);
} catch (PDOException $ex){
	echo '数据库连接失败：'.$ex->getMessage();
	exit;
}

try {
	$query = 'select * from activity_rebate_user order by user_id asc limit 10';
	$stmt = $dbh->prepare($query);
	$stmt->execute();

//	$data = $stmt->getColumnMeta("user_id");
	$data = $stmt->fetchAll();
	print_r($data);
}catch(PDOException $ex){
	echo $ex->getMessage();
}