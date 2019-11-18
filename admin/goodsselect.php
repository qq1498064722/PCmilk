<?php
	//展示页面   获取数据
	require '../lib/db.php';
	$sql = 'select goods.*,cate.cname from goods left join cate on goods.cid=cate.cid';
	$res=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
	require '../view/admin/goodsselect.html';
?>
