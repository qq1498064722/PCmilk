<?php
	$method=$_SERVER['REQUEST_METHOD'];
	if($method==='GET'){
		include "../view/admin/cateinsert.html";
	}
	else{
		include "../lib/common.php";
		$arr=$_POST;
		$keys=joinkeys($arr);
		$values=joinvalues($arr);
		require '../lib/db.php';
		$sql="insert into cate ($keys) values ($values)";
		echo  $sql;
		$mysql->query($sql);
		if($mysql->affected_rows >0){
			echo json_encode([
				'code'=>200,
				'msg'=>'插入成功'
			]);
			exit();
		}else{
			echo json_encode([
				'code'=>404,
				'msg'=>'插入失败'
			]);
		}
		
		
	}
